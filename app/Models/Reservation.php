<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'patient_id',
        'service_id',
        'date_reservation',
        'heure_reservation',
        'statut',
    ];
     public function service()
    {
        return $this->belongsTo(User::class);
    }
    public function reservations()
    {
        return $this->belongsTo(Service::class);
    }
   
}
