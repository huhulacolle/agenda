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
                            <button type="submit" name="delete" value={{$req2 -> id}}>Supprimer</button>
                        </form>
                    </td>
                    <td>
                        <form action="sqlmodifier" method="get">
                            <button type="submit" name="modifier" value={{$req2 -> id}}>modifier</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
