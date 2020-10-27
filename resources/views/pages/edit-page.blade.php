@extends('main')

@section('content')

@foreach($company as $item)
    <form method="POST" action="{{route("update-firm", $item->id)}}" class="w-25 m-auto text-center font-weight-bold">

        @csrf
        <div class="form-group">
            <label for="title">Įmonės pavadinimas</label>
            <input type="text" class="form-control text-center" id="name" name="name" value="{{$item->name}}" placeholder="Įveskite pavadinimą">
        </div>
        <div class="form-group">
            <label for="exampleInputcode">Kodas</label>
            <input type="text" class="form-control text-center" id="code" name="code" value="{{$item->code}}" placeholder="Įveskite kodą">
        </div>
        <div class="form-group">
            <label for="exampleInputadress">Adresas</label>
            <input type="text" class="form-control text-center" id="adress"  name="adress" value="{{$item->adress}}" placeholder="Įveskite kodą">
        </div>
        <div class="form-group">
            <label for="exampleInputdesc">Aprašymas</label>
            <input type="text" class="form-control text-center" id="description" name="description" value="{{$item->description}}" placeholder="Aprašymas">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

@endforeach

@endsection
