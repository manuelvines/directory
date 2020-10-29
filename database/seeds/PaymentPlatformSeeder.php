<?php

use Illuminate\Database\Seeder;
use App\PaymentPlatform;

class PaymentPlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $payment_platforms = array(['name'=>'PayPal']);

        foreach($payment_platforms as $payment_platform)
        {
    
                PaymentPlatform::create([
                    'name' => $payment_platform['name'],
                    
                ]);
        } 
       


    }
}
