<?php

use Illuminate\Database\Seeder;
use App\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
         $countries = array(
              
              ["name"=>"Mexico"   ,"nationality"=>"Mexicana"],
              ["name"=>"Alemania" ,"nationality"=>"Alemana"],
              ["name"=>"Brasil"   ,"nationality"=>"Brasileña"],
              ["name"=>"Canadá"   ,"nationality"=>"Canadiense"],
              ["name"=>"Colombia" ,"nationality"=>"Colombiana"],
              ["name"=>"España"   ,"nationality"=>"Español"],
              ["name"=>"Estados Unidos","nationality"=>"Estadounidense"],
              ["name"=>"Francia","nationality"=>"Francés"]
        );



         foreach($countries as $country)
         {
            
            Country::create([
                'name' => $country["name"],
                'nationality' => $country["nationality"]
              
            ]);
         }



    }
}
