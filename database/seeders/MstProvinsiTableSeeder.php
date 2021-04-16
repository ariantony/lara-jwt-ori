<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MstProvinsiTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('mst_provinsi')->delete();
        
        \DB::table('mst_provinsi')->insert(array (
            0 => 
            array (
                'id' => 31,
                'mst_negara_id' => 360,
                'name' => 'DKI Jakarta',
                'description' => 'DKI Jakarta',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-01-26 20:34:14',
                'updated_at' => '2021-01-26 20:34:14',
            ),
            1 => 
            array (
                'id' => 32,
                'mst_negara_id' => 360,
                'name' => 'Jawa Barat',
                'description' => 'Jawa Barat',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-01-26 20:34:14',
                'updated_at' => '2021-01-26 20:34:14',
            ),
            2 => 
            array (
                'id' => 36,
                'mst_negara_id' => 360,
                'name' => 'Banten',
                'description' => 'Banten',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-01-26 20:34:14',
                'updated_at' => '2021-01-26 20:34:14',
            ),
            3 => 
            array (
                'id' => 11,
                'mst_negara_id' => 360,
                'name' => 'Aceh',
                'description' => 'Aceh',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-01-26 20:34:14',
                'updated_at' => '2021-01-26 20:34:14',
            ),
            4 => 
            array (
                'id' => 12,
                'mst_negara_id' => 360,
                'name' => 'Sumatera Utara',
                'description' => 'Sumatera Utara',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-01-26 20:34:14',
                'updated_at' => '2021-01-26 20:34:14',
            ),
            5 => 
            array (
                'id' => 13,
                'mst_negara_id' => 360,
                'name' => 'Sumatera Barat',
                'description' => 'Sumatera Barat',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-01-26 20:34:14',
                'updated_at' => '2021-01-26 20:34:14',
            ),
            6 => 
            array (
                'id' => 14,
                'mst_negara_id' => 360,
                'name' => 'Riau',
                'description' => 'Riau',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-01-26 20:34:14',
                'updated_at' => '2021-01-26 20:34:14',
            ),
            7 => 
            array (
                'id' => 15,
                'mst_negara_id' => 360,
                'name' => 'Jambi',
                'description' => 'Jambi',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-01-26 20:34:14',
                'updated_at' => '2021-01-26 20:34:14',
            ),
            8 => 
            array (
                'id' => 16,
                'mst_negara_id' => 360,
                'name' => 'Sumatera Selatan',
                'description' => 'Sumatera Selatan',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-01-26 20:34:14',
                'updated_at' => '2021-01-26 20:34:14',
            ),
            9 => 
            array (
                'id' => 17,
                'mst_negara_id' => 360,
                'name' => 'Bengkulu',
                'description' => 'Bengkulu',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-01-26 20:34:14',
                'updated_at' => '2021-01-26 20:34:14',
            ),
            10 => 
            array (
                'id' => 18,
                'mst_negara_id' => 360,
                'name' => 'Lampung',
                'description' => 'Lampung',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-01-26 20:34:14',
                'updated_at' => '2021-01-26 20:34:14',
            ),
            11 => 
            array (
                'id' => 19,
                'mst_negara_id' => 360,
                'name' => 'Kepulauan Bangka Belitung',
                'description' => 'Kepulauan Bangka Belitung',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-01-26 20:34:14',
                'updated_at' => '2021-01-26 20:34:14',
            ),
            12 => 
            array (
                'id' => 21,
                'mst_negara_id' => 360,
                'name' => 'Kepulauan Riau',
                'description' => 'Kepulauan Riau',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-01-26 20:34:14',
                'updated_at' => '2021-01-26 20:34:14',
            ),
            13 => 
            array (
                'id' => 33,
                'mst_negara_id' => 360,
                'name' => 'Jawa Tengah',
                'description' => 'Jawa Tengah',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-01-26 20:34:14',
                'updated_at' => '2021-01-26 20:34:14',
            ),
            14 => 
            array (
                'id' => 34,
                'mst_negara_id' => 360,
                'name' => 'DI Yogyakarta',
                'description' => 'DI Yogyakarta',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-01-26 20:34:14',
                'updated_at' => '2021-01-26 20:34:14',
            ),
            15 => 
            array (
                'id' => 35,
                'mst_negara_id' => 360,
                'name' => 'Jawa Timur',
                'description' => 'Jawa Timur',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-01-26 20:34:14',
                'updated_at' => '2021-01-26 20:34:14',
            ),
            16 => 
            array (
                'id' => 51,
                'mst_negara_id' => 360,
                'name' => 'Bali',
                'description' => 'Bali',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-01-26 20:34:14',
                'updated_at' => '2021-01-26 20:34:14',
            ),
            17 => 
            array (
                'id' => 52,
                'mst_negara_id' => 360,
                'name' => 'Nusa Tenggara Barat',
                'description' => 'Nusa Tenggara Barat',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-01-26 20:34:14',
                'updated_at' => '2021-01-26 20:34:14',
            ),
            18 => 
            array (
                'id' => 53,
                'mst_negara_id' => 360,
                'name' => 'Nusa Tenggara Timur',
                'description' => 'Nusa Tenggara Timur',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-01-26 20:34:14',
                'updated_at' => '2021-01-26 20:34:14',
            ),
            19 => 
            array (
                'id' => 61,
                'mst_negara_id' => 360,
                'name' => 'Kalimantan Barat',
                'description' => 'Kalimantan Barat',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-01-26 20:34:14',
                'updated_at' => '2021-01-26 20:34:14',
            ),
            20 => 
            array (
                'id' => 62,
                'mst_negara_id' => 360,
                'name' => 'Kalimantan Tengah',
                'description' => 'Kalimantan Tengah',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-01-26 20:34:14',
                'updated_at' => '2021-01-26 20:34:14',
            ),
            21 => 
            array (
                'id' => 63,
                'mst_negara_id' => 360,
                'name' => 'Kalimantan Selatan',
                'description' => 'Kalimantan Selatan',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-01-26 20:34:14',
                'updated_at' => '2021-01-26 20:34:14',
            ),
            22 => 
            array (
                'id' => 64,
                'mst_negara_id' => 360,
                'name' => 'Kalimantan Timur',
                'description' => 'Kalimantan Timur',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-01-26 20:34:14',
                'updated_at' => '2021-01-26 20:34:14',
            ),
            23 => 
            array (
                'id' => 71,
                'mst_negara_id' => 360,
                'name' => 'Sulawesi Utara',
                'description' => 'Sulawesi Utara',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-01-26 20:34:14',
                'updated_at' => '2021-01-26 20:34:14',
            ),
            24 => 
            array (
                'id' => 72,
                'mst_negara_id' => 360,
                'name' => 'Sulawesi Tengah',
                'description' => 'Sulawesi Tengah',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-01-26 20:34:14',
                'updated_at' => '2021-01-26 20:34:14',
            ),
            25 => 
            array (
                'id' => 73,
                'mst_negara_id' => 360,
                'name' => 'Sulawesi Selatan',
                'description' => 'Sulawesi Selatan',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-01-26 20:34:14',
                'updated_at' => '2021-01-26 20:34:14',
            ),
            26 => 
            array (
                'id' => 74,
                'mst_negara_id' => 360,
                'name' => 'Sulawesi Tenggara',
                'description' => 'Sulawesi Tenggara',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-01-26 20:34:14',
                'updated_at' => '2021-01-26 20:34:14',
            ),
            27 => 
            array (
                'id' => 75,
                'mst_negara_id' => 360,
                'name' => 'Gorontalo',
                'description' => 'Gorontalo',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-01-26 20:34:14',
                'updated_at' => '2021-01-26 20:34:14',
            ),
            28 => 
            array (
                'id' => 76,
                'mst_negara_id' => 360,
                'name' => 'Sulawesi Barat',
                'description' => 'Sulawesi Barat',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-01-26 20:34:14',
                'updated_at' => '2021-01-26 20:34:14',
            ),
            29 => 
            array (
                'id' => 81,
                'mst_negara_id' => 360,
                'name' => 'Maluku',
                'description' => 'Maluku',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-01-26 20:34:14',
                'updated_at' => '2021-01-26 20:34:14',
            ),
            30 => 
            array (
                'id' => 82,
                'mst_negara_id' => 360,
                'name' => 'Maluku Utara',
                'description' => 'Maluku Utara',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-01-26 20:34:14',
                'updated_at' => '2021-01-26 20:34:14',
            ),
            31 => 
            array (
                'id' => 91,
                'mst_negara_id' => 360,
                'name' => 'Papua Barat',
                'description' => 'Papua Barat',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-01-26 20:34:14',
                'updated_at' => '2021-01-26 20:34:14',
            ),
            32 => 
            array (
                'id' => 92,
                'mst_negara_id' => 360,
                'name' => 'Papua',
                'description' => 'Papua',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-01-26 20:34:14',
                'updated_at' => '2021-01-26 20:34:14',
            ),
            33 => 
            array (
                'id' => 65,
                'mst_negara_id' => 360,
                'name' => 'Kalimantan Utara',
                'description' => 'Kalimantan Utara',
                'is_active' => '1',
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2021-01-26 20:34:14',
                'updated_at' => '2021-01-26 20:34:14',
            ),
        ));
        
        
    }
}