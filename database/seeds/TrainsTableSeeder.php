<?php

use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $train= [
            [

                'city'=> 'Napoli',
                'hour'=> "17:00",
                'name'=> 'FrecciaRossa',
                'binary'=>2,

            ],
            [

                'city'=> 'Milano',
                'hour'=> "20:00",
                'name'=> 'Italo',
                'binary'=>10,

            ],
            [

                'city'=> 'Venzia',
                'hour'=> "12:00",
                'name'=> 'FrecciaVerde',
                'binary'=>4,

            ],
            [

                'city'=> 'Bologna',
                'hour'=> "09:00",
                'name'=> 'FrecciaRossa',
                'binary'=>5,

            ],
        ];

        foreach($train as $elem){
            
            $newTrain=new Train();
            $newTrain->city=$elem["city"];
            $newTrain->hour=$elem["hour"];
            $newTrain->name=$elem["name"];
            $newTrain->binary=$elem["binary"];
            $newTrain->save();
        }
    }
}
