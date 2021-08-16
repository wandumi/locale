<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\locale;
use App\Mail\languageUpdate;
use Illuminate\Http\Request;
use App\Notifications\LangDe;
use App\Notifications\UserLoggedin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Notification;

class ProfileController extends Controller
{
    // public function __constructor()
    // {
    //     $this->middleware('auth')
    //          ->only(['create','store','edit','update','destroy']);
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = Auth()->user()->id;
        
        $User = User::find($profile);
    
        $Locale = Locale::all();
    
        $Users = User::all();
        return view('profile', compact('Users','User','Locale') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $profile = User::findOrFail($id);

        //@dd($profile);

        $profile->locale = $request->locale;

        $profile->save();

        try {
            //code...
            Notification::send($profile, new UserLoggedin($profile));
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->withMessage('There was no connection to the Email Server');
        }

        
        $request->session()->flash('success', 'language was updated');

        return redirect()->back();
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
