<?php namespace App\Http\Controllers;

class ResumeController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | Home Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders your application's "dashboard" for users that
    | are authenticated. Of course, you are free to change or remove the
    | controller as you wish. It is just here to get your app started!
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index()
    {
        return view('pages/resume');
    }

    public function technology()
    {
        return view('pages/technology');
    }

    public function history()
    {
        return view('pages/history');
    }

    public function education()
    {
        return view('pages/education');
    }

    public function contact()
    {
        return view('pages/contact');
    }

    public function music()
    {
        return view('pages/music');
    }

}