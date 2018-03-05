<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campaign;
use Validator;
use Session;
use Redirect;

class CampaignController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campaigns=Campaign::orderBy('created_at','desc')->paginate(10);

        return view('campaigns/index')->with('campaigns',$campaigns);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('campaigns/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $rules= array(
            'name' => 'required|string|max:255|unique:campaigns',
            'type' => 'required|string',
            'subject' => 'required|string',
            'image_url' => 'required|image'
        );

        $this->validate($request,$rules);

        $path = $request->file('image_url')->store('public/images');

        $campaign=Campaign::create([
            'name'      => $request['name'],
            'type'      => $request['type'],
            'subject'   => $request['subject'],
            'image_url' => $path,
            'footer'    => $request['footer'],
            'status'    => 0
        ]);

        Session::flash('message', "Campaña Creada!");
        return Redirect::back();
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
        //
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
