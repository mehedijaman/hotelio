@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <a href="/bank/create" class="btn btn-primary">Add New Bank</a>
        <table class="table tablep-responsive table-stripped table-condensed table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($Banks as $Bank)
                <tr>
                    <td>{{ $Bank->id }}</td>
                    <td>{{ $Bank->Name }}</td>
                    <td>
                        <a href="" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
