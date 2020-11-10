<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;
use App\Models\CupPage;

class CupPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        CupPage::create([
           'titolo_id' => 'pagina1',
           'content_it' => 'contenuto1'
        ]);

        CupPage::create([
            'titolo_id' => 'pagina2',
            'content_it' => 'contenuto2'
        ]);

        CupPage::create([
            'titolo_id' => 'pagina3',
            'content_it' => 'contenuto3'
        ]);

    }
}
