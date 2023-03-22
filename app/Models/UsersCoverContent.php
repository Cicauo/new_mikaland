<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Helper;
use Storage;
use Illuminate\Support\Facades\DB;

class UsersCoverContent extends Model
{
    use HasFactory;
    protected $table = 'users_cover_content';

    protected $fillable = [
        'id',
        'users_cover_id',
        'image',
        'content',
        'title',
        'sorter',
        'link',
    ];

        public function getIncrementing(){
            return false;
        }
        
        public function getKeyType(){
            return 'string';
        }

        public static function listData($id){
            $data = UsersCoverContent::join('users_cover','users_cover_content.users_cover_id','=','users_cover.id')
                    ->join('users','users_cover.users_id','=','users.id')
                    ->where('users_cover.id',$id)
                    ->select('users_cover.slug as slug','users.name as users','users_cover_content.*')
                    ->orderBy('users_cover_content.created_at','desc')
                    ->get();
            
            return $data;
        }

        public static function detailData($id){
            $data = UsersCoverContent::join('users_cover','users_cover_content.users_cover_id','=','users_cover.id')
                    ->join('users','users_cover.users_id','=','users.id')
                    ->where('users_cover_content.id',$id)
                    ->select('users_cover.slug as slug','users.name as users','users_cover_content.*')
                    ->orderBy('users_cover_content.created_at','desc')
                    ->get();
            
            return $data;
        }

        public static function insertData($request){
        
            if($request->file('image')){

                $image=Helper::image($request->file('image'),'users');
            }else{
                $image = '';
            }

            $data = UsersCoverContent::create([
                'id' => (string) Str::uuid(),
                'users_cover_id' => $request->users_cover_id,
                'title' => $request->title,
                'sorter' => $request->sorter,
                'image' => $image,
                'content' => $request->content,
                'link' => $request->link,
            ]);
            
            return $data;
        }


        public static function updateData($request){

                $check=UsersCoverContent::find($request->id);

                if($check->image){
                    
                    if($request->file('image')){
                        Storage::delete('public/'.$check->image);

                        $image = Helper::image($request->file('image'),'users');
                    }else{
                        $image = $check->image;
                    }
                }else{

                    if($request->file('image')){

                        $image = Helper::image($request->file('image'),'users');
                    }else{
                        $image = $check->image;
                    }
                }

                $data = UsersCoverContent::where('id',$request->id)->update([
                    'users_cover_id' => $request->users_cover_id,
                    'title' => $request->title,
                    'sorter' => $request->sorter,
                    'image' => $image,
                    'content' => $request->content,
                    'link' => $request->link,
                ]);
                
                return $data;
            }

    
            public static function deleteData($id){
                $check = UsersCoverContent::where('id',$id)->first();

                if ($check->image){
                    Helper::deleteImage($check->image);
                }
                
                $data = UsersCoverContent::where('id',$id)->delete();
                return $data;
            }
}
