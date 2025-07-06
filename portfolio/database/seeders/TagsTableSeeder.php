<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            [
                'name' => 'Laravel',
                'description' => 'Framework PHP per lo sviluppo web moderno, con sintassi elegante e strumenti integrati come routing, ORM (Eloquent), autenticazione e migrations.',
                'color' => '#FF2D20' // rosso Laravel
            ],
            [
                'name' => 'PHP',
                'description' => 'Linguaggio di programmazione lato server, molto usato per creare siti dinamici e backend web (WordPress, Laravel, ecc.).',
                'color' => '#777BB4' // blu/viola PHP
            ],
            [
                'name' => 'JavaScript',
                'description' => 'Linguaggio lato client (ma anche lato server con Node.js), usato per rendere le pagine web interattive (eventi, animazioni, chiamate AJAX, ecc.).',
                'color' => '#F7DF1E' // giallo JavaScript
            ],
            [
                'name' => 'react.js',
                'description' => 'Libreria JavaScript creata da Meta, usata per costruire interfacce utente reattive a componenti, soprattutto in Single Page Applications (SPA).',
                'color' => '#61DAFB' // azzurro React
            ],
            [
                'name' => 'CSS',
                'description' => 'Linguaggio per definire lo stile visivo di una pagina HTML: colori, layout, font, animazioni, responsive design, ecc.',
                'color' => '#264DE4' // blu CSS
            ],
            [
                'name' => 'HTML',
                'description' => 'Linguaggio di markup usato per strutturare contenuti web: testi, immagini, link, form, ecc.',
                'color' => '#E34F26' // arancione HTML
            ]
        ];

        foreach($tags as $tag) {
            $newTag = new Tag();

            $newTag->name = $tag['name'];
            $newTag->description = $tag['description'];
            $newTag->color = $tag['color'];

            $newTag->save();
        }

    }
}
