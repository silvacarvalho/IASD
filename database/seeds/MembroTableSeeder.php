<?php

use Illuminate\Database\Seeder;

class MembroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\IASD\Entities\Membro::class, 80)->create();
    }
}
