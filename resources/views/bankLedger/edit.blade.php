@extends('layouts.app')
@section('content')
<div class="custom__container">
    <div class="row">
        <div class="col-md-7 m-auto">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title text-navy">
                        <a href="{{ asset('balance') }}" class="mr-3"><i class="fa-solid fa-circle-arrow-left fs-5 text-navy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back to List"></i></a>
                        Add New Booking
                    </h3>
                </div>
                {{ Form::open(array('url' => '/bankLedger/'.$BankLedgers->id,'method' => 'PATCH'))}}

                <div class="card-body">
                    <div class="form-group row">
                        <div class="form-group row">
                            <label for="BankID" class="form-label col-md-3">Bank ID:</label>
                            <div class="col-md-8">
                                <select type="number" name="BankID" id="" class="form-select">
                                    <option>Open this select menu</option>
                                    @foreach ($Banks as $Bank)
                                    <option value="{{ $Bank->id }}">
                                        {{ $Bank->id }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <label for="AcountID" class="col-sm-3 col-form-label">Deposit:</label>
                        <div class="col-sm-8">
                            <input type="number" name="Deposit" class="form-control" placeholder="Deposit Balance" value="{{ $BankLedgers->Deposit }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Date" class="col-sm-3 col-form-label">Withdraw</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="Withdraw" name="Withdraw" placeholder="Withdraw Balance" value="{{ $BankLedgers->Withdraw }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Date" class="col-sm-3 col-form-label">Date :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="Date" name="Date" value="{{ date('d-m-Y',strtotime($BankLedgers->Date))}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Description" class="col-sm-3 col-form-label">Description :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="Description" name="Description" placeholder="Description" value="{{ $BankLedgers->Description }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ClosingBalance" class="col-sm-3 col-form-label">Closing Balance</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="ClosingBalance" name="Description" placeholder="Description" value="{{ $BankLedgers->Description }}">
                        </div>
                    </div>
                    <input type="submit" name="submit" id="" class="btn bg-navy float-right w-25">
                    <a type="submit" href="/bankLedger" class="btn btn-default float-left">Cancel</a>
                </div>
                <div class="card-footer">
                </div>
                {{ Form::close()}}
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('select').selectize({
            sortField: 'text'
        });
    });
</script>

@endsection