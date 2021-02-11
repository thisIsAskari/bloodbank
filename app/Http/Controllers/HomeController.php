<?php

namespace App\Http\Controllers;

use App\BloodDonation;
use App\BloodRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
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
}
