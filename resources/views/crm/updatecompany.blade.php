@extends('crm.crmlayout')
@section('title', 'CRM-Dashboard')
@section('content')
    <div class="loginregisterformouter">
        <div class="loginregisterform">
            <h4 class="text-capitalize text-center">Update Company</h4>
            <form action="{{route('updatecompany',$data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-md-12 mb-3">
                    <label for="exampleFormControlInput1" class="form-label small">Name :</label>
                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1"
                        name="name" value="{{$data->name}}" required>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="exampleFormControlInput1" class="form-label small">Email :</label>
                    <input type="email" class="form-control form-control-sm" id="exampleFormControlInput1"
                        name="email" value="{{$data->email}}" required>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="exampleFormControlInput1" class="form-label small">Logo:</label>
                    <input type="file" class="form-control form-control-sm custom-file input"
                        accept="image/png,image/jpeg,image/jpg" name="logo"  required>
                    <img src="{{asset('storage/'.$data->logo)}}" alt="" width="100px" height="100px">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="exampleFormControlInput1" class="form-label small">Website :</label>
                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1"
                        name="website" value="{{$data->website}}" required>
                </div>
                <div class="bannerimgpostbtn mt-4">
                    <button class="btn btn-danger orangebg" type="submit">Update Company</button>
                </div>
            </form>
        </div>
    </div>
    @endsection
