@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <a href="/income/create" class="btn btn-primary mb-md-3">Add to New Income</a>

    <div class="table col-md-12">
        <table class="table table-stripd table-bordered table-dark w-auto  text-light ">

            <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Amount</th>
                    <th>Description</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $Incomes as $Income)
                <tr class="table-info dark">
                    <td>{{$Income->id}}</td>
                    <td>{{$Income->CategoryID}}</td>
                    <td>{{$Income->Amount}}</td>
                    <td>{{$Income->Description}}</td>
                    <td>{{$Income->Date}}</td>
                    <td>
                        <a href="/income/{{$Income->id}}/edit" class="btn btn-warning">Edit</a>
                        <a href="/income/{{$Income->id}}/delete" class="btn btn-danger mx-md-2">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

</div>
@endsection
