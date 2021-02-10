<?php

namespace App\Http\Controllers;

use App\BloodDonation;
use App\BloodRequest;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $donations = BloodDonation::all();
        $last_donation = BloodDonation::orderBy('id','DESC')->first();
        $requests = BloodRequest::all();
        $last_request = BloodRequest::orderBy('id','DESC')->first();
        $users = User::all();
        $last_user = User::orderBy('id','DESC')->first();
         return view('admin.index',
             [  'donations'=>$donations,
                 'requests'=>$requests,
                 'users'=>$users,
                 'last_request'=>$last_request,
                 'last_donation'=>$last_donation,
                 'last_user'=>$last_user,
             ]);
    }
}
