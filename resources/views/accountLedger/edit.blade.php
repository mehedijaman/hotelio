@extends('layouts.app')
@section('content')
<div class="custom__container">
    <div class="row">
        <div class="col-md-7 m-auto">
            @if (Session::get('Update'))
            <div class="alert bg-teal alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                <h5><i class="icon fas fa-check"></i>Update!</h5>
                {{Session::get('Update')}}
            </div>
            @endif
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title text-navy">
                        <a href="{{ asset('acount/ledger') }}" class="mr-3"><i class="fa-solid fa-circle-arrow-left fs-5 text-navy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back to List"></i></a>
                        Edit Account Ledger
                    </h3>
                </div>
                {{ Form::open(array('url' => '/acount/ledger/'.$AccountLedgers->id,'class' => 'form-horizontal','id' =>'UpdateAccountLedgerForm','method' => 'PATCH'))}}

                <div class="card-body">
                    <div class="form-group row">
                        <label for="AcountID" class="col-sm-3 col-form-label">Debit:</label>
                        <div class="col-sm-8">
                            <input type="number" name="Debit" class="form-control" placeholder="Debit Balance" value="{{ $AccountLedgers->Debit }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Date" class="col-sm-3 col-form-label">Credit :</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="Credit" name="Credit" placeholder="Credit Balance" value="{{ $AccountLedgers->Credit }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="OpeningBalance" class="col-sm-3 col-form-label">Date :</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="Date" name="Date" value="{{ date('Y-m-d',strtotime($AccountLedgers->Date))}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ClosingBalance" class="col-sm-3 col-form-label">Method :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="Method" name="Method" placeholder="Method" value="{{ $AccountLedgers->Method }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ClosingBalance" class="col-sm-3 col-form-label">Description :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="ClosingBalance" name="Description" placeholder="Description" value="{{ $AccountLedgers->Description }}">
                        </div>
                    </div>

                    <div class=" col-sm-8 offset-md-3">
                        <input type="submit" name="submit" value="Update" id="UpdateBtn" class="btn bg-navy float-right w-25">
                    </div>
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
        $('#UpdateBtn').on('click', function(e) {
            e.preventDefault();

            $.ajax({
                type: ' PUT',
                url: '/acount/ledger',
                data: $('#UpdateAccountLedgerForm').serializeArray(),
                success: function(data) {
                    $('#UpdateAccountLedgerForm')[0].reset();
                    Swal.fire(
                        'Success',
                        data,
                        'success'
                    )
                },
                error: function(data) {
                    console.log('Error While Update Now' + data);
                }
            });
        });
    });
</script>

@endsection