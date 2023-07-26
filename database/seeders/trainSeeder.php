<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class trainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $trainsList = [
            [
                'azienda'=> 'FrecciaRossa',
                'stazione_arrivo'=> 'Napoli Centrale',
                'stazione_partenza'=> 'Caserta',
                'codice_treno'=> '1234',
            ],
            [
                'azienda'=> 'TreniItalia',
                'stazione_arrivo'=> 'Milano Centrale',
                'stazione_partenza'=> 'Bergamo',
                'codice_treno'=> '1235',
            ],
            [
                'azienda'=> 'FrecciaAzzurra',
                'stazione_arrivo'=> 'Firenze',
                'stazione_partenza'=> 'Roma',
                'codice_treno'=> '1236',
            ],
            [
                'azienda'=> 'TreniBox',
                'stazione_arrivo'=> 'Bari',
                'stazione_partenza'=> 'Brindisi',
                'codice_treno'=> '1237',
            ],
            [
                'azienda'=> 'InterCity',
                'stazione_arrivo'=> 'Bologna',
                'stazione_partenza'=> 'Parma',
                'codice_treno'=> '1238',
            ],
        ];

        foreach ($trainsList as $train) {
            $newTrain = new Train();
            $newTrain->azienda = $train['azienda'];
            $newTrain->stazione_arrivo = $train['stazione_arrivo'];
            $newTrain->stazione_partenza = $train['stazione_partenza'];
            $newTrain->codice_treno = $train['codice_treno'];
            $newTrain->save();
        }
    }
}
