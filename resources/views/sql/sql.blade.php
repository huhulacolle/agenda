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
            </tbody>
        </table>
    </div>
@endsection


