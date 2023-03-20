<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Helper;
use Storage;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customer';

    public function getIncrementing(){
        return false;
    }
    

    public function getKeyType(){
        return 'string';
    }

    public static function listData(){
        $data = Customer::orderBy('created_at','desc')->get();

        return $data;
    }

    public static function detailData($id){
        $data = Customer::where('id',$id)->first();

        return $data;
    }

    public static function insertData($request){
        
        if($request->file('image')){

            $image=Helper::image($request->file('image'),'customer');
        }else{
            $image = '';
        }

    $data = Customer::create([
        'id'    => (string) Str::uuid(),
        'name'  => $request->name,
        'image' => $image,

    ]);
    
    return $data;
    }

    public static function updateData($request){

        $check=Customer::find($request->id);

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
            $data = Customer::where('id',$request->id)->update([
                'name' => $request->name,
                'image' => $image,
            ]);
        
            return $data;
        }

    public static function deleteData($id){
        $check = Customer::where('id',$id)->first();

        if ($check->image){
            Helper::deleteImage($check->image);
        }
        
        $data = Customer::where('id',$id)->delete();
        return $data;
    }
}
