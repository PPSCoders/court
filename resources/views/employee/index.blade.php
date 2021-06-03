@extends('layouts.dashboard')


@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Staff Management</h1>
    <div class="container mt-5">
            <form action="/employee/create">
                <button type="submit" class="btn btn-primary btn-lg">Add Staff</button>
            </form>
            <hr>
            <table class="table table-bordered mb-5">
                <thead>
                    <tr class="table-success">
                        <th scope="col">#</th>
                        <th scope="col">First name</th>
                        <th scope="col">CID</th>
                        <th scope="col">EID</th>
                        <th scope="col">Email</th>
                        <th scope="col">DOB</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($employees as $key=>$employee)
                    <tr>
                        <th scope="row">{{ $key+1 }}</th>
                        <td>{{ $employee->name}}</td>
                        <td>{{ $employee->cid}}</td>
                        <td>{{ $employee->emp_id}}</td>
                        <td>{{ $employee->email}}</td>
                        <td>{{ $employee->dob }}</td>
                        <td>
                            <form action="{{route('employee.show',$employee)}}">
                                <button type="submit" class="btn btn-info btn-lg">Show</button>
                            </form>
                            <form action="{{route('employee.edit',$employee)}}">
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