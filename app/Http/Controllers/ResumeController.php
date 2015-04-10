<?php namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;

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

    public function send(ContactFormRequest $request)
    {
        $data =  [ 'contact_name'  => $request -> input ( 'contact_name' ),
            'contact_email'  => $request -> input ( 'contact_email' ),
            'contact_subject'  => $request -> input ( 'contact_subject' ),
            'contact_message'  => $request -> input ( 'contact_message' )];

        \Mail::send('emails/contact', $data ,  function  ( $message )  use  ( $request )  {
            $message->from ( 'web@joncable.com' );
            $message->to ( 'me@joncable.com' ,  'Jon Cable - Resume' );
            $message->subject ( $request -> input ( 'contact_subject' ) );
            $message->replyTo ( $request -> input ( 'contact_email' ), $request->input ( 'contact_name' ) );
        });

        return \Redirect::route('contact')
            ->with('message', '$message->delivered[\'Thank you for reaching out!\']');
    }

    public function music()
    {
        return view('pages/music');
    }

}
