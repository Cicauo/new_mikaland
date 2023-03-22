<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Helper;
use Storage;


class Content extends Model
{
    protected $table = 'content';
    use HasFactory;

    protected $fillable = [
        'id',
        'position',
        'title',
        'subtitle',
        'image',
        'content',
        'type',
        'icon',
        'link',
        ];

        public function getIncrementing(){
            return false;
        }
        
                /**
                * Get the auto-incrementing key type.
                *
                * @return string
                */
        public function getKeyType(){
            return 'string';
        }
        
            public static function listData($id){
                $data = Content::orderBy('created_at','desc')->get();
                
                return $data;
            }
        
                 public static function insertData($request){
        
                    if($request->file('image')){

                        $image=Helper::image($request->file('image'),'projects');
                    }else{
                        $image = '';
                    }
        
                $data = Content::create([
                    'id' => (string) Str::uuid(),
                    'position' => $request->position,
                    'title' => $request->title,
                    'subtitle' => $request->subtitle,
                    'image' => $image,
                    'content' => $request->content,
                    'type' => $request->type,
                    'icon' => $request->icon,
                    'link' => $request->link,
                ]);
                
                return $data;
                }
        
                public static function updateData($request){

                    $check=Content::find($request->id);

                if($check->image){
                    
                    if($request->file('image')){
                        Storage::delete('public/'.$check->image);

                        $image = Helper::image($request->file('image'),'projects');
                    }else{
                        $image = $check->image;
                    }
                }else{

                    if($request->file('image')){

                        $image = Helper::image($request->file('image'),'projects');
                    }else{
                        $image = $check->image;
                    }
                }
                    $data = Content::where('id',$request->id)->update([
                        'position' => $request->position,
                        'title' => $request->title,
                        'subtitle' => $request->subtitle,
                        'image' => $image,
                        'content' => $request->content,
                        'type' => $request->type,
                        'icon' => $request->icon,
                        'link' => $request->link,
                    ]);
                    
                    return $data;
                    }
        
                public static function deleteData($id){
                    $check = Content::where('id',$id)->first();

                    if ($check->image){
                        Helper::deleteImage($check->image);
                    }
                    
                    $data = Content::where('id',$id)->delete();
                    return $data;
                    }
        
                public static function detailData($id){
                    $data = Content::where('id',$id)->first();
                    
                    return $data;
                }
}
