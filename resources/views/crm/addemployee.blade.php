@extends('crm.crmlayout')
@section('title', 'CRM-Dashboard')
@section('content')
    <div class="loginregisterformouter">
        <div class="loginregisterform">
            <h4 class="text-capitalize text-center">Add Employee</h4>
            <form action="{{route('addemployee')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12 mb-3">
                    <label for="exampleFormControlInput1" class="form-label small">First Name :</label>
                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1"
                        name="firstname" required>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="exampleFormControlInput1" class="form-label small">Last Name :</label>
                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1"
                        name="lastname" required>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="exampleFormControlInput1" class="form-label small">Company :</label>
                    <select class="form-control form-control-sm" name="company" required>
                        <option value="">Select Company</option>
                        @foreach($data as $company)
                        <option value="{{$company->id}}">{{$company->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="exampleFormControlInput1" class="form-label small">Email :</label>
                    <input type="email" class="form-control form-control-sm" id="exampleFormControlInput1"
                        name="email" required>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="exampleFormControlInput1" class="form-label small">Phone :</label>
                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1"
                        name="phone" required>
                </div>
                
                <div class="bannerimgpostbtn mt-4">
                    <button class="btn btn-danger orangebg" type="submit">Add Employee</button>
                </div>
            </form>
        </div>
    </div>
    @endsection
