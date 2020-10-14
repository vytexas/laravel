@extends('main')

@section('content')


<form class="w-25 m-auto text-center font-weight-bold">
    
  <div class="form-group">
    <label for="exampleInputname1">Įmonės pavadinimas</label>
    <input type="text" class="form-control text-center" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Įveskite pavadinimą">
  </div>
  <div class="form-group">
    <label for="exampleInputcode" style="text-center">Kodas</label>
    <input type="text" class="form-control text-center" id="exampleInputPassword1" placeholder="Įveskite kodą">
  </div>
  <div class="form-group">
    <label for="exampleInputadress">Adresas</label>
    <input type="text" class="form-control text-center" id="exampleInputadresas" placeholder="Įveskite kodą">
  </div>
  <div class="form-group">
    <label for="exampleInputdesc">Aprašymas</label>
    <input type="text" class="form-control text-center" id="exampleInputdesc" placeholder="Aprašymas">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</container>
</form>

@endsection