<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projects;

class ProjectsController extends Controller
{
    public static function init(){

        $data['title'] = 'projects';
        $data['link'] = 'projects';
        
        return $data;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            
        $data = Self::init();
        $data['row'] = Projects::listData();
        // dd($data);
        return view('admin.management.projects.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Self::init();
        return view('admin.management.projects.create',$data);
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
            'name' => 'required',
            ]);
            
            $save = Projects::insertData($request);
            
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
        $data['row'] = Projects::detailData($id);
        // dd($data);
        return view('admin.management.projects.show',$data);
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
        $data['row'] = Projects::detailData($id);
        // dd($data);
        return view('admin.management.projects.edit',$data);
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
            'id' => 'required',
            'name' => 'required',
            ]);
            
            $save = Projects::updateData($request);
            
            if($save){
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
