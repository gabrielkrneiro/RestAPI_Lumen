<?php

use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book')->delete();
        
        for($i=1;$i <= 5;$i++)
        {
            DB::table('book')->insert([
                'boo_title' => 'book '.$i,
                'boo_aut_id' => $i,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ]);

            DB::table('book')->insert([
                'boo_title' => 'book '.$i,
                'boo_aut_id' => $i,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ]);
        }
    }
}
