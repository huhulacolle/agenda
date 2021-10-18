@extends('bootstrap')
@section('content')
    <br>
    <a href="/" class="btn btn-dark">Retour</a>
    <br><br>
    <table class="table">
        <thead>
            <th scope="col">Matières</th>
            <th scope="col">prof</th>
            <th scope="col">&ensp;</th>
        </thead>
        <tbody>
            @foreach ($prof as $sql)
                <tr>
                    <td>
                        {{$sql -> nom}}
                    </td>
                    <td>
                        {{$sql -> prof}}
                    </td>
                    <td>
                        @if (isset($id[$i]) && $id[$i] == $sql -> id)
                            <form action="moinprof" method="get" class="d-grid gap-2">
                                <button type="submit" name="id" class="btn btn-dark" 
                                value="{{$sql -> id}}" disabled>Supprimer</button>
                            </form>
                        @else
                            <form action="moinprof" method="get" class="d-grid gap-2">
                                <button type="submit" name="id" class="btn btn-dark" 
                                value="{{$sql -> id}}">Supprimer</button>
                            </form>
                        @endif
                    </td>
                </tr>
                <?php $i++ ?>
            @endforeach
            <tr>
                <form action="plusprof" method="get">
                    <td>
                        <input type="text" name="nom" placeholder="nom">
                    </td>
                    <td>
                        <input type="text" name="prof" placeholder="prof">
                    </td>
                    <td class="d-grid gap-2">
                        <button type="submit" class="btn btn-dark">Ajouter</button>
                    </td>
                </form>
            </tr>
        </tbody>
    </table>
@endsection