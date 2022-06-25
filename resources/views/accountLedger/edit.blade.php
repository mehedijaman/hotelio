@extends('layouts.app')
@section('content')
<div class="custom__container">
    <section class="button__list__show">
        <a href="{{ asset('accountLedger') }}" class="custom__btn__puple">List AccountLedger</a>
    </section>
    <div class="row">
        <div class="col-md-7 m-auto">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Horizontal Form</h3>
                </div>
                {{ Form::open(array('url' => '/accountLedger/'.$AccountLedgers->id,'method' => 'PATCH'))}}
                <div class="card-body">
                    <div class="form-group row">
                        <label for="Debit" class="col-sm-3 col-form-label">Debit:</label>
                        <div class="col-md-9">
                            <input type="number" name="Debit" class="form-control" placeholder="Debit Balance" value="{{ $AccountLedgers->Debit }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Credit" class="col-sm-3 col-form-label">Credit:</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="Credit" name="Credit" placeholder="Credit Balance" value="{{ $AccountLedgers->Credit }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Date" class="col-sm-3 col-form-label">Date:</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="Date" name="Date" value="{{ $AccountLedgers->Date }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Method" class="col-sm-3 col-form-label">Method:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="Method" name="Method" placeholder="Method" value="{{ $AccountLedgers->Method }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Description" class="col-sm-3 col-form-label">Description:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="ClosingBalance" name="Description" placeholder="Description" value="{{ $AccountLedgers->Description }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-sm-3 col-sm-9">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                <label class="form-check-label" for="exampleCheck2">Remember me</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <input type="submit" name="submit" id="" value="Update" class="btn bg-info float-right w-25">
                    <button type="submit" class="btn btn-default float-left">Cancel</button>
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