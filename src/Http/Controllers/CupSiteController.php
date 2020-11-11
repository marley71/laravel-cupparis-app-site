<?php

namespace Marley71\Cupparis\App\Site\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Marley71\Cupparis\App\Site\Models\CupSitePage;

class CupSiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function page($titolo)
    {
        $layout = config('cupparis-site.layout');
        $page = CupSitePage::where('titolo_it',$titolo)->first()->toArray();
        return view('cup_site.' . $layout .'.pages.index',[
            'page'=> $page,
            'layout' => $layout
        ]);
    }

    public function proveVue()
    {
        return view('prove-vue');
    }

    public function manage($model) {
        return view('manage',['model' => $model]);
    }

    public function dashboard() {
        return view('dashboard');
    }
    public function inline() {
        return view('inline');
    }
}
