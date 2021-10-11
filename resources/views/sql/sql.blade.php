@extends('bootstrap')
@section('content')
    <div style="text-align: center">
        <table class="table">
            <thead>
                <th scope="col">Table</th>
            </thead>
            <tbody>
                @foreach ($table as $req)
                    <tr>
                        <td>
                            <a href="/table?table={{$req -> nom}}">{{$req -> nom}}</a>
                        </td>
                    </tr>
                @endforeach
                <form action="ajoutertable" method="get">
                    <tr>
                        <td style="text-align: center">
                            <input type="text" name="table" placeholder="Ajouter">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="submit">Ajouter</button>
                        </td>
                    </tr>
                </form>
            </tbody>
        </table>
    </div>
@endsection


