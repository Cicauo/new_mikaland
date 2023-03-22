<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Helper;
use Storage;

class Home extends Model
{
    use HasFactory;
    protected $table = 'home';

    protected $fillable = [
        'id',
        'project_id',
        'name',
        'content',
        'image'
    ];

    public function getIncrementing(){
        return false;
    }
    

    public function getKeyType(){
        return 'string';
    }

    public static function listData(){
        $data = Home::join('projects','home.project_id','=','projects.id')
                ->select('projects.name as projects','home.*')
                ->orderBy('home.created_at','desc')
                ->get();

        return $data;
    }

    public static function detailData($id){
        $data = Home::join('projects','home.project_id','=','projects.id')
                ->where('home.id',$id)
                ->select('projects.name as projects','home.*')
                ->first();

        return $data;
    }

    public static function insertData($request){
        
        if($request->file('image')){

            $image=Helper::image($request->file('image'),'customer');
        }else{
            $image = '';
        }

    $data = Home::create([
        'id'    => (string) Str::uuid(),
        'name'  => $request->name,
        'content'  => $request->content,
        'project_id'  => $request->project_id,
        'image' => $image,

    ]);
    
    return $data;
    }

    public static function updateData($request){

        $check=Home::find($request->id);

        if($check->image){
        
        if($request->file('image')){
            Storage::delete('public/'.$check->image);
            $image = Helper::image($request->file('image'),'customer');
            }else{
                $image = $check->image;
            }
        }else{

            if($request->file('image')){

                $image = Helper::image($request->file('image'),'customer');
            }else{
                $image = $check->image;
            }
        }
            $data = Home::where('id',$request->id)->update([
                'name' => $request->name,
                'content'  => $request->content,
                'project_id'  => $request->project_id,
                'image' => $image,
            ]);
        
            return $data;
        }

    public static function deleteData($id){
        $check = Home::where('id',$id)->first();

        if ($check->image){
            Helper::deleteImage($check->image);
        }
        
        $data = Home::where('id',$id)->delete();
        return $data;
    }

    public static function listDataSlug($slug){
        $data = Home::join('projects','home.project_id','=','projects.id')
                ->where('projects.slug',$slug)
                ->select('projects.name as projects','home.*')
                ->orderBy('home.created_at','desc')
                ->get();

        return $data;
    }
}
