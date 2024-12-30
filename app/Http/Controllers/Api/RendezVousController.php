<?php

namespace App\Http\Controllers\Api;

use App\Models\RendezVous;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\RendezVousRessource;

class RendezVousController extends Controller
{
    public function index()

    {
        $rdv = RendezVous::get();

        if($rdv->count() > 0){

           return RendezVousRessource::collection($rdv);

        }else {
            return  response()->json(['message' => 'No record available'], 200);
        }




    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'Name' => 'required|string|max255',
            'LastName' => 'required|string|max255',
            'Adresse' => 'required|string|max255',
            'Telephone' => 'required|string|max255',
            'Email' => 'required|string|max255',
        ]);
        if($validator->fails()) {
            return response()->json([
                    'message' => 'All fields are mandetory' ,

            ],422);
        }
      
        RendezVous::create([
            'Name' =>$request->Name,
            'LastName' => $request->LastName,
            'Adresse' => $request->Adresse,
            'Telephone' => $request->Telephone,
            'Email' => $request->Email,
        ]);
            return response()->json([
                'message' => "Product Created Succes" , 
                'data' => new RendezVousRessource($rdv),
            ],200);
        
    }
    public function show(Rendezvous $rdv)
    {
        return new RendezVousRessource($rdv);
    }
    
    public function update(Request $request, $id)
{
    $rdv = Rendezvous::find($id);

    if (!$rdv) {
        return response()->json(['message' => 'Rendez-vous non trouvé'], 404);
    }

    $rdv->status = $request->input('status'); // Mise à jour du statut "en cours" ou "terminé"
    $rdv->save();

    return response()->json(['message' => 'Rendez-vous mis à jour avec succès'], 200);
}


    public function destroy($id)
{
    $rdv = Rendezvous::find($id);

    if (!$rdv) {
        return response()->json(['message' => 'Rendez-vous non trouvé'], 404);
    }

    $rdv->delete();
    return response()->json(['message' => 'Rendez-vous supprimé avec succès'], 200);
}
public function getNewAppointments(Request $request)
{
    $lastChecked = $request->query('last_checked');
    $newAppointments = Appointment::where('created_at', '>', $lastChecked)->get();

    return response()->json($newAppointments);
}


}
