<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(MstNegaraTableSeeder::class);
        $this->call(MstProvinsiTableSeeder::class);
        $this->call(MstKabupatenTableSeeder::class);
        $this->call(MstKecamatanTableSeeder::class);
        $this->call(MstAgamaTableSeeder::class);
        $this->call(MstStatusKawinTableSeeder::class);
        $this->call(MstGolonganDarahTableSeeder::class);
        $this->call(MstJenisIdentitasTableSeeder::class);
    }
}
