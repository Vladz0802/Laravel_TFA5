@extends('layout')

@section('title', 'Customer Accounts')

@section('content')
    <h1>Customer Accounts</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>City</th>
            </tr>
        </thead>
        <tbody>
            {{-- Loop through the static array sent by CustomerController --}}
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer['id'] }}</td>
                    <td>{{ $customer['name'] }}</td>
                    <td>{{ $customer['email'] }}</td>
                    <td>{{ $customer['phone'] }}</td>
                    <td>{{ $customer['city'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
