<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MstGolonganDarahTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('mst_golongan_darah')->delete();
        
        \DB::table('mst_golongan_darah')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'A',
                'tid' => NULL,
                'description' => 'A',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-02-03 16:04:49',
                'updated_at' => '2021-02-03 16:04:49',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'B',
                'tid' => NULL,
                'description' => 'B',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-02-03 16:05:02',
                'updated_at' => '2021-02-03 16:05:02',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'AB',
                'tid' => NULL,
                'description' => 'AB',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-02-03 16:05:11',
                'updated_at' => '2021-02-03 16:05:11',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'O',
                'tid' => NULL,
                'description' => 'O',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-02-03 16:05:20',
                'updated_at' => '2021-02-03 16:05:20',
            ),
        ));
        
        
    }
}