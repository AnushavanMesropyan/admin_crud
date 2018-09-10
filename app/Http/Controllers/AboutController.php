<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Storage;
use App\About;
use Session;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('about/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data,
            [
                'title' => 'required|string|max:255',
                'description' => 'required|string|max:1000',
            ]);
        if ($validator->fails()) {
            return redirect()->route('about.create')->withErrors($validator)->withInput();
        }
        if ($request->hasFile('img_about')) {
            $request->img_about = Storage::disk('public')->putFile('img_about', $request->img_about);
        }
        About::create([
            'title' => $request->title,
            'description' => $request->description,
            'img_about' => $request->img_about,
        ]);

        return redirect()->route('home');
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
        $about = About::findOrFail($id);
        return view('about.edit',compact('about') );
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
        $about = About::findOrFail($id);
        $validate_fields =
            [
                'title' => 'required|string|max:255',
                'description' => 'required|string|max:1000',
            ];

        $this->validate($request, $validate_fields);
        $about->title = $request->title;
        $about->description = $request->description;
        if ($request->file('img_about')) {
            $about->img_about = Storage::disk('public')->putFile('img_about', $request->img_about);
        }
        $about->save();
        Session::flash('flash_message', 'Company successfully updated!');
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = About::find($id);
        $delete = $about->delete();

        return redirect()->route('home');
    }
}
