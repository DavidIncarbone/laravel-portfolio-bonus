<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $boolBNB = new Project;

        $boolBNB->type_id = 3;
        $boolBNB->name = "Bool B&B";
        $boolBNB->customer = "Boolean";
        $boolBNB->period = "Febbraio 2024";
        $boolBNB->summary = "La richiesta del cliente prevedeva la creazione di una web app totalmente responsive, atta ad aiutare gli utenti a trovare il B&B che facesse al caso loro.
        La Web App si presenta con un accogliente Jumbotron che permette subito di accedere ad una pagina di ricerca avanzata, per chi avesse già le idee chiare su cosa cercare.
        Per chi fosse invece molto indeciso, sempre in Home Page, l'app è provvista di una serie di caroselli interattivi suddivisi per categorie o città, che aiutano gli utenti nella loro scelta.
        Sono integrate nell'applicazione:
        - sistema di geolocalizzazione
        - sistema di invio mail per contattare il proprietario
        - sistema di aggiunta nuovo immobile
        Le tecnologie usate sono:
        FrontEnd: HTML,CSS e React.js
        BackEnd: Node.js + Express.js
        Database relazionale MySQL ";
        $boolBNB->image = "projects/Bool-B&B.png";
        $boolBNB->link = "https://bool-bnb-custom.netlify.app/";

        $boolBNB->save();

        $boolflix = new Project;

        $boolflix->type_id = 1;
        $boolflix->name = "Boolflix";
        $boolflix->customer = "Boolean";
        $boolflix->period = "Gennaio 2024";
        $boolflix->summary = "Riproduzione della homepage di Netflix usando l'API di terze parti TMDB
        Tecnologie usate: HTML, CSS, React.js ";
        $boolflix->image = "projects/Boolflix.png";
        $boolflix->link = "https://boolflixdi.netlify.app/";

        $boolflix->save();
    }
}
