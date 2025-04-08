
<form action="{{$route}}" method="POST" enctype="multipart/form-data">

    @csrf
    {{$method}}

    <div class="form-control mb-3 d-flex flex-column">
        <label for="name">Nome del progetto</label>
        <input type="text" name="name" id="name" value="{{$name}}">
    </div>
    <div class="form-control mb-3 d-flex flex-column">
        <label for="type">Tipo di progetto</label>
        
        <select name="type_id" id="type">
            {{$type}}
        </select>
    </div>
    {{$technologies}}
    <div class="form-control mb-3 d-flex flex-column">
        <label for="customer">Cliente</label>
        <input type="text" name="customer" id="customer" value="{{$customer}}">
    </div>
    <div class="form-control mb-3 d-flex flex-column">
        <label for="period">Periodo di sviluppo</label>
        <input type="text" name="period" id="period" value="{{$period}}">
    </div>
    
    <div class="form-control mb-3 d-flex flex-column">
        <label for="summary">Descrizione del progetto</label>
        <textarea  name="summary" id="summary" width="100%" rows="5">{{$summary}}</textarea>
     </div>

     <div class="form-control mb-3 d-flex flex-column">
        <label for="image">Immagine del progetto</label>
        <input type="file" id="image" name="image">
     </div>
  
     <div class="form-control mb-3 d-flex flex-column">
        <label for="link">Link al progetto</label>
        <input type="text" name="link" id="link" value="{{$link}}">
    </div>

     <input type="submit" value="{{$btnAction}}" class="btn btn-success">

</form>