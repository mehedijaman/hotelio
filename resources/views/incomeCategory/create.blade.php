@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <a href="/incomeCategory" class="btn btn-primary">Back to List</a>
        {!! Form::open(array('url' => '/incomeCategory' , 'method'=>'POST')) !!}
            <div class="page-wrapper p-t-45 p-b-50">
                <div class="wrapper wrapper--w790">
                    <div class="card card-5">
                        <div class="card-heading bg-light">
                            <h2 class="title text-dark">Income Category</h2>
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
                                    <button class="btn btn--radius-2 btn-lg btn-block bg-gray " type="submit">Add Income Category</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        {!! Form::close() !!}
    </div>
@endsection
