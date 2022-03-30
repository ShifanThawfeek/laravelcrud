@extends('layouts.simplelayout')

@section('content')
<h1>Contacts</h1>
<div class="container">

    @if (session('status'))
    <h6 class="alert alert-success">{{ session('status') }}</h6>
    @endif

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Mobile</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
            <tr>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->mobilenumber }}</td>
                <td><a href='/show/{{ $contact->id }}'>Edit</a></td>
                <td><a href='/delete/{{ $contact->id }}'>Delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection