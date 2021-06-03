@extends('layouts.dashboard')


@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Archive Management</h1>
    <div class="container mt-5">
            <form action="/archive/create">
                <button type="submit" class="btn btn-primary btn-lg">Add File</button>
            </form>
            <hr>
            <table class="table table-bordered mb-5">
                <thead>
                    <tr class="table-success">
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Type</th>
                        <th scope="col">Uploaded By</th>
                        <th scope="col">URI</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($archives as $key=>$item)
                    <tr>
                        <th scope="row">{{ $key+1 }}</th>
                        <th scope="row">{{ $item->name}}</th>
                        <th scope="row">{{ $item->description}}</th>
                        <th scope="row">{{ $item->type}}</th>
                        <th scope="row">{{ $item->user->name}}</th>
                        <th scope="row">{{ $item->uri}}</th>
                        <td>
                            <form action="{{route('archive.edit',$item)}}">
                                <button type="submit" class="btn btn-success btn-lg">Edit</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

</div>

@endsection