<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Helper;
use Storage;

class HomeContent extends Model
{
    use HasFactory;
    protected $table = 'home_content';

    protected $fillable = [
        'id',
        'home_id',
        'name',
        'type',
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

    public static function listDataType($id,$type){
        $data = HomeContent::join('home','home_content.home_id','=','home.id')
                ->where('home.id',$id)
                ->where('home_content.type',$type)
                ->select('home.name as home','home_content.*')
                ->orderBy('home_content.created_at','desc')
                ->get();

        return $data;
    }

    public static function listData($id){
        $data = HomeContent::join('home','home_content.home_id','=','home.id')
                ->where('home.id',$id)
                ->select('home.name as home','home_content.*')
                ->orderBy('home_content.created_at','desc')
                ->get();

        return $data;
    }

    public static function detailData($id){
        $data = HomeContent::join('home','home_content.home_id','=','home.id')
                ->where('home_content.id',$id)
                ->select('home.name as home','home_content.*')
                ->first();

        return $data;
    }

    public static function insertData($request){
        
        if($request->file('image')){

            $image=Helper::image($request->file('image'),'customer');
        }else{
            $image = '';
        }

    $data = HomeContent::create([
        'id'    => (string) Str::uuid(),
        'home_id'  => $request->home_id,
        'name'  => $request->name,
        'type'  => $request->type,
        'content'  => $request->content,
        'image' => $image,

    ]);
    
    return $data;
    }

    public static function updateData($request){

        $check=HomeContent::find($request->id);

        if($check->image){
        
        if($request->file('image')){
            Storage::delete('public/'.$check->image);
            $image = Helper::image($request->file('image'),'home');
            }else{
                $image = $check->image;
            }
        }else{

            if($request->file('image')){

                $image = Helper::image($request->file('image'),'home');
            }else{
                $image = $check->image;
            }
        }
            $data = HomeContent::where('id',$request->id)->update([
                'home_id'  => $request->home_id,
                'name'  => $request->name,
                'type'  => $request->type,
                'content'  => $request->content,
                'image' => $image,

            ]);
        
            return $data;
        }

    public static function deleteData($id){
        $check = HomeContent::where('id',$id)->first();

        if ($check->image){
            Helper::deleteImage($check->image);
        }
        
        $data = HomeContent::where('id',$id)->delete();
        return $data;
    }
}
