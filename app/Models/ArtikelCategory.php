<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Helper;

class ArtikelCategory extends Model
{
    use HasFactory;
    protected $table = 'artikel_category';

    protected $fillable = [
        'id',
        'category'
    ];

    public function getIncrementing(){
        return false;
    }
    

    public function getKeyType(){
        return 'string';
    }

    public static function listData(){
        $data = ArtikelCategory::orderBy('created_at','desc')->get();
        
        return $data;
    }

     public static function insertData($request){

    $data = ArtikelCategory::create([
        'id' => (string) Str::uuid(),
        'category' => $request->category,
    ]);
    
    return $data;
    }

    public static function updateData($request){
        $data = ArtikelCategory::where('id',$request->id)->update([
            "category" => $request->category,
        ]);
        
        return $data;
        }

    public static function deleteData($id){
        $data = ArtikelCategory::where('id',$id)->delete();
        
        return $data;
    }

    public static function detailData($id){
        $data = ArtikelCategory::where('id',$id)->first();
        
        return $data;
    }
    
}
