<?php

namespace App\Http\Controllers;

use App\BloodDonation;
use App\BloodRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BloodDonationController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminIndex()
    {
        $donations = BloodDonation::orderBy('id','DESC')->get();
        $requests = BloodRequest::all();
        $users = User::all();
        return view('admin.donations.index',['donations'=>$donations,'requests'=>$requests,'users'=>$users]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    public function fetchByRequest(BloodRequest $bloodRequest)
    {

        $bloodRequests = BloodRequest::where('id', $bloodRequest->id)->get();

        foreach($bloodRequests as $item)
        {
            $donations = BloodDonation::where('blood_request_id', $item['id'])->get();


            $count = 0;
            foreach ($donations as $donation){
                $count += intval($donation["num_of_bottles"]);
            }

            $diff = $item['num_of_bottles'] - $count;
        }
        return view('frontend.donate',['bloodrequest'=>$bloodRequest,'diff'=>$diff]);
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
            'blood_request_id' => 'required|numeric',
            'contact_number' => 'required',
            'num_of_bottles' => 'required|numeric',
        ]);

        $newDonation = $request->all();

        $user = User::where('id',$request->user_id)->get();
        if(sizeof($user) == 0){
            Session::flash('message','User Not Found');
            Session::flash('alert-type','error');
            return back();
        }

        $user = $user[0];

        $bloodRequest = BloodRequest::where('id',strval($request->blood_request_id))->get();
        if(sizeof($bloodRequest) == 0){
            Session::flash('message','Blood Request Not Found');
            Session::flash('alert-type','error');
            return back();
        }

        $donations = BloodDonation::where('blood_request_id', $newDonation['blood_request_id'])->get();

        $count = 0;
        foreach ($donations as $donation){
            $count += intval($donation["num_of_bottles"]);
        }

        if( intval($bloodRequest[0]['num_of_bottles'] - $count) <  intval($newDonation['num_of_bottles'])){

            $diff = $bloodRequest[0]['num_of_bottles']-$count;

            if($diff == 0){
                Session::flash('message','Request Already Fulfilled');
                Session::flash('alert-type','warning');
                return back();
            }else{
                Session::flash('message','Only Need '.$diff.' Bottles');
                Session::flash('alert-type','warning');
                return back();

            }
        }

        $newDonation = BloodDonation::create($newDonation);

        $bloodRequest[0]['user'] = User::find($bloodRequest[0]['user_id']);

        $newDonation['user'] = $user;
        $newDonation['blood_request'] = $bloodRequest[0];

        Session::flash('message','Donation Request Submitted Successfully');
        Session::flash('alert-type','success');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BloodDonation  $bloodDonation
     * @return \Illuminate\Http\Response
     */
    public function show(BloodDonation $bloodDonation)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BloodDonation  $bloodDonation
     * @return \Illuminate\Http\Response
     */
    public function edit(BloodDonation $bloodDonation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BloodDonation  $bloodDonation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BloodDonation $bloodDonation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BloodDonation  $bloodDonation
     * @return \Illuminate\Http\Response
     */
    public function destroy(BloodDonation $bloodDonation)
    {
        $bloodDonation->delete();
        Session::flash('message','Donation Deleted Successfully');
        Session::flash('alert-type','success');
        return redirect()->route('admin.donation.index');
    }
}
