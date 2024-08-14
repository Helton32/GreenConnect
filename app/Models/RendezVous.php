<?php

namespace App\Models;

use App\Models\RendezVous;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RendezVous extends Model
{
    use HasFactory , Notifiable;
    protected $fillable = ['Name','LastName','Adresse','Telephone','Email','Superficie','Energie','Quantite','Date','Heure','Documents','Message'];
}
