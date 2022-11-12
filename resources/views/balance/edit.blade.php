@extends('layouts.app')
@section('content')
<div class="custom__container">
    <div class="row">
        <div class="col-md-7 m-auto">
            @if (Session::get('Update'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                <h5><i class="icon fas fa-check"></i> Update!</h5>
                {{Session::get('Update')}}
            </div>
            @endif
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title text-navy">
                        <a href="{{ asset('balance') }}" class="mr-3"><i class="fa-solid fa-circle-arrow-left fs-5 text-navy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back to List"></i></a>
                        Edit Balance
                    </h3>
                </div>
                {{Form::open(array('url' => '/balance/'.$Balances->id,'method' => 'PATCH'))}}
                <div class="card-body">
                    <div class="form-group row">
                        <label for="AccountID" class="form-label col-md-3 mx-5">Account ID:</label>
                        <div class="col-md-8 ">
                            <select type="number" name="AcountID" id="" class="form-select">
                                <option value="">Select Account No</option>
                                @foreach ($AccountLedgers as $AccountLedger)
                                @if($Balances->AcountID == $AccountLedger->id)
                                <option value="{{ $AccountLedger->id }}" selected>{{ $AccountLedger->id }}</option>
                                @else
                                <option value="{{ $AccountLedger->id }}">{{ $AccountLedger->id }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Date" class="col-sm-4 col-form-label">Date :</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="Date" name="Date" value="{{ date('m-d-Y',strtotime($Balances->Date))}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="OpeningBalance" class="col-sm-4 col-form-label ">Opening Balances :</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="OpeningBalance" name="OpeningBalance" value="{{$Balances->OpeningBalance}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ClosingBalance" class="col-sm-4 col-form-label">Closing Balance :</label>
                        <div class="col-sm-8">
                            <input type="numner" class="form-control" id="ClosingBalance" name="ClosingBalance" value="{{$Balances->ClosingBalance}}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name text-black col-sm-4 ">Status :</div>
                        <div class="Status">
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">Yes
                                    <input type="radio" name="Status" value="1" @if ($Balances->Status) checked @endif>
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">No
                                    <input type="radio" name="Status" value="0" @if (!$Balances->Status) checked @endif>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class=" col-sm-8 offset-md-4">
                        <input type="submit" name="submit" value="Update" id="" class="btn bg-navy float-right w-25">
                    </div>
                </div>
                <div class="card-footer">
                </div>
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