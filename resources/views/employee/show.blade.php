@extends('layouts.dashboard')


@section('content')

<div class="container-fluid px-4">
    <div class="container mt-5">
        <form>
            <div class="form-group">
                <div class="col-md-6 mb-3">
                    <img src ="{{asset('uploads/')}}/{{$employee->profile_uri}}" id='img-upload'/>
                </div>
            </div>
            <br>

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" value="{{$employee->name}}" name="name" readonly>
                <br>
                <label for="email">Email address</label>
                <input type="text" class="form-control" id="email" value="{{$employee->email}}" readonly name="email" placeholder="email">
            </div>
            <br>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="cid">CID</label>
                        <input type="text" class="form-control" id="cid" value="{{$employee->cid}}" readonly placeholder="Enter CID number" name = "cid">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="eid">EID</label>
                        <input type="text" class="form-control" id="eid" value="{{$employee->emp_id}}" readonly placeholder="Enter CID number" name = "emp_id">
                    </div>
                </div>
            </div>
            <br>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="gender">Gender</label>
                        <input type="text" class="form-control" id="gender" value="{{$employee->gender}}" readonly placeholder="gender" name = "emp_id">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="dob">Date of Birth</label>
                        <input type="text" id="dob" class="form-control datetimepicker" value="{{$employee->dob}}" readonly name="dob"> 
                    </div>
                </div>
            </div>
            <br>

            <div class="form-group">
                <label for="p_address">Permanent Address</label>
                <input type="text" class="form-control" id="p_address" placeholder="Address" value="{{$employee->permenant_address}}" readonly name="permenant_address">

                <br>
                <label for="contact">Contact</label>
                <input type="text" class="form-control" id="contact" placeholder="contact" value="{{$employee->contact}}" readonly name="contact">

                <br>
                <label for="designation">Designation</label>
                <input type="text" class="form-control" id="designation" placeholder="Designation" value="{{$employee->designation->name}}" readonly name="designation">

                <br>
                <label for="position">Position</label>
                <input type="text" class="form-control" id="position" placeholder="position" value="{{$employee->position->name}}" readonly name="position_id">


                <br>
                <label for="agency">Work Agency</label>
                <input type="text" class="form-control" id="agency" placeholder="agency" value="{{$employee->agency->name}}" readonly name="work_agency">
            </div>
            <br>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="emp_type">Employee Type</label>
                        <input type="text" class="form-control" id="emp_type" placeholder="type" value="{{$employee->emp_type}}" readonly name="emp_type">
                    </div>
                </div>
            </div>


        </form>
    </div>
</div>

@endsection
