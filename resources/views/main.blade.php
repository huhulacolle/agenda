@extends('bootstrap')
@section('content')
<div class="popup" class="text-white">
    <div class="mx-auto" style="width: 200px;">
        <div class="table-responsive-sm">
            <table class="table table-dark">
                <thead>
                    <th scope="col">Date</th>
                    <th scope="col">Devoir</th>
                    <th scope="col">Matière</th>
                </thead>
                <tbody>
                    @foreach ($affiche as $req)
                        <tr class="table-active">
                            <td>01/03/24</td>
                            <td>DM</td>
                            <td>{{$req -> nom}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
