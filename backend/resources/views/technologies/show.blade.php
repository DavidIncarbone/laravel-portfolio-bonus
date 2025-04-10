@extends("layouts.master")

@section("content")


<a href="{{route("admin.technologies.index")}}" class="btn btn-primary my-3">< Torna alle tecnologie</a>

  <div class="section-header">
            <h2>Cos'è <span class="badge" style="background-color:{{$technology->color}}">{{$technology->name}}</span> ?</h2>
    </div>
        <div class="section-content">
            <div class="row">
                <div class="col-md-12">
                    <p>{{$technology->description}}</p>
                </div>
            </div>
        </div>

@endsection