<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;

use Faker\Generator as Faker;

class TechnologiesTableSeeder extends Seeder
{

    public function run(Faker $faker): void
    {

        $technologies = ["HTML", "CSS", "JavaScript", "React.js", "Node.js", "Express.js", "MySQL"];
        $descriptiones = [
            "HTML(HyperText Markup Language) è il linguaggio di markup standard utilizzato per creare e strutturare il contenuto delle pagine web. HTML consente di definire gli elementi di una pagina, come titoli, paragrafi, immagini, link, tabelle e altri componenti. HTML è la base di ogni sito web ed è essenziale per il funzionamento delle applicazioni web moderne.",

            "CSS (Cascading Style Sheets) è un linguaggio di stile utilizzato per descrivere l'aspetto e la formattazione di un documento HTML. Con CSS, è possibile controllare layout, colori, font e altre proprietà visive delle pagine web. CSS consente di separare la struttura del contenuto dal design, migliorando la manutenzione e la flessibilità del sito.",

            "JavaScript è un linguaggio di programmazione che consente di aggiungere interattività e dinamismo alle pagine web . Viene utilizzato per manipolare gli elementi HTML e CSS,
            per gestire eventi come clic e input da parte degli utenti e per fare richieste asincrone ai server tramite AJAX . JavaScript è essenziale per lo sviluppo di applicazioni web moderne e interattive .",

            "React è una libreria JavaScript open-source per la costruzione di interfacce utente (UI) interattive. Sviluppata da Facebook, React utilizza un approccio basato sui componenti, che consente di creare applicazioni web complesse e altamente dinamiche in modo efficiente. React è particolarmente utile per la costruzione di applicazioni single-page (SPA) e offre una gestione ottimizzata del DOM tramite il Virtual DOM.",

            "Node.js è un ambiente di runtime JavaScript basato sul motore V8 di Google Chrome. Consente di eseguire JavaScript lato server, consentendo agli sviluppatori di utilizzare JavaScript sia nel frontend che nel backend. Node.js è noto per la sua elevata performance, grazie al suo modello di I/O non bloccante, ed è molto utilizzato per costruire applicazioni scalabili e in tempo reale.",

            "Express.js è un framework web per Node.js che semplifica lo sviluppo di applicazioni web e API. Con Express, gli sviluppatori possono gestire facilmente routing, middleware e richieste HTTP. Express è noto per la sua leggerezza, velocità e flessibilità, ed è uno degli strumenti più popolari per costruire applicazioni backend in JavaScript.",

            "MySQL è un sistema di gestione di database relazionali (RDBMS) open-source. Utilizza il linguaggio SQL (Structured Query Language) per la gestione e la manipolazione dei dati. MySQL è molto popolare per la sua velocità, affidabilità e scalabilità, ed è comunemente utilizzato insieme a tecnologie come PHP, Node.js ed Express per creare applicazioni web dinamiche che richiedono una gestione efficiente dei dati."
        ];

        for ($i = 0; $i < count($technologies); $i++) {

            $newTechnology = new Technology;

            $newTechnology->name = $technologies[$i];
            $newTechnology->description = $descriptiones[$i];
            $newTechnology->color = $faker->hexColor();

            $newTechnology->save();
        }
    }
}
