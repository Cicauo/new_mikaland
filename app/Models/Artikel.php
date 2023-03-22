<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Helper;
use Storage;
use Session;

class Artikel extends Model
{
    use HasFactory;
    protected $table = 'artikel';

    protected $fillable = [
        'id',
        'name',
        'slug',
        'users_id',
        'artikel_category_id',
        'title',
        'content',
        'image',
    ];

    public function getIncrementing()
    {
        return false;
    }

        /**
        * Get the auto-incrementing key type.
        *
        * @return string
        */
    public function getKeyType()
    {
        return 'string';
    }

    public static function listDataPaginate(){
        $data = Artikel::leftJoin('users','artikel.users_id','=','users.id')
                ->leftJoin('artikel_category','artikel.artikel_category_id','artikel_category.id')
                ->select('artikel.*','artikel_category.category','users.name as users')
                ->orderBy('artikel.created_at','desc')
                ->paginate(10);
        
        return $data;
    }

    public static function limitArtikel(){
        $data = Artikel::leftJoin('users','artikel.users_id','=','users.id')
                ->leftJoin('artikel_category','artikel.artikel_category_id','artikel_category.id')
                ->select('artikel.*','artikel_category.category','users.name as users')
                ->orderBy('artikel.created_at','desc')
                ->limit(3)->get();
        
        return $data;
    }

    public static function listDataPaginateCategory($category_id){
        $data = Artikel::leftJoin('users','artikel.users_id','=','users.id')
                ->leftJoin('artikel_category','artikel.artikel_category_id','artikel_category.id')
                ->where('artikel_category.id',$category_id)
                ->select('artikel.*','artikel_category.category','users.name as users')
                ->orderBy('artikel.created_at','desc')
                ->paginate(10);
        
        return $data;
    }

    public static function listDataPaginateSearch($title){
        $data = Artikel::leftJoin('users','artikel.users_id','=','users.id')
                ->leftJoin('artikel_category','artikel.artikel_category_id','artikel_category.id')
                ->where('artikel.title','like','%'.$title.'%')
                ->select('artikel.*','artikel_category.category','users.name as users')
                ->orderBy('artikel.created_at','desc')
                ->paginate(10);
        
        return $data;
    }

    public static function listData(){
        $data = Artikel::leftJoin('users','artikel.users_id','=','users.id')
                ->leftJoin('artikel_category','artikel.artikel_category_id','artikel_category.id')
                ->select('artikel.*','artikel_category.category','users.name as users')
                ->orderBy('artikel.created_at','desc')
                ->get();
        
        return $data;
    }

    public static function detailData($id){
        $data = Artikel::leftJoin('users','artikel.users_id','=','users.id')
                ->leftJoin('artikel_category','artikel.artikel_category_id','artikel_category.id')
                ->where('artikel.id',$id)
                ->select('artikel.*','artikel_category.category','users.name as users')
                ->first();
        
        return $data;
    }

    public static function detailDataSlug($slug){
        $data = Artikel::leftJoin('users','artikel.users_id','=','users.id')
                ->leftJoin('artikel_category','artikel.artikel_category_id','artikel_category.id')
                ->where('artikel.slug',$slug)
                ->select('artikel.*','artikel_category.category','users.name as users')
                ->first();
        
        return $data;
    }

    public static function insertData($request){


        $slug = Helper::slug($request->title);

        if($request->file('image')){

            $image=Helper::image($request->file('image'),'artikel');
        }else{
            $image = '';
        }


        $data = Artikel::create([
            'id'                    => (string) Str::uuid(),
            'title'                 => $request->title,
            'users_id'              => Session::get('id'),
            'artikel_category_id'   => $request->artikel_category_id,
            'content'               => $request->content,
            'image'                 => $image,
            'slug'                  => $slug,
        ]);
        
        return $data;
    }

    public static function updateData($request){

        $check=Artikel::find($request->id);

        if($check->image){
        
        if($request->file('image')){
            Storage::delete('public/'.$check->image);
            $image = Helper::image($request->file('image'),'artikel');
            }else{
                $image = $check->image;
            }
        }else{

            if($request->file('image')){

                $image = Helper::image($request->file('image'),'artikel');
            }else{
                $image = $check->image;
            }
        }

        $slug = Helper::slug($request->title);

        $data = Artikel::where('id',$request->id)->update([
            'title'                 => $request->title,
            'users_id'              => Session::get('id'),
            'artikel_category_id'   => $request->artikel_category_id,
            'content'               => $request->content,
            'image'                 => $image,
            'slug'                  => $slug,
        ]);
    
        return $data;
    }

    public static function deleteData($id){
        $check = Artikel::where('id',$id)->first();

        if ($check->image){
            Helper::deleteImage($check->image);
        }
        
        $data = Artikel::where('id',$id)->delete();
        return $data;
    }
}
