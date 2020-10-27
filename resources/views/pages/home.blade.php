@extends('main')

@section('content')


    <table class="table text-center">
        <thead>
        <tr>
            <th scope="col">Firmos pavadinimas</th>
            <th scope="col">Įmonės kodas</th>
            <th scope="col">Adresas</th>
            <th scope="col">Aprašymas</th>
            <th scope="col">Veiksmai</th>
        </tr>
        </thead>
        <tbody>
        @foreach($companies as $company)
            <tr>
                <td>{{$company->name}}</td>
                <td>{{$company->code}}</td>
                <td>{{$company->adress}}</td>
                <td>{{$company->description}}</td>
                <td> <a class="mx-2" href="{{route("delete-firm",$company->id)}}">Ištrinti įrašą</a>
                    <a class="mx-2" href="{{route("edit-firm",$company->id)}}">Redaguoti įrašą</a>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>

@endsection



