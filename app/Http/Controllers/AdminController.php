<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;

class AdminController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
    public function banners()
    {
        return view('admin/banners');
    }

    /**
    * Store a new banner
    *
    * @return \Illuminate\Http\Response
    */
    public function create(Request $request)
    {
        $banner = new Banner;

        $banner->tipobanner_id  = $request->input('tipo_banner');
        $banner->fecha          = $request->input('fecha');
        $banner->periodo        = $request->input('periodo');
        $banner->hora           = $request->input('hora');
        $banner->link           = $request->input('url', '');
        $banner->correo         = $request->input('mail_contact');

        //Se almacena background a utilizar
        $background_file = $request->background;
        $background_path = $request->background->store('images');

        $banner->background = $background_path;

        //Se almacena flyer a utilizar
        $flyer_file = $request->flyer;
        $flyer_path = $request->flyer->store('images');

        $banner->flyer = $flyer_path;

        $banner->save();

        return view('admin/banners');
    }
    
}
