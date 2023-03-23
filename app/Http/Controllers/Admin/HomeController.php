<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\ProjectContent;
use App\Models\Projects;
use App\Models\Home;
use App\Models\HomeContent;
use Storage;
use App\Models\Artikel;

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
        $data['promo']      = Content::where('position','home')->where('type','promo')->orderBy('created_at','asc')->get();
        $data['spesialis']  = Content::where('position','home')->where('type','spesialis')->orderBy('created_at','asc')->get();
        $data['coursel']    = Content::where('position','home')->where('type','coursel')->get();
        $data['about']      = Content::where('position','home')->where('type','about')->first();
        $data['artikel']    = Artikel::limitArtikel();
        $data['home_type']  = Home::listData();

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

    public function contact()
    {
        //
        $data['link']       = 'contact';
        $data['map']        = Content::where('position','contact')->where('type','map')->first();
        $data['header']     = Content::where('position','contact')->where('type','header')->first();
        $data['detail']     = Content::where('position','contact')->where('type','detail')->orderBy('created_at','asc')->get();
        return view('web.contact',$data);
    }

    public function blog()
    {
        $data['link']       = 'blog';
        $data['artikel']    = Artikel::listDataPaginate();
        return view('web.blog',$data);
    }


    public function blog_category($category)
    {
        $data['link']       = 'blog';
        $data['artikel']    = Artikel::listDataPaginateCategory($category);
        return view('web.blog',$data);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function blog_search(Request $request)
    {
        $request->validate([
            'title'   => 'required|string',
        ]);

        $data['link']       = 'blog';
        $data['artikel']    = Artikel::listDataPaginateSearch($request->title);
        return view('web.blog',$data);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function blog_detail($slug)
    {
        $data['link']       = 'blog';
        $data['row']    = Artikel::detailDataSlug($slug);
        return view('web.blog_detail',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function project($slug)
    {
        $data['link']       = 'project';
        $data['header']     = ProjectContent::detailOne($slug,'header');
        $data['about']     = ProjectContent::detailOne($slug,'about');
        $data['site_plan']     = ProjectContent::detailOne($slug,'site_plan');
        $data['whatsapp']     = ProjectContent::detailOne($slug,'whatsapp');
        $data['map']     = ProjectContent::detailOne($slug,'map');
        $data['detail']     = ProjectContent::detailAll($slug,'detail');
        $data['facilities']     = ProjectContent::detailAll($slug,'facilities');
        $data['usp']     = ProjectContent::detailAll($slug,'usp');
        $data['download']     = ProjectContent::detailOne($slug,'download');

        $data['home_type']     = Home::listDataSlug($slug);
        return view('web.project',$data);
    }

    public function project_detail($id)
    {
        $data['link']               = 'project';
        $detail                     = HomeContent::detail($id);
        $project                    = Projects::detailData($detail->project_id);
        $data['header']            = ProjectContent::detailType($detail->project_id,'header');
        $data['description']        = HomeContent::detailAll($id,'description');
        $data['image']              = HomeContent::detailAll($id,'image');
        $data['spesifikasi']        = HomeContent::detailAll($id,'spesifikasi');
        $data['row']                = HomeContent::detailOne($id);
        $data['home_type']          = Home::listDataSlug($project->slug);

        $data['spesifikasi_1']      = HomeContent::where('home_id',$id)->where('type','spesifikasi')->skip(0)->take(6)->get();
        $data['spesifikasi_2']      = HomeContent::where('home_id',$id)->where('type','spesifikasi')->skip(6)->take(20)->get();
        return view('web.project_detail',$data);
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
