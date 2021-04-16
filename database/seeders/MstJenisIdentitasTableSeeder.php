<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MstJenisIdentitasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('mst_jenis_identitas')->delete();
        
        \DB::table('mst_jenis_identitas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'KTP',
                'tid' => NULL,
                'description' => 'KTP',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-02-03 16:30:57',
                'updated_at' => '2021-02-03 16:30:57',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'SIM',
                'tid' => NULL,
                'description' => 'SIM',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-02-03 16:31:45',
                'updated_at' => '2021-02-03 16:31:45',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'KITAS',
                'tid' => NULL,
                'description' => 'KITAS',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-02-03 16:31:57',
                'updated_at' => '2021-02-03 16:31:57',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Passport',
                'tid' => NULL,
                'description' => 'Passport',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-02-03 16:32:10',
                'updated_at' => '2021-02-03 16:32:10',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Lain-Lain',
                'tid' => NULL,
                'description' => 'Lain-Lain',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-02-03 16:32:36',
                'updated_at' => '2021-02-03 16:32:36',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'test 2',
                'tid' => NULL,
                'description' => 'test 3',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => '2021-02-03 16:36:17',
                'created_at' => '2021-02-03 16:32:42',
                'updated_at' => '2021-02-03 16:36:17',
            ),
        ));
        
        
    }
}