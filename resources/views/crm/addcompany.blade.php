@extends('crm.crmlayout')
@section('title', 'CRM-Dashboard')
@section('content')
    <div class="loginregisterformouter">
        <div class="loginregisterform">
            <h4 class="text-capitalize text-center">Add Company</h4>
            <form action="{{route('addcompanies')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12 mb-3">
                    <label for="exampleFormControlInput1" class="form-label small">Name :</label>
                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1"
                        name="name" required>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="exampleFormControlInput1" class="form-label small">Email :</label>
                    <input type="email" class="form-control form-control-sm" id="exampleFormControlInput1"
                        name="email" required>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="exampleFormControlInput1" class="form-label small">Logo:</label>
                    <input type="file" class="form-control form-control-sm custom-file input"
                        accept="image/png,image/jpeg,image/jpg" name="logo" required>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="exampleFormControlInput1" class="form-label small">Website :</label>
                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1"
                        name="website" required>
                </div>
                <div class="bannerimgpostbtn mt-4">
                    <button class="btn btn-danger orangebg" type="submit">Add Company</button>
                </div>
            </form>
        </div>
    </div>
    @endsection
