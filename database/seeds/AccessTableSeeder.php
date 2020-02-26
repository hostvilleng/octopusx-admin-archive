<?php

use App\Models\Access;
use Illuminate\Database\Seeder;

class AccessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accesses')->delete();
       $data = [
           ['id'=> 1,'access_name' => 'DomainAccess'],
           ['id'=> 2, 'access_name' => 'ProfileAccess'],
           ['id'=> 3,'access_name' => 'DataAccess'],
           ['id'=> 4,'access_name' => 'AccessesAccess'],
       ];
       foreach ($data as $dta){
           Access::create($dta);
       }
    }
}
