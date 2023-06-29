<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Trains;
use Illuminate\Http\Request;

class PageController extends Controller
{
   public function index(){

    $trains = Trains::all();

    $interegionale = new Trains();
    $interegionale->azienda = 'Trenitalia';
    $interegionale->stazione_di_partenza = 'Bari';
    $interegionale->stazione_di_arrivo = 'Foggia';
    $interegionale->orario_di_partenza = '10:00:00';
    $interegionale->orario_di_arrivo = '10:30:00';
    $interegionale->codice_treno = '83993662';
    $interegionale->numero_carrozze = '5';
    $interegionale->in_orario = '1';
    $interegionale->cancellato = '0';
    $interegionale->save();


    return view('welcome', compact('trains') );

   }
}
