@extends('crm.crmlayout')
@section('title', 'CRM-Dashboard')
@section('content')
    <!-- Page content-->
    <div class="container-fluid">

        <!-- dashboard starts -->
        <div id="dashboardboxes">

            <div class="dbboxouter" onclick="location.href='{{route('loadcompanies')}}'">
                <div class="dbbox">
                    <div class="dbboxleft">
                        <div class="dbicon">
                            <span class="material-icons">
                                photo_library
                            </span>
                        </div>
                    </div>
                    <div class="dbboxright">
                        <div class="dbboxcount">
                            <p class="mb-0">{{$company_count}}</p>
                        </div>
                        <div class="dbboxname">
                            <p class="mb-0">Companies</p>
                        </div>
                    </div>
                </div>
                <div class="dbboxbottom">

                    <span class="material-icons rightarrow">
                        arrow_right_alt
                    </span>
                </div>
            </div>

            <div class="dbboxouter" onclick="location.href='{{route('loademployees')}}'">
                <div class="dbbox">
                    <div class="dbboxleft">
                        <div class="dbicon">
                            <span class="material-icons">
                                contacts
                            </span>

                        </div>
                    </div>
                    <div class="dbboxright">
                        <div class="dbboxcount">
                            <p class="mb-0">{{$employee_count}}</p>
                        </div>
                        <div class="dbboxname">
                            <p class="mb-0">Employees</p>
                        </div>
                    </div>
                </div>
                <div class="dbboxbottom">

                    <span class="material-icons rightarrow">
                        arrow_right_alt
                    </span>
                </div>
            </div>

        </div>
        <!-- dashboard ends -->
    </div>
    <!-- Page content ends-->
@endsection
