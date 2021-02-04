<?php

namespace App\Http\Controllers;

use App\BloodDonation;
use App\BloodRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;



class BloodRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bloodrequests = BloodRequest::orderBy('id','DESC')->get();
        $users = User::all();
        $donations = BloodDonation::all();
        return view('index',['bloodrequests'=>$bloodrequests,'users'=>$users,'donations'=>$donations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.request');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|numeric',
            'contact_number' => 'required',
            'blood_type' => 'required',
            'num_of_bottles' => 'required|numeric',
            'location' => 'required'
        ]);


        $bloodRequest = $request->all();

        $user = User::where('id',$request->user_id)->get();
        if(sizeof($user) == 0){
            Session::flash('message','User no longer exist');
            Session::flash('alert-type','error');
            return back();
        }

        // unset($bloodRequest('user_id'));
        // $bloodRequest('user')
        BloodRequest::create($bloodRequest);
        Session::flash('message','Request Submitted Successfully');
        Session::flash('alert-type','success');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BloodRequest  $bloodRequest
     * @return \Illuminate\Http\Response
     */
    public function show(BloodRequest $bloodRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BloodRequest  $bloodRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(BloodRequest $bloodRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BloodRequest  $bloodRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BloodRequest $bloodRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BloodRequest  $bloodRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(BloodRequest $bloodRequest)
    {
        //
    }
}
