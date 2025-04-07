@extends("layouts.master")

@section("content")

<section id="projects" class="my-5">

    <h1 class="text-center p-3">Lista delle tecnologie</h1>

    <a class="btn btn-primary" href="{{ route("technologies.create") }}">Aggiungi tecnologia</a>

                <table class="table table-bordered table-striped my-3">
                    <thead>
                        <tr class="text-center">
                            <th>Tecnologia</th>
                            <th>Descrizione</th>
                            <th>Opzioni</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($technologies as $technology)
                        <tr>
                            <td>{{$technology->name}}</td>
                            @php
                                 $maxWords = 23; 
                                $words = explode(' ', $technology->description);
                                 $shortenedDescription = implode(' ', array_slice($words, 0, $maxWords)); 
                            @endphp
                            <td>{{$shortenedDescription}}...</td>
                            <td class="d-flex justify-content-center gap-3">
                                <a id="technology-details-btn" href="{{route("technologies.show", $technology)}}" class="btn btn-info">Dettagli</a>
                                <a class="btn btn-warning" href="{{ route("technologies.edit", $technology) }}">Modifica</a>
                                 <button technology="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                      Elimina
                                    </button>  
                                
                            </td>
                        </tr>

                        @endforeach
                       
                    </tbody>
                </table>
            </section>

             <x-modal>
                <x-slot:deleteBtn>
                     <form action="{{route("technologies.destroy", $technology)}}" method="POST">
                           @csrf
                           @method("DELETE")
                          <input type="submit" value="Elimina definitivamente" class="btn btn-danger">
                      </form>
                    
            </x-slot>
               
             </x-modal>

@endsection