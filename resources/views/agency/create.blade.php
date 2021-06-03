@extends('layouts.dashboard')


@section('content')

<div class="container-fluid px-4">
    <div class="container mt-5">
        <h1 class="mt-4">Create Agency</h1>
        <form action = "/agency" method="POST" >
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Name" name="name">
            </div>
            <br>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection
