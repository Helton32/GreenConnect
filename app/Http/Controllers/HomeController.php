<?php

namespace App\Http\Controllers;

use App\Mail\Confirmation;
use App\Models\RendezVous;
use Illuminate\Http\Request;
use App\Notifications\RdvConfirm;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\HomeController;

class HomeController extends Controller
{
    public function index() {
        
        return view('rdvcreate') ;
        

    }

    public function store(Request $request) {

        $rdv = new RendezVous ;
        $rdv->Name = $request->Name;
        $rdv->LastName = $request->LastName;
        $rdv->Adresse = $request->Adresse;
        $rdv->Email = $request->Email;
        $rdv->Telephone = $request->Telephone;
        $rdv->Superficie = $request->Superficie;
        $rdv->Energie = $request->Energie;
        $rdv->Quantite = $request->Quantite;
        $rdv->Date = $request->Date;
        $rdv->Heure = $request->Heure;
        $rdv->AvisImpots = $request->AvisImpots;
        $rdv->FactureGazElec = $request->FactureGazElec;
        

        if (Rendezvous::where('Date', $request->Date)->where('Heure', $request->Heure)->exists()) {
            return response('Veuillez selectionner une autre plage horraire. Le rendez vous est deja pris.', 200)
            ->header('Content-Type', 'text/plain');
       }
         else {

        $rdv->save();
        //Mail::to($rdv->Email)->send(new Confirmation());
       // $rdv->notify(new RdvConfirm($rdv));
         }
        
        
        return view('rdvstore', compact('rdv'));


    }
    public function show() {
        //listing des commandes
        $rdv = Rendezvous::all() ;
       
        return view('rdvlister', compact('rdv'));
        
    }

}
