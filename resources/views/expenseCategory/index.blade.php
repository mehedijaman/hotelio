@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <a href="/expenseCategory/create" class="btn btn-primary mb-md-3">Add to Income Category</a>

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
                @foreach ( $ExpenseCategoris as $ExpenseCategory)
                <tr class="table-info text-dark">
                    <td>{{ $ExpenseCategory->id }}</td>
                    <td>{{ $ExpenseCategory->Name }}</td>
                    <td>
                        <a href="/expenseCategory/{{ $ExpenseCategory->id }}/edit" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

</div>
@endsection
