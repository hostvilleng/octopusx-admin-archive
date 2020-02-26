<?php

use App\Models\Data;
use Illuminate\Database\Seeder;

class DataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data')->delete();
        $data = [
            ['id'=> 1,'model_name' => 'DomainModel'],
            ['id'=> 2, 'model_name' => 'ProfileModel'],
            ['id'=> 3,'model_name' => 'DataModel'],
            ['id'=> 4,'model_name' => 'AccessModel'],
        ];
        foreach ($data as $dta){
            Data::create($dta);
        }
    }
}
