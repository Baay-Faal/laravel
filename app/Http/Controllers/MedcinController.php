<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\Service;

class MedcinController extends Controller
{
    public function services()
    {
        $services = Service::where('medcin_id', auth()->id())
            ->with('reservations')
            ->get();
        return view('medcin.services', compact('services'));
    }
    public function reservation()
    {
        $reservation = Reservation::with(['service', 'user'])
            ->whereHas('service', function ($q) {
                $q->where('medcin_id', auth()->id());
            })
            ->get();
            return view('medcins.resevations', compact('reservations'));
    }
}
