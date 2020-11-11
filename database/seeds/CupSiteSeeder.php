<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;
use App\Models\CupSitePage;

class CupSiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $this->call(CupSitePageSeeder::class);
        $this->call(CupSiteSettingSeeder::class);
    }
}
