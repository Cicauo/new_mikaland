<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Helper;
use Storage;

class ProjectContent extends Model
{
    protected $table = 'projects_content';
    use HasFactory;

    protected $fillable = [
        'id',
        'project_id',
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
                $data = ProjectContent::join('projects','projects_content.project_id','=','projects.id')
                ->where('projects.id',$id)
                ->select('projects.name as projects','projects_content.*')
                ->orderBy('projects_content.created_at','desc')
                ->get();
                
                return $data;
            }
        
                 public static function insertData($request){
        
                    if($request->file('image')){

                        $image=Helper::image($request->file('image'),'projects');
                    }else{
                        $image = '';
                    }
        
                $data = ProjectContent::create([
                'id' => (string) Str::uuid(),
                'project_id' => $request->project_id,
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

                    $check=ProjectContent::find($request->id);

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
                    $data = ProjectContent::where('id',$request->id)->update([
                        'project_id' => $request->project_id,
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
                    $check = ProjectContent::where('id',$id)->first();

                    if ($check->image){
                        Helper::deleteImage($check->image);
                    }
                    
                    $data = ProjectContent::where('id',$id)->delete();
                    return $data;
                    }
        
                public static function detailData($id){
                    $data = ProjectContent::join('projects','projects_content.project_id','=','projects.id')
                        ->where('projects_content.id',$id)
                        ->select('projects.name as projects','projects_content.*')
                        ->orderBy('projects_content.created_at','desc')
                        ->first();
                

                        return $data;
                    }


                    public static function detailType($id,$type){
                        $data = ProjectContent::join('projects','projects_content.project_id','=','projects.id')
                            ->where('projects.id',$id)
                            ->where('projects_content.type',$type)
                            ->select('projects.name as projects','projects_content.*')
                            ->orderBy('projects_content.created_at','desc')
                            ->first();
                    
    
                            return $data;
                        }

                    public static function detailOne($slug,$type){
                        $data = ProjectContent::join('projects','projects_content.project_id','=','projects.id')
                        ->where('projects_content.type',$type)
                        ->where('projects.slug',$slug)
                        ->select('projects.name as projects','projects.slug','projects_content.*')
                        ->first();

                        return $data;
                    }

                    public static function detailAll($slug,$type){
                        $data = ProjectContent::join('projects','projects_content.project_id','=','projects.id')
                        ->where('projects_content.type',$type)
                        ->where('projects.slug',$slug)
                        ->select('projects.name as projects','projects.slug','projects_content.*')
                        ->orderBy('projects_content.created_at','asc')
                        ->get();

                        return $data;
                    }
    
    
        }

