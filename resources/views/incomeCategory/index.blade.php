@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <a href="/incomeCategory/create" class="btn btn-primary mb-md-3">Add to Income Category</a>

    <div class="table col-md-12">
        <table class="table table-stripd table-bordered table-dark w-auto text-light " >

            <thead >
                <tr >
                    <th>id</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $IncomeCategoris as $IncomeCategory)
                <tr class="table-info text-dark">
                    <td>{{ $IncomeCategory->id }}</td>
                    <td>{{ $IncomeCategory->Name }}</td>
                    <td>
                        <a href="/incomeCategory/{{ $IncomeCategory->id }}/edit" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

</div>
@endsection
