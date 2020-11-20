<?php

namespace Marley71\Cupparis\App\Site\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CupSiteNews;
use Gecche\Foorm\Facades\Foorm;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Marley71\Cupparis\App\Site\Models\CupSitePage;
use Marley71\Cupparis\App\Site\Models\CupSiteSetting;

class CupSiteController extends Controller
{
    protected static $layout = null;
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
        self::$layout = config('cupparis-site.layout');
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
            $page = CupSitePage::where('menu_it',$menu)->first();
        $page = $page?$page->toArray():[];
        $children = CupSitePage::where('cup_site_page_id',Arr::get($page,'id',0))->get();
        $children = $children?$children->toArray():[];
        $page['children'] = $children;
        switch (Arr::get($page,'type')) {
            case 'html':
                //print_r($this->menu);
                return view('cup_site.' . self::$layout .'.pages.html',[
                    'page'=> $page,
                    'layout' => self::$layout,
                    'setting' => $this->setting,
                    'menu' => $this->menu,
                    'route_prefix' => config('cupparis-site.route_prefix'),
                ]);
            case 'news':
                //$news = CupSiteNews::get()->toArray();

                $newsForm = Foorm::getFoorm('cup_site_news.weblist',request());
//                print_r($newsForm->getFormData());
//                die();
                return view('cup_site.' . self::$layout .'.pages.news',[
                    'page'=> $page,
                    'news'=> $newsForm->getFormData()['data'],
                    'layout' => self::$layout,
                    'setting' => $this->setting,
                    'menu' => $this->menu,
                    'route_prefix' => config('cupparis-site.route_prefix'),
                ]);
            case 'home':
                return $this->_home($page);
        }

        abort(404);
    }

    public function news($menu) {
        $item = CupSiteNews::where('menu_it',$menu)->first();
        if (!$item)
            abort(404);
        $newsForm = Foorm::getFoorm('cup_site_news.web',request(),['id' => $item['id']]);
        $pageForm = Foorm::getFoorm('cup_site_page.web',request(),['id' => $item['cup_site_page_id']]);

        $page = $pageForm->getFormData();
        $news = $newsForm->getFormData();
        //$item = $item?$item->toArray():[];
        //$page = CupSitePage::where('menu_it',$item['tag'])->first();
        //$page = $page?$page->toArray():[];
        $page['children'] = [];
//        print_r($page);
//        print_r($news);
//        die();
        return view('cup_site.' . self::$layout .'.pages.news_dettaglio',[
            'page'=> $page,
            'news'=> $news,
            'layout' => self::$layout,
            'setting' => $this->setting,
            'menu' => $this->menu,
            'route_prefix' => config('cupparis-site.route_prefix'),
        ]);
    }

    protected function _home($page) {
        return view('cup_site.' . self::$layout .'.pages.home', [
            'setting' => $this->setting,
            'page' => $page,
            'menu' => $this->menu,
            'route_prefix' => config('cupparis-site.route_prefix'),
        ]);
    }
    public function admin()
    {
        $this->middleware('auth');
        return view('cup_site.admin.index');
    }

//    public function manage($model) {
//        return view('manage',['model' => $model]);
//    }
//
//    public function dashboard() {
//        return view('dashboard');
//    }
//    public function inline() {
//        return view('inline');
//    }
//
    protected function _menu() {
        return CupSitePage::getPageTree();
    }

    public static function block($type='news') {
        $page = CupSitePage::where('type',$type)->first();
        $items = CupSiteNews::where('cup_site_page_id',$page->getKey());
        return view('cup_site.' . self::$layout .'.blocks.' . $type,['items' => $items]);
    }
}
