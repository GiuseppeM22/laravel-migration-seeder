<?php

namespace Database\Seeders;

use App\Models\Trains;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = config("store.trains");

        foreach ($trains as $train){
            $interegionale = new Trains();
            $interegionale->azienda = $train['azienda'];
            $interegionale->stazione_di_partenza = $train['stazione_di_partenza'];
            $interegionale->stazione_di_arrivo = $train['stazione_di_arrivo'];
            $interegionale->orario_di_partenza = $train['orario_di_partenza'];
            $interegionale->orario_di_arrivo = $train['orario_di_arrivo'];
            $interegionale->codice_treno = $train['codice_treno'];
            $interegionale->numero_carrozze = $train['numero_carrozze'];
            $interegionale->in_orario = $train['in_orario'];
            $interegionale->cancellato = $train['cancellato'];
            $interegionale->save();
        }
    }
}
