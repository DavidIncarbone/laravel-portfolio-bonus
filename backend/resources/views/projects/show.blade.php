@extends("layouts.master")

@section("content")


 <div class="container-fluid">
            <header class="header mt-5">
                <h1>{{$project->name}}</h1>
                <p>Esplora i dettagli completi del mio progetto.</p>
            </header>

            <!-- Project Details -->
            <section id="project-details" class="my-5">
                <div class="row">
                    <!-- Project Image -->
                    <div class="col-md-6 " style=" height:50vh">
                        <img src="{{ asset('storage/' . $project->image)}}" alt="{{$project->name}}" class="rounded shadow-lg show-card-container">
                    </div>
                    
                    <!-- Project Information -->
                    <div class="col-md-6">
                        <div class="d-flex justify-content-between">
                        <h2>{{$project->name}}</h2>
                          <div> 
                            <a class="btn btn-warning" href="{{ route("projects.edit", $project) }}">Modifica</a>  
                             <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                 Elimina
                               </button>
                        </div>
                        </div>
                        <p><strong>Tipo:</strong> {{$project->type->name}}</p>
                       
                        @foreach ($project->technologies as $technology)
                        
                       <span class="badge" style="background-color: {{$technology->color}}">{{$technology->name}}</span> 

                        @endforeach
                       
                        <p><strong>Cliente:</strong> {{$project->customer}}</p>
                        <p><strong>Periodo di Realizzazione:</strong> {{$project->period}}</p>
                        <p><strong>Descrizione:</strong>{{$project->summary}} </p>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="mt-4">
                    <a href="{{$project->link}}" class="btn btn-success" target="_blank">Visita il Sito del Progetto</a>
                </div>
            </section>
        </div>

        @include("partials.modal")

@endsection