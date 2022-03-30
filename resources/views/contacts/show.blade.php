@extends('layouts.simplelayout')

@section('content')
<h1>Update</h1>
<div class="container">

    <form method="POST" action="/update/{{ $contact->id }}">
        @csrf

        <div class="form-group">
            <label for="">Name :</label>
            <input type="text" id="name" name="name" class="form-control" required="" value="{{ $contact->name }}">
        </div>

        <div class="form-group">
            <label for="">Mobile :</label>
            <input type="text" id="mobilenumber" name="mobilenumber" class="form-control" required="" value="{{ $contact->mobilenumber }}">
        </div>

        <br>
            <button type="submit" class="btn btn-primary">Update</button>

    </form>

</div>
@endsection