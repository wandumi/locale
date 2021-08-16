<?php

namespace App\Http\Controllers;

use App\Models\locale;
use Illuminate\Http\Request;

class LocaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locale = Locale::paginate(5);
        return view('locale', compact('locale') );
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
        $locale = request()->validate([
            'name' => 'required|max:255',
            'slug' => 'required|max:3|min:2'
        ]);

        Locale::create($locale);

        session()->flash('success', "language has beed added");
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\locale  $locale
     * @return \Illuminate\Http\Response
     */
    public function show(locale $locale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\locale  $locale
     * @return \Illuminate\Http\Response
     */
    public function edit(locale $locale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\locale  $locale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, locale $locale)
    {
        $profile = User::findOrFail($id);

        $profile->locale = $request->locale;

        $profile->save();
        
        $request->session()->flash('status', 'language was updated');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\locale  $locale
     * @return \Illuminate\Http\Response
     */
    public function destroy(locale $locale)
    {
        //
    }
}
