<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;
use App\Models\CupSitePage;

class CupSitePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        CupSitePage::create([
           'titolo_it' => 'pagina1',
           'content_it' => 'contenuto1'
        ]);

        CupSitePage::create([
            'titolo_it' => 'pagina2',
            'content_it' => 'contenuto2'
        ]);

        CupSitePage::create([
            'titolo_it' => 'pagina3',
            'content_it' => 'contenuto3'
        ]);

    }
}
