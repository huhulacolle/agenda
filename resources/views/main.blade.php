@extends('bootstrap')
@section('content')
    <br>
    <a href="ajouterunprof" class="btn btn-dark">Ajouter un prof</a>
    <button type="button" class="btn btn-dark float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Ajouter un devoir
    </button>
    <br> <br>
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
@endsection
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter un prof</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="ajouterundevoir" method="get">
                <div class="modal-body">
                    <table class="table">
                        <thead>
                            <th scope="col">Prof/Matière</th>
                            <th scope="col">Devoir</th>
                            <th scope="col">Date</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <select name="nom" class="form-control">
                                        @foreach ($prof as $sql)
                                            <option value="{{$sql -> id}}">{{$sql -> prof}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="devoir" class="form-control" required>
                                </td>
                                <td>
                                    <input type="date" name="date" class="form-control"
                                        value="{{date('Y-m-d', strtotime("10 days"))}}">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-dark">Sauvegarder</button>
                </div>
            </form>
        </div>
    </div>
</div>
