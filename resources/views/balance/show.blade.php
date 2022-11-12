@extends('layouts.app')
@section('content')
<div class="custom__container">
    <section class="form__custom">
        <div class="row">
            <div class="col-md-6 m-auto">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title text-navy">
                            <a href="{{ asset('balance') }}" class="mr-3"><i class="fa-solid fa-circle-arrow-left fs-5 text-navy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back to List"></i></a>
                            Show Balance Information
                        </h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="bg-light">
                                <tr class="bg-light">
                                    <th style="width: 10px">Attribute</th>
                                    <th>Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Date</td>
                                    <td>{{ $Balances->Date}}</td>
                                </tr>
                                <tr>
                                    <td>Opening Balance</td>
                                    <td>{{ $Balances->OpeningBalance }}</td>
                                </tr>
                                <tr>
                                    <td>Closing Balance</td>
                                    <td>{{ $Balances->ClosingBalance }}</td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td> @if($Balances->Status)<b class="text-success">Active</b>
                                        @else <b class="text-danger">Deactive</b> @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection