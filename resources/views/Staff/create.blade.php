@extends('bootstrap-theme')

@section('content')

<h1>Create New staffs Record</h1>

<form method="POST" action="{{ url('/Staffs') }}" enctype="multipart/form-data" style="width:50%">
    @method('POST')
    @csrf

    @include ('staffs.form')

    <div class="form-group">
        <input class="btn btn-primary" type="submit" value="Create">
    </div>

</form>
@endsection