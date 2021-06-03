@extends('layouts.dashboard')


@section('content')

<div class="container-fluid px-4">
    <div class="container mt-5">
        <h1 class="mt-4">Create Agency</h1>
        <form action = "/archive" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" class="form-control" value = "{{ Auth::user()->id }}" name="user_id">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                <br>

                <label for="desc">Description</label>
                <input type="text" class="form-control" id="desc" placeholder="Description" name="description">
                <br>

                <label for="type">Type</label>
                <input type="text" class="form-control" id="type" placeholder="type" name="type">
                <br>
            </div>

            <div class="form-group">
                <div class="col-md-6 mb-3">
                    <label>Upload File</label>
                        Browse… <input type="file"  name="image">
                </div>
            </div>
            <br>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection
