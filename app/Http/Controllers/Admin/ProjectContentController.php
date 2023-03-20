<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProjectContent;
use App\Models\Projects;
use Illuminate\Http\Request;
use Storage;

class ProjectContentController extends Controller
{

    public static function init(){

        $data['title'] = 'project content';
        $data['link'] = 'projects';
        
        return $data;
        }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $data = Self::init();
        $data ['project_id'] = $id;
        $data['parent'] = Projects::detailData($id);
        $data['row'] = ProjectContent::listData($id);
        return view('admin.management.project_content.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $data = Self::init();
        $data ['project_id'] = $id;
        return view('admin.management.project_content.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            ]);
            
            $save = ProjectContent::insertData($request);
            
            if($save){
            return redirect()->back()->with('message','success save data')->with('message_type','primary');
            }else{
            return redirect()->back()->with('message','failed save data')->with('message_type','warning');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Self::init();
        $data ['row'] = ProjectContent::detailData($id);
        
        return view('admin.management.project_content.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Self::init();
        $data ['row'] = ProjectContent::detailData($id);
        
        return view('admin.management.project_content.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'id'    => 'required'
        ]);
            
            $update = ProjectContent::updateData($request);
            
            if($update){
            return redirect()->back()->with('message','success update data')->with('message_type','primary');
            }else{
            return redirect()->back()->with('message','failed update data')->with('message_type','warning');
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Projects::where('id',$id)->delete();

        if($delete){
            return redirect()->back()->with('message','success delete data')->with('message_type','primary');
        }else{
            return redirect()->back()->with('message','failed delete data')->with('message_type','warning');
        }
    }
}
