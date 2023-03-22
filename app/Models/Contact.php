<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Helper;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contact';

    protected $fillable = [
        'id',
        'name',
        'email',
        'message',
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
        public function getKeyType(){
            return 'string';
        }

        public static function listData(){
            $data = Contact::orderBy('created_at','desc')->get();

            return $data;
        }

        public static function detailData($id){
            $data = Contact::where('id',$id)->first();

            return $data;
        }

        public static function deletelData($id){
            $data = Contact::where('id',$id)->delete();

            return $data;
        }

        public static function insertData($request){

            $data = Contact::create([
                'id' => (string) Str::uuid(),
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message,
            ]);
            
            return $data;
        }

        public static function updateData($request){

            $data = Contact::where('id',$request->id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message,
            ]);
            
            return $data;
        }
        
          

}
