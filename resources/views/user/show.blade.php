@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">User {{ $user->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/user') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/user/' . $user->id . '/edit') }}" title="Edit User"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('user' . '/' . $user->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete User" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $user->id }}</td>
                                    </tr>
                                    <tr><th> Name </th><td> {{ $user->name }} </td></tr><tr><th> Email </th><td> {{ $user->email }} </td></tr><tr><th> Email Verified At </th><td> {{ $user->email_verified_at }} </td></tr><tr><th> Password </th><td> {{ $user->password }} </td></tr><tr><th> Remember Token </th><td> {{ $user->remember_token }} </td></tr><tr><th> Role </th><td> {{ $user->role }} </td></tr>
                                </tbody>
                            </table>
                            <hr>
                                   @php
                                   $vehicle = $user->vehicles()->get();
                                  @endphp
                                  <h2 class="pt-4">{{ $user->name }}'s Vehicles</h2>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
