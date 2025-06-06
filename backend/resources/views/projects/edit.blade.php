@extends('layouts.master');

@section('content')
    <x-form>

        <x-slot:route>{{ route('admin.projects.update', $project) }}</x-slot>
        <x-slot:method>@method('PUT')</x-slot>
        <x-slot:name>{{ $project->name }}</x-slot>
        <x-slot:type>
            @foreach ($types as $type)
                <option value="{{ $type->id }}" {{ $project->type_id === $type->id ? 'selected' : '' }}>
                    {{ $type->name }}</option>
            @endforeach
        </x-slot>
        <x-slot:technologies>
            <div class="form-control mb-3 d-flex flex-wrap">
                @foreach ($technologies as $technology)
                    <div class="tag me-2">
                        <input type="checkbox" name="technologies[]" value="{{ $technology->id }}"
                            id="technology-{{ $technology->id }}"
                            {{ $project->technologies->contains($technology->id) ? 'checked' : '' }}>
                        <label for="technology-{{ $technology->id }}">{{ $technology->name }}</label>
                    </div>
                @endforeach
            </div>
        </x-slot>
        <x-slot:customer>{{ $project->customer }}</x-slot>
        <x-slot:period>{{ $project->period }}</x-slot>
        <x-slot:summary>{{ $project->summary }}</x-slot>
        <x-slot:image>
            <div class="form-control mb-3 d-flex flex-column">
                <label for="image">Immagine del progetto</label>
                <input type="file" id="image" name="image">

                @if ($project->image)
                    <div class="d-flex gap-3 align-items-center mt-3">
                        <div>Immagine attuale:</div>
                        <div class="" id="post-image" style="width: 100px; height:50px">
                            <img class="" src="{{ asset('storage/' . $project->image) }}"
                                alt="{{ $project->name }}">
                        </div>
                    </div>
                @endif

            </div>
        </x-slot>
        <x-slot:link>{{ $project->link }}</x-slot>
        <x-slot:btnAction>Salva modifiche</x-slot>

    </x-form>
@endsection
