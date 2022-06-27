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
                {{ Form::open(array('url' => '/acount/ledger/'.$AccountLedgers->id,'method' => 'PATCH'))}}

                <div class="card-body">
                    <div class="form-group row">
                        <label for="AcountID" class="col-sm-3 col-form-label">Acount ID:</label>
                        <div class="col-sm-9">
                            <input type="number" name="Debit" class="form-control" placeholder="Debit Balance" value="{{ $AccountLedgers->Debit }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Date" class="col-sm-3 col-form-label">Date</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="Credit" name="Credit" placeholder="Credit Balance" value="{{ $AccountLedgers->Credit }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="OpeningBalance" class="col-sm-3 col-form-label">Opening Balance</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="Date" name="Date" value="{{ date('d-m-Y',strtotime($AccountLedgers->Date))}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ClosingBalance" class="col-sm-3 col-form-label">Closing Balance</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="Method" name="Method" placeholder="Method" value="{{ $AccountLedgers->Method }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ClosingBalance" class="col-sm-3 col-form-label">Closing Balance</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="ClosingBalance" name="Description" placeholder="Description" value="{{ $AccountLedgers->Description }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name text-black col-sm-3 mx-3">Status</div>
                        <div class="Status">
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">Yes
                                    <input type="radio" name="exist">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">No
                                    <input type="radio" name="exist">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <input type="submit" name="submit" id="" class="btn bg-navy float-right w-25">
                    <button type="submit" class="btn btn-default float-left">Cancel</button>
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