<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MstAgamaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('mst_agama')->delete();

        \DB::table('mst_agama')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Islam',
                'tid' => 1,
                'description' => 'Islam',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-02-03 21:44:52',
                'updated_at' => '2021-02-03 21:44:52',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Kristen',
                'tid' => 2,
                'description' => 'Kristen',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-02-03 21:44:52',
                'updated_at' => '2021-02-03 21:44:52',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Katolik',
                'tid' => 3,
                'description' => 'Katolik',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-02-03 21:44:52',
                'updated_at' => '2021-02-03 21:44:52',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Hindu',
                'tid' => 4,
                'description' => 'Hindu',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-02-03 21:44:52',
                'updated_at' => '2021-02-03 21:44:52',
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Budha',
                'tid' => 5,
                'description' => 'Budha',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-02-03 21:44:52',
                'updated_at' => '2021-02-03 21:44:52',
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'Lain-lain',
                'tid' => 6,
                'description' => 'Lain-lain',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-02-03 21:44:52',
                'updated_at' => '2021-02-03 21:44:52',
            ),
        ));
    }
}
