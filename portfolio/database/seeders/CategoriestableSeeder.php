<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriestableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Laravel',
                'description' => 'Framework PHP per lo sviluppo web moderno, con sintassi elegante e strumenti integrati come routing, ORM (Eloquent), autenticazione e migrations.'
            ],
            [
                'name' => 'PHP',
                'description' => 'Linguaggio di programmazione lato server, molto usato per creare siti dinamici e backend web (WordPress, Laravel, ecc.).'
            ],
            [
                'name' => 'JavaScript',
                'description' => 'Linguaggio lato client (ma anche lato server con Node.js), usato per rendere le pagine web interattive (eventi, animazioni, chiamate AJAX, ecc.).'
            ],
            [
                'name' => 'react.js',
                'description' => 'Libreria JavaScript creata da Meta, usata per costruire interfacce utente reattive a componenti, soprattutto in Single Page Applications (SPA).'
            ],
            [
                'name' => 'CSS',
                'description' => 'Linguaggio per definire lo stile visivo di una pagina HTML: colori, layout, font, animazioni, responsive design, ecc.'
            ],
            [
                'name' => 'HTML',
                'description' => 'Linguaggio di markup usato per strutturare contenuti web: testi, immagini, link, form, ecc.'
            ]
        ];

        foreach ($categories as $category) {
            $newCategory = new Category();

            $newCategory->name = $category['name'];
            $newCategory->description = $category['description'];

            $newCategory->save();
        }
    }
}
