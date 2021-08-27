@extends('bootstrap-theme')

@section('content')

<h1>World Staffs Report</h1>
<a href="{{ url('/Staffs/create') }}" class="btn btn-sm btn-success mr-4">New Record</a> 
<form action="{{ url('/Staffs') }}" method="GET" class="my-4">
    <input name="search" id="search" value="{{ request('search') }}" />
    <button type="submit">Search</button>
</form>

<table class="table table-sm table-bordered text-end"style="width:50%">
    <tr>
        <th>#</th> <th>Name</th> <th>Age</th> <th>Salay</th> <th>Phone</th><th>Action</th>

    </tr>
    @foreach($Staffs as $item)
    <tr>
        <td>{{ $item->#  }}</td>
        <td>{{ $item->Name }}</td>
        <td>{{ number_format( $item->Age ) }}</td>
        <td>{{ $item->active }}</td>
        
        <td>
            <a href="{{ url('/Staffs/'.$item->id ) }}" class="btn btn-sm btn-primary">View</a>
            <a href="{{ url('/Staffs/'.$item->id.'/edit' ) }}" class="btn btn-sm btn-warning">Edit</a>

            <form method="POST" action="{{ url('/Staff' . '/' . $item->id) }}" style="display:inline">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Confirm delete?')">
                    Delete
                </button>
            </form>
        </td>
    </tr>
    </tr>
    @endforeach
</table>

<div class="mt-4">{{ $Staffas->appends(['search' => request('search')])->links() }}</div>
@endsection