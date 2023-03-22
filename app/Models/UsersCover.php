<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Helper;
use Illuminate\Support\Facades\DB;

class UsersCover extends Model
{
    use HasFactory;
    protected $table = 'users_cover';
    
    protected $fillable = [
        'id',
        'users_id',
        'slug',
        'link'
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
        $data = UsersCover::join('users','users_cover.users_id','=','users.id')
                ->select('users.name as users','users_cover.*')
                ->orderBy('users_cover.created_at','desc')
                ->get();
        
        return $data;
    }

    public static function insertData($request){

        $users = DB::table('users')->where('id',$request->users_id)->first();

        $slug = Helper::slug($users->name);

        $data = UsersCover::create([
            'id' => (string) Str::uuid(),
            'users_id' => $request->users_id,
            'slug' => $slug,
            'link' => $request->link,
        ]);
        
        return $data;
    }

    public static function updateData($request){

        $users = DB::table('users')->where('id',$request->users_id)->first();

        $slug = Helper::slug($users->name);

        $data = UsersCover::where('id',$request->id)->update([
            'users_id' => $request->users_id,
            "slug" => $slug,
            'link' => $request->link,
        ]);
        
        return $data;
        }

    public static function deleteData($id){
        $data = UsersCover::where('id',$id)->delete();
        
        return $data;
    }

    public static function detailData($id){
        $data = UsersCover::join('users','users_cover.users_id','=','users.id')
        ->where('users_cover.id',$id)
        ->select('users.name as users','users_cover.*')
        ->first();
        
        return $data;
    }

}
