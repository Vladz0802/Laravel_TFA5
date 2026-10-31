@extends('layout')

@section('title', 'User Accounts')

@section('content')
    <h1>User Accounts</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Full Name</th>
            </tr>
        </thead>
        <tbody>
            {{-- Loop through the users retrieved by Eloquent in UserController --}}
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->full_name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
