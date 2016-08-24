<?php

use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->delete();
         
        DB::table('types')->insert(array(

        array('name'=>'Generator'),
        array('name'=>'Sub-station'),
        array('name'=>'Stabilizer'),
        array('name'=>'IPS/UPS'),
        array('name'=>'IVS'),
        array('name'=>'CCTV'),
        array('name'=>'Solar system'),
        array('name'=>'LED light'),
        array('name'=>'Electrical accessories'),
             
          ));
    }
}