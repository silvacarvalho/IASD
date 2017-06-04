<?php

use Illuminate\Database\Seeder;

class DevolucaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\IASD\Entities\Devolucao::class, 80)->create();
    }
}
