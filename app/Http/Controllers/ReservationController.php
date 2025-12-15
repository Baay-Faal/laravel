<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Service;

class ReservationController extends Controller
{
    public function create($service_id)
    {
        $services = Service::findOrFail($service_id);
        return view('reservations.create', compact('services'));
    }
    public function store(Request $request, )
    {
        $validated = $request->validate([
            'service_id' => 'required|exists:services,id',
            'date_reservation' => 'required|date|after:today',
            'heure_reservation'=> 'required',
            'commentaires' => 'nullable|string',
        ]);
        $validated['user_id'] = auth()->id();
        $validated['statut'] = 'en_attente';

        Reservation::create($validated);
        return redirect('/reservations')
        ->with('success', 'Réservation enreistrée.');
    }
    public function myReservation()
    {
        $reservations = Reservation::with('service')
            ->where('user_id', auth()->id())
            ->get();
        return view('reservations.patient_index', compact('reservations'));
    }
    public function cancel($id)
    {
        $reservation = Reservation::findOrFail($id);
        if ($reservation->user_id !== auth()->id())
        {
            abort(403);
        }
        if ($reservation-> statut !== 'en_attente')
        {
            return back()
            ->with('error', 'Seules les réservations en attente peuvent être annulées.');
        }
        $reservation->update(['statut' => 'annulée']);
        return back()
        ->with('success', 'Réservation annulée avec succès.');
    }
}
