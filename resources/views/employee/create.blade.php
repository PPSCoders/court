@extends('layouts.dashboard')


@section('content')

<div class="container-fluid px-4">
    <div class="container mt-5">
        <form action = "/employee" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                <br>
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="email">
            </div>
            <br>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="cid">CID</label>
                        <input type="text" class="form-control" id="cid"  placeholder="Enter CID number" name = "cid">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="eid">EID</label>
                        <input type="text" class="form-control" id="eid"  placeholder="Enter CID number" name = "emp_id">
                    </div>
                </div>
            </div>
            <br>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="gender">Gender</label>
                        <select class="form-control" id="gender" name="gender">
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="dob">Date of Birth</label>
                        <input type="date" id="dob" class="form-control " name="dob"> 
                    </div>
                </div>
            </div>
            <br>

            <div class="form-group">
                <label for="p_address">Permanent Address</label>
                <input type="text" class="form-control" id="p_address" placeholder="Address" name="permenant_address">

                <br>
                <label for="contact">Contact</label>
                <input type="text" class="form-control" id="contact" placeholder="contact" name="contact">

                <br>
                <label for="designation">Designation</label>
                <select class="form-control" id="designation" name="designation">
                    @foreach($designation as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>

                <br>
                <label for="position">Position</label>
                <select class="form-control" id="position" name="position">
                    @foreach($position as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>

                <br>
                <label for="agency">Work Agency</label>
                <select class="form-control" id="agency" name="agency">
                    @foreach($agency as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <br>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="emp_type">Employee Type</label>
                        <select class="form-control" id="emp_type" name="employee_type">
                            <option value="1">Regular</option>
                            <option value="2">Contract</option>
                        </select>
                    </div>
                </div>
            </div>

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
                    <img id='img-upload'/>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection
