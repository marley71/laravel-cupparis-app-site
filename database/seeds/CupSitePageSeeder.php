<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;
use App\Models\CupSitePage;
use App\Models\CupSiteNews;
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
           'titolo_it' => 'home',
            'menu_it' => 'home',
           'type' => 'home',
           'fix' => 1,
           'content_it' => 'contenuto1'
        ]);

        CupSitePage::create([
            'titolo_it' => 'news',
            'menu_it' => 'news',
            'type' => 'news',
            'content_it' => ''
        ]);
        for ($i=0;$i<10;$i++) {
            CupSiteNews::create([
                'titolo_it' => 'news' .$i,
                'menu_it' => 'news'.$i,
                'content_it' => 'corpo '.$i,
                'cup_site_page_id' => 2,
            ]);
        }

        CupSitePage::create([
            'titolo_it' => 'eventi',
            'menu_it' => 'eventi',
            'type' => 'eventi',
            'content_it' => ''
        ]);
        for ($i=0;$i<10;$i++) {
            CupSiteNews::create([
                'titolo_it' => 'evento' .$i,
                'menu_it' => 'evento'.$i,
                'content_it' => 'corpo evento'.$i,
                'data' => date('Y-m-d',now() + $i*98000),
                'data_fine' => date('Y-m-d',now() + ($i+3)*98000),
                'cup_site_page_id' => 3,
            ]);
        }
        CupSitePage::create([
            'titolo_it' => "l'azienda",
            'menu_it' => 'azienda',
            'type' => 'html',
            'content_it' => 'Nata il 25 ecc.'
        ]);
    }
}
