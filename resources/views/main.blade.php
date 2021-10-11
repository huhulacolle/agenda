@extends('bootstrap')
@section('content')
    <br>
    <div class="text-start">
        <a href="ajouterunprof" class="btn btn-dark">Ajouter un prof</a>
    </div>
    <div class="text-end">
        <a href="ajouterundevoir" class="btn btn-dark">Ajouter un devoir</a>
    </div>
    <ul class="nav nav-pills">
            <li class="nav-item">
                <a href="ajouterunprof" class="btn btn-dark">Ajouter un prof</a>
            </li>
            <li class="nav-item">
                <a href="ajouterundevoir" class="btn btn-dark">Ajouter un devoir</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
            <form class="d-flex">
                <a href="ajouterundevoir" class="btn btn-dark">Ajouter un devoir</a>
            </form>
    </ul>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <a href="ajouterundevoir" class="btn btn-dark">Ajouter un devoir</a>
            </div>
    </nav>

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
