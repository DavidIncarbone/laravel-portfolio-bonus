@extends("layouts.master")

@section("content")

<a href="{{route("technologies.index")}}" class="btn btn-primary my-3">< Torna alle tecnologie</a>

  <div class="section-header">
            <h2>Cos'è <strong>{{$technology->name}}</strong>?</h2>
    </div>
        <div class="section-content">
            <div class="row">
                <div class="col-md-12">
                    <p>{{$technology->description}}</p>
                </div>
            </div>
        </div>

@endsection