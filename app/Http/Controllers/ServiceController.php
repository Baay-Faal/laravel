<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller

{
 public function index(){
    $services =Service ::where('status', 'actif')
    ->with('medcin')
    ->get();
    return view('service.index',compact(var_name: 'Services'));
 }
}
