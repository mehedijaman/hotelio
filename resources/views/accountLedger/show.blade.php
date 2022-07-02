@extends('layouts.app')
@section('content')
<div class="custom__container">
    <section class="form__custom">
        <div class="row">
            <div class="col-md-6 m-auto">
                <div class="card card-primary ">
                    <div class="card-header">
                        <h3 class="card-title text-navy">
                            <a href="{{ asset('acount/ledger') }}" class="mr-3"><i class="fa-solid fa-circle-arrow-left fs-5 text-navy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back to List"></i></a>
                            Show Account Ledger
                        </h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="bg-light">
                                <tr class="bg-light">
                                    <th>Attribute</th>
                                    <th>Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Debit Balance</td>
                                    <td>{{ $AccountLedger->Debit }}</td>
                                </tr>
                                <tr>
                                    <td>Credit Balance</td>
                                    <td>{{ $AccountLedger->Credit }}</td>
                                </tr>
                                <tr>
                                    <td>Date</td>
                                    <td>{{ $AccountLedger->Date }}</td>
                                </tr>
                                <tr>
                                    <td>Method</td>
                                    <td> {{ $AccountLedger->Method }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td>{{ $AccountLedger->Description }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>

@endsection