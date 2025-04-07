@extends("layouts.master")

@section("content")

 
            <header class="header mt-5">
                <h1>Lista dei Progetti</h1>
                <p>Scopri i dettagli dei miei progetti più recenti.</p>
            </header>

            <div class="d-flex gap-3 py-4">
    <a class="btn btn-primary" href="{{ route("projects.create") }}">Aggiungi un nuovo progetto</a>
    <a class="btn btn-warning" href="{{ route("types.index") }}">Gestisci le tipologie</a>
    <a class="btn btn-warning" href="{{ route("technologies.index") }}">Gestisci le tecnologie</a>
    
         
             </div>

            <!-- Table of Projects -->
            <section id="projects" class="my-5">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr class="text-center">
                            <th>Nome Progetto</th>
                            <th>Tipologia</th>
                            <th>Nome Cliente</th>
                            <th>Periodo di Realizzazione</th>
                            <th>Descrizione</th>
                            <th>Opzioni</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($projects as $project)
                        <tr>
                            <td>{{$project->name}}</td>
                            <td>{{$project->type->name}}</td>
                            <td>{{$project->customer}}</td>
                            <td>{{$project->period}}</td>
                            @php
                                 $maxWords = 10; 
                                $words = explode(' ', $project->summary);
                                 $shortenedDescription = implode(' ', array_slice($words, 0, $maxWords)); 
                            @endphp
                            <td>{{$shortenedDescription}}...</td>
                            <td class="d-flex gap-3">
                                <a id="project-details-btn" href="{{route("projects.show", $project)}}" class="btn btn-info">Dettagli</a>
                                <a class="btn btn-warning" href="{{ route("projects.edit", $project) }}">Modifica</a>
                                 <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                      Elimina
                                    </button>  
                                
                            </td>
                        </tr>

                        @endforeach
                       
                    </tbody>
                </table>
            </section>

            @include("partials.modal")
        

@endsection