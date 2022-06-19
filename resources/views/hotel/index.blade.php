@extends('layouts.app')

@section('content')
<div class="container-fluid " style="position: fixed;">
    <div class="table col-md-12">
        <a href="/hotel/create" class="btn btn-primary mb-md-3 mx-md-2">Add to Hotel</a>

        <table class="table table-hover text-center invoice__index__table__bg text-light mx-md-2">
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
                <tr class="">
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
                        <a href="/hotel/{{ $Hotel->id }}/edit" class="btn btn-warning">Edit</a>

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
