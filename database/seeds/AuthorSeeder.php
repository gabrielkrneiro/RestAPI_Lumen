<?php

use Illuminate\Database\Seeder;
use App\AuthorSearch;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('author')->delete();
        for($i=1;$i <= 10;$i++)
        {
            DB::table('author')->insert([
                'id' => $i,
                'aut_name' => 'author '.$i,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ]);
        }
        
    }
}
