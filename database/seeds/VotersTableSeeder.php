<?php

use Illuminate\Database\Seeder;

use App\Voter;

class VotersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Voter::class, 10)->create();
    }
}
