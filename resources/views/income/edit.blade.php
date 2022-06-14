@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <a href="/income" class="btn btn-primary">Back to List</a>
        {!! Form::open(array('url' => '/income/update' , 'method'=>'PATCH')) !!}
            <div class="page-wrapper p-t-45 p-b-50">
                <div class="wrapper wrapper--w790">
                    <div class="card card-5">
                        <div class="card-heading bg-light">
                            <h2 class="title text-dark">Income</h2>
                        </div>
                        <div class="card-body">
                            <form method="POST">
                                <div class="form-row">
                                    <div class="name">Name</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Amount</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="number" name="Amount">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Description</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="Description">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Date</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="date" name="Date">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button class="btn btn--radius-2 btn--red" type="submit">Add Income</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        {!! Form::close() !!}
    </div>
@endsection
