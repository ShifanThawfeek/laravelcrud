@extends('layouts.simplelayout')

@section('content')
<h1>Create</h1>
<div class="container">

    <form method="POST" action="/store">
        @csrf

        <div class="form-group">
            <label for="">Name :</label>
            <input type="text" id="name" name="name" class="form-control" required="">
        </div>

        <div class="form-group">
            <label for="">Mobile :</label>
            <input type="text" id="mobilenumber" name="mobilenumber" class="form-control" required="">
        </div>

        <br>
            <button type="submit" class="btn btn-primary">Submit</button>

    </form>

</div>
@endsection