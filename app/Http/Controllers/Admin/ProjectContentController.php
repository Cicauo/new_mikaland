<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProjectContent;
use Illuminate\Http\Request;
use Storage;

class ProjectContentController extends Controller
{

    public static function init(){

        $data['title'] = 'project content';
        $data['link'] = 'project';
        
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
        $data['row'] = ProjectContent::listData($id);
        // dd($data);
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
        // dd($data);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
