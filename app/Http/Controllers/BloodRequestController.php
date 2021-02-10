<?php

namespace App\Http\Controllers;

use App\BloodDonation;
use App\BloodRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $user = Auth::user();
        $bloodRequests = BloodRequest::where('user_id', '!=', $user['id'])->get();


        $filteredRequests = [];
        foreach($bloodRequests as $item)
        {
            $donations = BloodDonation::where('blood_request_id', $item['id'])->get();


            $count = 0;
            foreach ($donations as $donation){
                $count += intval($donation["num_of_bottles"]);
            }

            $diff = $item['num_of_bottles'] - $count;

            if($diff <= 0){
                //nothing
            } else{
                $percentage = $diff*100/$item->num_of_bottles;
                $item['percentage'] = intval(100 - $percentage);
                $item['num_of_bottles'] = $diff;
                $item['user'] = User::find($item['user_id']);
                array_push($filteredRequests, $item);
            }
        }

        $bloodrequests = BloodRequest::all();
        $users = User::all();
        $donations = BloodDonation::all();
        return view('index',
            ['bloodrequests'=>$bloodrequests,
            'users'=>$users,
            'donations'=>$donations,
            'filteredRequests'=>$filteredRequests
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showAll()
    {
        $user = Auth::user();
        $bloodRequests = BloodRequest::where('user_id', '!=', $user['id'])->get();


        $filteredRequests = [];
        foreach($bloodRequests as $item)
        {
            $donations = BloodDonation::where('blood_request_id', $item['id'])->get();


            $count = 0;
            foreach ($donations as $donation){
                $count += intval($donation["num_of_bottles"]);
            }

            $diff = $item['num_of_bottles'] - $count;

            if($diff <= 0){
                //nothing
            } else{
                $percentage = $diff*100/$item->num_of_bottles;
                $item['percentage'] = intval(100 - $percentage);
                $item['num_of_bottles'] = $diff;
                $item['user'] = User::find($item['user_id']);
                array_push($filteredRequests, $item);
            }

        }
        $bloodrequests = BloodRequest::all();
        $users = User::all();
        $donations = BloodDonation::all();
        return view('frontend.allrequests', ['bloodrequests'=>$bloodrequests,'users'=>$users,'filteredRequests'=>$filteredRequests]);

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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminIndex()
    {

        $bloodRequests = BloodRequest::all();


        $filteredRequests = [];
        foreach($bloodRequests as $item)
        {
            $donations = BloodDonation::where('blood_request_id', $item['id'])->get();


            $count = 0;
            foreach ($donations as $donation){
                $count += intval($donation["num_of_bottles"]);
            }

            $diff = $item['num_of_bottles'] - $count;

            if($diff <= 0){
                //nothing
            } else{
                $item['num_of_bottles'] = $diff;
                $item['user'] = User::find($item['user_id']);
                array_push($filteredRequests, $item);
            }
        }
        $bloodrequests = BloodRequest::all();
        $users = User::all();
        return view('admin.requests.index', ['requests'=>$bloodrequests,'users'=>$users,'filteredRequests'=>$filteredRequests]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminRequestCreate()
    {
        $users = User::all();
        return view('admin.requests.create',['users'=>$users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function adminRequestStore(Request $request)
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
        BloodRequest::create($bloodRequest);
        Session::flash('message','Request Submitted Successfully');
        Session::flash('alert-type','success');
        return redirect()->route('admin.request.index');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BloodRequest  $bloodRequest
     * @return \Illuminate\Http\Response
     */
    public function adminRequestEdit(BloodRequest $bloodRequest)
    {
        $users = User::all();
        return view('admin.requests.edit',['users'=>$users,'bloodRequest'=>$bloodRequest]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BloodRequest  $bloodRequest
     * @return \Illuminate\Http\Response
     */
    public function adminRequestUpdate(Request $request, BloodRequest $bloodRequest)
    {
        $request->validate([
            'user_id' => 'required|numeric',
            'contact_number' => 'required',
            'blood_type' => 'required',
            'num_of_bottles' => 'required|numeric',
            'location' => 'required'
        ]);

        $bloodRequest->update($request->all());
        Session::flash('message','Request Updated Successfully');
        Session::flash('alert-type','success');
        return redirect()->route('admin.request.index');
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
        $bloodRequest->delete();
        Session::flash('message','Request Deleted Successfully');
        Session::flash('alert-type','success');
        return redirect()->route('admin.request.index');
    }
}
