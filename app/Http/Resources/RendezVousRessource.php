<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RendezVousRessource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //return parent::toArray($request);
        return [
            'id' =>$this->id,
            'Name' => $this->name,
            'LastName' => $this->LastName,
            'Adresse' => $this->Adresse,
            'Telephone' => $this->Telephone,
            'Email' => $this->Email,
            'Superficie'=> $this ->Superficie,
            'Energie' => $this-> Energie,
            'Quantite' => $this-> Quantite,
            'Date' => $this-> Date,
            'Heure' => $this-> Heure,
            'Message' => $this-> Message,
            'AvisImpots' => $this -> AvisImpots,
            'FactureGazElec' => $this -> FactureGazElec,
            'status' => $this -> Encours ,
            'created_at' => $this ->created_at ,
        ];
    }
}
