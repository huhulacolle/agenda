@extends('bootstrap')
@section('content')
    <br>
    <a href="ajouterunprof" class="btn btn-dark">Ajouter un prof</a>
    <div class="popup" class="text-white">
        <div class="mx-auto" style="width: 200px;">
            <div class="table-responsive-sm">
                <table class="table table-dark">
                    <thead>
                        <th scope="col">Date</th>
                        <th scope="col">Devoir</th>
                        <th scope="col">Matière</th>
                        <th scope="col">prof</th>
                    </thead>
                    <tbody>
                        @foreach ($affiche as $req)
                            <tr class="table-active">
                                <td>{{date('d/m/Y', strtotime($req -> date));}}</td>
                                <td>{{$req -> devoir}}</td>
                                <td>{{$req -> nom}}</td>
                                <td>{{$req -> prof}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
