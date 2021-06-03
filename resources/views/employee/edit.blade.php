@extends('layouts.dashboard')


@section('content')

<div class="container-fluid px-4">
    <div class="container mt-5">
        <form action="{{route('employee.update',$employee)}}" method="POST" enctype="multipart/form-data">
            <br>

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" value="{{$employee->name}}" name="name" >
                <br>
                <label for="email">Email address</label>
                <input type="text" class="form-control" id="email" value="{{$employee->email}}" name="email" placeholder="email">
            </div>
            <br>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="cid">CID</label>
                        <input type="text" class="form-control" id="cid" value="{{$employee->cid}}" placeholder="Enter CID number" name = "cid">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="eid">EID</label>
                        <input type="text" class="form-control" id="eid" value="{{$employee->emp_id}}" placeholder="Enter CID number" name = "emp_id">
                    </div>
                </div>
            </div>
            <br>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="gender">Gender</label>
                        <select class="form-control" id="gender" name="gender">
                            @if($employee->gender == "Male")
                                <option selected="selected">Male</option>
                                <option>Female</option>
                            @else
                                <option>Male</option>
                                <option selected="selected">Female</option>
                            @endif
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="dob">Date of Birth</label>
                        <input type="date" id="dob" class="form-control datetimepicker" value="{{$employee->dob}}" name="dob"> 
                    </div>
                </div>
            </div>
            <br>

            <div class="form-group">
                <label for="p_address">Permanent Address</label>
                <input type="text" class="form-control" id="p_address" placeholder="Address" value="{{$employee->permenant_address}}" name="permenant_address">

                <br>
                <label for="contact">Contact</label>
                <input type="text" class="form-control" id="contact" placeholder="contact" value="{{$employee->contact}}" name="contact">

                <br>
                <label for="designation">Designation</label>
                <select class="form-control" id="designation" name="designation_id">
                    @foreach($designation as $item)
                        @if($employee->designation->id == $item->id)
                            <option selected="selected" value="{{$item->id}}">{{$item->name}}</option>
                        @else
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endif
                    @endforeach
                </select>

                <br>
                <label for="position">Position</label>
                <select class="form-control" id="position" name="position_id">
                    @foreach($position as $item)
                        @if($employee->position->id == $item->id)
                            <option selected="selected" value="{{$item->id}}">{{$item->name}}</option>
                        @else
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endif
                    @endforeach
                </select>


                <br>
                <label for="agency">Work Agency</label>
                <select class="form-control" id="agency" name="agency_id">
                    @foreach($agency as $item)
                        @if($employee->agency->id == $item->id)
                            <option selected="selected" value="{{$item->id}}">{{$item->name}}</option>
                        @else
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <br>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="emp_type">Employee Type</label>
                        <select class="form-control" id="emp_type" name="employee_type">
                            @if($employee->employee_type == 1)
                                <option value = "1" selected="selected">Regular</option>
                                <option value = "2">Contract</option>
                            @else
                                <option value = "1">Regular</option>
                                <option value = "2" selected="selected">Contract</option>
                            @endif
                        </select>
                    </div>
                </div>
            </div>
            <br>

            <div class="form-group">
                <div class="col-md-6 mb-3">
                    <label>Upload Image</label>
                    <div class="input-group">
                        <span class="input-group-btn">
                            <span class="btn btn-default btn-file">
                                Browse… <input type="file" id="imgInp" name="image">
                            </span>
                        </span>
                        <input type="text" class="form-control" readonly> 
                    </div>
                    <img src ="{{asset('uploads/')}}/{{$employee->profile_uri}}" id='img-upload'/>
                </div>
            </div>

            @csrf @method('patch')
            <button type="submit" class="btn btn-success btn-lg">Update</button>
        </form>
        <br>
        <div class="row">
            <div class="col-md-6 mb-3">
                <form action="{{route('employee.destroy',$employee)}}" method="POST">
                    @csrf @method('delete')
                    <button type="submit" class="btn btn-danger btn-lg">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
