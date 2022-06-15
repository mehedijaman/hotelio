@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <a href="/guest/create" class="btn btn-primary mb-md-3">Add to New Guest</a>
    <!--Table-->
    <div class="table col-md-12">
        <table class="table table-stripd table-bordered table-dark text-light w-auto ">

            <!--Table head-->
            <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>NID NO</th>
                    <th>NID Documents</th>
                    <th>Passport NO</th>
                    <th>Passport Documents</th>
                    <th>Father</th>
                    <th>Mother</th>
                    <th>Spouse</th>
                    <th>Photo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ( $Guests as $Guest)
                <tr class="table-info text-dark ">
                    <td>{{$Guest->id}}</td>
                    <td>{{$Guest->Name}}</td>
                    <td>{{$Guest->Email}}</td>
                    <td>{{$Guest->Address}}</td>
                    <td>{{$Guest->Phone}}</td>
                    <td>{{$Guest->NIDNo}}</td>
                    <td>{{$Guest->NID}}</td>
                    <td>{{$Guest->PassportNo}}</td>
                    <td>{{$Guest->Passport}}</td>
                    <td>{{$Guest->Father}}</td>
                    <td>{{$Guest->Mother}}</td>
                    <td>{{$Guest->Spouse}}</td>
                    <td>{{$Guest->Photo}}</td>
                    <td>
                        <a href="/guest/{{$Guest->id}}/edit" class="btn btn-warning mx-md-2 mb-md-2">Edit</a>
                        <a href="/guest/{{$Guest->id}}/delete" class="btn btn-danger mx-md-2">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</div>
@endsection
