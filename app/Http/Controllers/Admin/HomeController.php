<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Projects;
use Storage;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['link']       = 'home';
        $data['testimoni']  = Content::where('position','home')->where('type','testimoni')->orderBy('created_at','asc')->get();
        $data['spesialis']  = Content::where('position','home')->where('type','spesialis')->orderBy('created_at','asc')->get();
        $data['coursel']    = Content::where('position','home')->where('type','coursel')->get();
        $data['about']      = Content::where('position','home')->where('type','about')->first();

        return view('web.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        //
        $data['link']       = 'about';
        $data['header']     = Content::where('position','about')->where('type','header')->first();
        $data['about']      = Content::where('position','about')->where('type','about')->first();
        $data['detail']     = Content::where('position','about')->where('type','detail')->orderBy('created_at','asc')->get();
        $data['visi']       = Content::where('position','about')->where('type','visi')->first();
        $data['misi']       = Content::where('position','about')->where('type','misi')->orderBy('created_at','asc')->get();
        $data['sertivikat']= Content::where('position','about')->where('type','sertivikasi')->orderBy('created_at','asc')->get();
        return view('web.about',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
