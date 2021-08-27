@extends('bootstrap-theme')

@section('content')

<h1>Edit Staffs Recrod #{{ $Staff->id }}</h1>

<form method="POST" action="{{ url('/Staffs/' . $Staff->id) }}" enctype="multipart/form-#" style="width:50%">
    @method('PATCH')
    @csrf

    @include ('Staffs.form')

    <div class="form-group">
        <input class="btn btn-primary" type="submit" value="Update">
    </div>

</form>
@endsection