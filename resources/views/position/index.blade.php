@extends('layouts.dashboard')


@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Designation Management</h1>
    <div class="container mt-5">
            <form action="/position/create">
                <button type="submit" class="btn btn-primary btn-lg">Add Position</button>
            </form>
            <hr>
            <table class="table table-bordered mb-5">
                <thead>
                    <tr class="table-success">
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($position as $key=>$item)
                    <tr>
                        <th scope="row">{{ $key+1 }}</th>
                        <th scope="row">{{ $item->name}}</th>
                        <td>
                            <form action="{{route('position.destroy',$item)}}" method="POST">
                                @csrf @method('delete')
                                <button type="submit" class="btn btn-danger btn-lg">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

</div>

@endsection