@extends('layouts.master')

@section('content')
    <a href="{{ route('admin.technologies.index') }}" class="btn btn-primary my-3">
        < Torna alle tecnologie</a>

            <h1 class="text-center py-5">Modifica tecnologia</h1>


            <form action="{{ route('admin.technologies.update', $technology) }}" method="POST">

                @csrf

                @method('PUT')

                <div class="form-control d-flex flex-column gap-2 pb-3 mb-3">
                    <label for="name">Inserisci il nome della tecnologia</label>
                    <input type="text" name="name" id="name" value="{{ $technology->name }}">
                </div>
                <div class="form-control d-flex flex-column gap-2 pb-3 mb-3">
                    <label for="description">Inserisci una descrizione</label>
                    <textarea type="text" name="description" id="description" rows="5">{{ $technology->description }}</textarea>
                </div>
                <div class="form-control d-flex flex-column gap-2 pb-3 mb-3" style="width: 250px">
                    <label for="color">Scegli il colore del badge</label>
                    <input class="w-75" type="color" name="color" id="color" value="{{ $technology->color }}">
                </div>

                <input type="submit" value="Salva modifiche" class="btn btn-success">
            </form>
        @endsection
