<?php

namespace Marley71\Cupparis\App\Site\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
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
    public function index()
    {
        return view('home');
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
