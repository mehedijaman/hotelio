@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <a href="/hotel/create" class="btn btn-primary">Add to Hotel</a>

    <div class="table col-md-12">
        <table class="table text-light ">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Reg NO</th>
                    <th>Logo</th>
                    <th>Photo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $Hotels as $Hotel)
                <tr class="table-info text-dark">
                    <td>{{$Hotel->id}}</td>
                    <td>{{$Hotel->Name}}</td>
                    <td>{{$Hotel->Titel}}</td>
                    <td>{{$Hotel->Email}}</td>
                    <td>{{$Hotel->Address}}</td>
                    <td>{{$Hotel->Phone}}</td>
                    <td>{{$Hotel->RegNO}}</td>
                    <td>{{$Hotel->Logo}}</td>
                    <td>{{$Hotel->Photo}}</td>
                    <td>
                        <a href="/hotel/{{$Hotel->id}}/edit" class="btn btn-warning">Edit</a>
                        <a href="/hotel/{{$Hotel->id}}/delete" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</div>
@endsection
