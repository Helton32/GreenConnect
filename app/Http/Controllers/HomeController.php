<?php

namespace App\Http\Controllers;

use App\Mail\Confirmation;
use App\Models\RendezVous;
use Illuminate\Http\Request;
use App\Notifications\RdvConfirm;
use App\Mail\AppointmentConfirmed;
use Illuminate\Support\Facades\Auth;
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
            return response('
                <p>Veuillez selectionner une autre plage horraire. Le rendez vous est deja pris.</p>
                <a href="'.route('rdvcreate').'" style="color:blue; text-decoration:underline;">Retourner à la page de création du rendez-vous</a>
            ', 200)
            ->header('Content-Type', 'text/html'); // Set the response type to HTML
        }
         else {
            
          //  Mail::to($rdv->Email)->send(new AppointmentConfirmed($rdv));

             $rdv->save();
 
         }
        
        
        return view('rdvstore', compact('rdv'));


    }
    public function show() {
        //listing des commandes
        $rdv = Rendezvous::all() ;
       
        return view('rdvlister', compact('rdv'));
        
    }
    public function updateStatus(Request $request)
    {
        // Validation des données envoyées
        $request->validate([
            'id' => 'required|integer|exists:rendez_vouses,id',
            'status' => 'required|string|max:255',
        ]);

        // Récupérer le rendez-vous par ID
        $rdv = RendezVous::find($request->id);

        // Mise à jour du statut
        $rdv->status = $request->status;
        $rdv->save();

        return back();
    }
}
