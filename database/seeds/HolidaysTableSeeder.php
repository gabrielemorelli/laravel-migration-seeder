<?php

use App\Holiday;
use Illuminate\Database\Seeder;

class HolidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $Holiday = new Holiday();

        $Holiday->reference_number = '1234567';
        $Holiday->destination = 'Maldive';
        $Holiday->description = 'vacanze maldive';
        $Holiday->airlinecompany = 'alitalia';
        $Holiday->namehotel = 'maldive resort';
        $Holiday->rooms = 4;
        $Holiday->activity = 'jdjjdeidjijfeiffofjoefjof';
        $Holiday->price = 2200;
       
        $Holiday->save();

       
    }
}
