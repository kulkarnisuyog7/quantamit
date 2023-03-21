@extends('crm.crmlayout')
@section('title', 'CRM-Dashboard')
@section('content')
    <div class="loginregisterformouter">
        <div class="loginregisterform">
            <h4 class="text-capitalize text-center">Update Employee</h4>
            <form action="{{route('updateemployee',$data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="col-md-12 mb-3">
                    <label for="exampleFormControlInput1" class="form-label small">First Name :</label>
                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1"
                        name="firstname" value="{{$data->firstname}}" required>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="exampleFormControlInput1" class="form-label small">Last Name :</label>
                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1"
                        name="lastname" value="{{$data->lastname}}" required>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="exampleFormControlInput1" class="form-label small">Company :</label>
                    <select class="form-control form-control-sm" name="company" required>
                        <option value="{{$data->company_id}}">{{$data->company_name}}</option>
                        @foreach($company as $company)
                        <option value="{{$company->id}}">{{$company->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="exampleFormControlInput1" class="form-label small">Email :</label>
                    <input type="email" class="form-control form-control-sm" id="exampleFormControlInput1"
                        name="email" value="{{$data->email}}" required>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="exampleFormControlInput1" class="form-label small">Phone :</label>
                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1"
                        name="phone"  value="{{$data->phone}}" required>
                </div>
                
                <div class="bannerimgpostbtn mt-4">
                    <button class="btn btn-danger orangebg" type="submit">Update Employee</button>
                </div>
            </form>
        </div>
    </div>
    @endsection
