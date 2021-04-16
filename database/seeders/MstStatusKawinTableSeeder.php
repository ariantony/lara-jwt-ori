<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MstStatusKawinTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('mst_status_kawin')->delete();
        
        \DB::table('mst_status_kawin')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Kawin',
                'tid' => 1,
                'description' => 'Kawin',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-02-03 15:36:58',
                'updated_at' => '2021-02-03 15:36:58',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Belum Kawin',
                'tid' => 2,
                'description' => 'Belum Kawin',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-02-03 15:37:28',
                'updated_at' => '2021-02-03 15:37:28',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Bercerai',
                'tid' => 3,
                'description' => 'Bercerai',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-02-03 15:37:43',
                'updated_at' => '2021-02-03 15:37:43',
            ),
        ));
        
        
    }
}