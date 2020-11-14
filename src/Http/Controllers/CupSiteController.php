<?php

namespace Marley71\Cupparis\App\Site\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Marley71\Cupparis\App\Site\Models\CupSitePage;
use Marley71\Cupparis\App\Site\Models\CupSiteSetting;

class CupSiteController extends Controller
{
    private $layout = null;
    private $setting = null;
    private $menu = null;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        $this->layout = config('cupparis-site.layout');
        $setting = CupSiteSetting::where('attivo',1)->first();
        if (!$setting) {
            $setting = CupSiteSetting::first();
        }
        $this->setting = $setting?$setting->toArray():[];
        $this->menu = $this->_menu();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function page($menu=null)
    {
        $page = null;
        if (!$menu)
            $page = CupSitePage::first(); // bisogna prendere l'home
        else
            $page = CupSitePage::where('menu_it',$menu)->first()->toArray();

        $page['children'] = CupSitePage::where('cup_site_page_id',$page['id'])->get()->toArray();

        //print_r($this->menu);
        return view('cup_site.' . $this->layout .'.pages.index',[
            'page'=> $page,
            'layout' => $this->layout,
            'setting' => $this->setting,
            'menu' => $this->menu,
            'route_prefix' => config('cupparis-site.route_prefix')
        ]);
    }

    public function admin()
    {
        return view('cup_site.admin.index');
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

    protected function _menu() {
        return CupSitePage::getPageTree();
    }
}
