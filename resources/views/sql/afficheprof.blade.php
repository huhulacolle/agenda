@extends('bootstrap')
@section('content')
    <br><br>
    <table class="table">
        <thead>
            <th scope="col">id</th>
            <th scope="col">nom</th>
            <th scope="col">prof</th>
            <th scope="col">&ensp;</th>
        </thead>
        <tbody>
            @foreach ($prof as $sql)
                <tr>
                    <td>
                        {{$sql -> id}}
                    </td>
                    <td>
                        {{$sql -> nom}}
                    </td>
                    <td>
                        {{$sql -> prof}}
                    </td>
                    <td>
                        <form action="moinprof" method="get">
                            <button type="submit" name="id" class="btn btn-dark" 
                            value="{{$sql -> id}}">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td>
                    {{++$sql -> id}}
                </td>
                <form action="plusprof" method="get">
                    <td>
                        <input type="text" name="nom" placeholder="nom">
                    </td>
                    <td>
                        <input type="text" name="prof" placeholder="prof">
                    </td>
                    <td>
                        <button type="submit" class="btn btn-dark">Ajouter</button>
                    </td>
                </form>
            </tr>
        </tbody>
    </table>
@endsection