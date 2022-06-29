@extends('layouts.app')
@section('content')
<div class="custom__container">
    <section class="button__list__show">
        <a href="{{ asset('balance') }}" class="custom__btn__puple">List Balance</a>
    </section>
    <section class="form__custom">
        <div class="row">
            <div class="col-md-6 m-auto">
                <div class="card ">
                    <div class="card-header bg-info ">
                        <h3 class="card-title">Show Information</h3>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="bg-light">
                                <tr class="bg-light">
                                    <th style="width: 10px">Attribute</th>
                                    <th>Value</th>
                                    <th>Progress</th>
                                    <th style="width: 40px">Label</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Date</td>
                                    <td>{{ $Balances->Date}}</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-danger">55%</span></td>
                                </tr>
                                <tr>
                                    <td>Opening Balance</td>
                                    <td>{{ $Balances->OpeningBalance }}</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-warning" style="width: 70%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-warning">70%</span></td>
                                </tr>
                                <tr>
                                    <td>Closing Balance</td>
                                    <td>{{ $Balances->ClosingBalance }}</td>
                                    <td>
                                        <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar bg-primary" style="width: 30%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-primary">30%</span></td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>{{ $Balances->Status }}</td>
                                    <td>
                                        <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar bg-success" style="width: 90%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-success">90%</span></td>
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