@extends('layouts.main')
@include('layouts.navbar')
@section('main-container')
    <div class="container">
        <h1>Users</h1>
    </div>
    <div class="add" style="text-align: right">
        <a href="{{ url('register') }}">
            <button class="btn btn-primary">Add</button>
        </a>
    </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($registers as $value)
                    <tr>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->email }}</td>
                        <td>{{ $value->password }}</td>
                        <td>
                            <a href="{{ url('customers/edit/') }}/{{ $value->id }}"><button class="btn btn-primary">Edit</button></a>

                            <a href="{{ url('customers/delete/') }}/{{ $value->id }}"><button
                                    class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endsection
