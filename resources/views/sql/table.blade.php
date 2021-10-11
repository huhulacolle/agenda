@extends('bootstrap')
@section('content')
<a href="/sql">retour</a>
<div style="text-align: center">

        <table class="table">
            <thead>
                @foreach ($nom as $req)
                <th scope="col">{{$req}}</th>
                @endforeach
                <th scope="col" colspan="2">&ensp;</th>
            </thead>
            <tbody>
                @foreach ($affiche as $req2)
                    <tr>
                        @for ($i=0; $i < count($nom); $i++) 
                            <?php $name = $nom[$i] ?> 
                            <td>{{$req2 -> $name}}</td>
                        @endfor
                        <td>
                            <form action="sqldelete" method="get">
                                <input type="hidden" name="table" value="{{$_GET['table']}}">
                                <button type="submit" name="delete" value={{$req2 -> id}}>Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <form action="sqlajouter" method="get">
                        @for ($i=0; $i < count($nom); $i++)
                            <td>
                                @if ($nom[$i] == 'id')
                                    {{++$req2->id}}
                                    <input type="hidden" name="id" value="{{++$req2->id}}">
                                @else
                                    <input type="text" name="{{$nom[$i]}}">
                                @endif
                            </td>
                        @endfor
                        <input type="hidden" name="table" value="{{$_GET['table']}}">
                        <td colspan="2">
                            <input type="submit" value="Ajouter">
                        </td>
                    </form>
                </tr>
            </tbody>
    </table>
    
</div>
@endsection
