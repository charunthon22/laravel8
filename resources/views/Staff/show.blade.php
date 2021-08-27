@extends('bootstrap-theme')

@section('content')
<h1>Staffa #{{ $Staffa->id }}</h1>
<table class="table table-sm" style="width:50%">
    <tbody>
        <tr><th> # </th><td>{{ $Staffa-># }}</td></tr>
        <tr><th> Name  </th><td> {{ $Staffa->Name }} </td></tr>
        <tr><th> Age   </th><td> {{ $Staffa->Age }} </td></tr>
        <tr><th> Salay   </th><td> {{ $Staffa->Salay }} </td></tr>
        <tr><th> Phone   </th><td> {{ $Staffa->Phone }} </td></tr>
        <tr><th> Actione  </th><td> {{ $Staffa->Actione }} </td></tr>
    
    </tbody>
</table>
@endsection
