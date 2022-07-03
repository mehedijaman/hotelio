@extends('layouts.app')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-7 m-auto">
            @if (Session::get('Success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                <h5><i class="icon fas fa-check"></i>Success!</h5>
                {{Session::get('Success')}}
            </div>
            @endif
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title text-navy">
                        <a href="{{  asset('bankLedger') }}" class="mr-3"><i class="fa-solid fa-circle-arrow-left fs-5 text-navy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back to List"></i></a>
                        Add BankLedger
                    </h3>
                </div>
                {{ Form::Open(array('url' => '/bankLedger','method' => 'POST','class' => 'form-horizontal', 'files' => true)) }}
                <div class="card-body">
                    <div class="form-group row">
                        <label for="BankID" class="form-label col-md-3">Bank ID:</label>
                        <div class="col-md-8">
                            <select type="number" name="BankID" id="" class="form-select">
                                <option value="">Open this select menu</option>
                                @foreach ($Banks as $Bank)
                                <option value="{{ $Bank->id }}">
                                    {{ $Bank->id }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Deposit" class="form-label col-md-3">Deposit:</label>
                        <div class="col-md-8">
                            <input type="number" name="Deposit" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Withdraw" class="form-label col-md-3">Withdraw:</label>
                        <div class="col-md-8">
                            <input type="number" name="Withdraw" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Date" class="form-label col-md-3">Date:</label>
                        <div class="col-md-8">
                            <input type="date" name="Date" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Description" class="form-label col-md-3">Description:</label>
                        <div class="col-md-8">
                            <input type="text" name="Description" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-sm-8 offset-sm-3">
                            <a href="#" class="btn btn-default float-left w-25">Reset</a>
                            <input type="submit" name="submit" id="" class="btn bg-navy float-right  w-25 text-capitalize">
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="card-footer"> -->
            {{-- <input type="submit" name="submit" id="" class="btn btn-danger float-right w-25 ml-2" value="Reset"> --}}
            <!-- </div> -->
            {{ Form::close() }}
        </div>
    </div>
</div>
</div>
@endsection