@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <a href="/hotel/create" class="btn btn-primary mb-md-3 ">Add to Hotel</a>

    <div class="table col-md-12">
        <table class="table table-stripd table-bordered table-dark text-light w-auto">
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
                    <td>{{ $Hotel->id }}</td>
                    <td>{{ $Hotel->Name }}</td>
                    <td>{{ $Hotel->Title }}</td>
                    <td>{{ $Hotel->Email }}</td>
                    <td>{{ $Hotel->Address }}</td>
                    <td>{{ $Hotel->Phone }}</td>
                    <td>{{ $Hotel->RegNo }}</td>
                    <td>{{ $Hotel->Logo }}</td>
                    <td>{{ $Hotel->Photo }}</td>
                    <td>
                        <a href="/hotel/{{$Hotel->id}}/edit" class="btn btn-warning">Edit</a>

                        {{ Form::open(['url' => '/hotel/'.$Hotel->id,'method' => 'DELETE']) }}
                            <input type="submit" name="submit" value="Delete" class="btn btn-danger">
                        {{ Form::close()}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</div>
@endsection
