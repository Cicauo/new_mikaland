<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Helper;


class Projects extends Model
{

    protected $table = 'projects';

    use HasFactory;
    
    protected $fillable = [
        'id',
        'name',
        'slug'
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

        public static function listData(){
            $data = Projects::orderBy('created_at','desc')->get();
            
            return $data;
        }

        public static function insertData($request){


            $slug = Helper::slug($request->name);

            $data = Projects::create([
            'id' => (string) Str::uuid(),
            'name' => $request->name,
            'slug' => $slug,
            ]);
            
            return $data;
        }

        public static function updateData($request){
            $data = Projects::where('id',$request->id)->update([
            "name" => $request->name,
            "slug" => Helper::slug($request->name),
            ]);
            
            return $data;
            }

        public static function deleteData($id){
            $data = Projects::where('id',$id)->delete();
            
            return $data;
            }

        public static function detailData($id){
            $data = Projects::where('id',$id)->first();
            
            return $data;
            }
}
