<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashbordController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        if($user-> role === "admin")
            {
            return view('dashbord.admin');
        }
        if($user-> role === "medecin")
            {
            return view('dashbord.medecin');
        }
        return view('dashbord.patient');
    }
}
