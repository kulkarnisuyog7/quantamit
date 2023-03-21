@extends('crm.crmlayout')
@section('title', 'CRM-Dashboard')
@section('content')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <div class="container">
        <div class="row mb-2 mt-3">

            <div class="col-md-4">
                
                    <a href="{{route('loadaddemployee')}}" class="btn btn-danger">Add Employee</a>
                
            </div>
            <div class="col-md-4">
                <h3>Employee</h3>
            </div>
            <div class="col-md-4">
                <ol class="breadcrumb float-end">
                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a>Employee </a>
                    </li>

                </ol>
            </div>
            
        </div>
        <hr>
    </div>

    <hr>
    <div id="alldatatable" class="bg-white mt-2 p-2">
        <table id="example" class="table table-striped table-bordered mt-4" style="width:100%">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Company Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $d)
                    <tr>
                        <td>{{ $d->firstname }} </td>
                        <td>{{ $d->lastname }} </td>
                        <td>{{$d->company_name}} </td>
                        <td>{{$d->email}}</td>
                        <td>{{$d->phone}}</td>
                        <td>
                            <div class="d-flex">
                                <form method="POST" action="{{ route('deleteemployee', $d->id) }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit"><i class="bi bi-x-lg"></i></button>
                            </form>
                            <a href="{{route('loadupdateemployee',$d->id)}}">
                                <button class="btn btn-sm btn-primary"><i class="bi bi-pencil-square"></i></button>
                            </div>

                        </td>

                    </tr>
                @empty
                @endforelse
            </tbody>

        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
        $('.custom-file input').change(function(e) {
            var files = [];
            for (var i = 0; i < $(this)[0].files.length; i++) {
                files.push($(this)[0].files[i].name);
            }
            $(this).next('.custom-file-label').html(files.join(', '));
        });
    </script>
@endsection
