<?php

namespace App\Models;

use App\Models\Messages;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Messages extends Model
{
    use HasFactory;
    protected $fillable = ['Nom','mail','numero','msg'];

}
