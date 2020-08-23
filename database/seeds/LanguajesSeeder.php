<?php

use Illuminate\Database\Seeder;
use App\Languaje;


class LanguajesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $languajes = array(
            ["name"=>"Español","flag"=>"es.png","iso"=>"es"],
            ["name"=>"Inglés","flag"=>"en.png","iso"=>"en"],
            ["name"=>"Alemán","flag"=>"de.png","iso"=>"de"],

            ["name"=>"Árabe","flag"=>"ar.png","iso"=>"ar"],
            ["name"=>"Bengalí","flag"=>"bn.png","iso"=>"bn"],
            ["name"=>"Francés","flag"=>"fr.png","iso"=>"fr"],

            ["name"=>"Hindi / Urdu","flag"=>"hi.png","iso"=>"hi"],
            ["name"=>"Italiano","flag"=>"it.png","iso"=>"it"],
            ["name"=>"Malayo","flag"=>"ms.png","iso"=>"ms"],

            ["name"=>"Mandarín","flag"=>"zh.png","iso"=>"zh"],
            ["name"=>"Portugués","flag"=>"zh.png","iso"=>"zh"],
            ["name"=>"Ruso","flag"=>"ru.png","iso"=>"ru"],
            

        );

            foreach($languajes as $languaje)
            {
        

                    Languaje::create([
                        'name' => $languaje['name'],
                        'flag' => $languaje['flag'],
                        'iso' => $languaje['iso'],
                    ]);
            }




    }
}
