@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <section class="button mb-4">
        <a href="{{ asset('accountLedger/create') }}" class="custom__btn__puple">Add AccountLedger</a>
    </section>
    <div class="row">
        <div class="col-12">
            <div class="card ">
                <div class="card-header bg-teal">
                    <h3 class="card-title">Responsive Hover Table</h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table  text-nowrap">
                        <thead>
                            <tr class="bg-light">
                                <th>Debit</th>
                                <th>Credit</th>
                                <th>Date</th>
                                <th>Method</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            @foreach ($AccountLedgers as $AccountLedger)
                            <tr>
                                <td>{{$AccountLedger->Debit}}</td>
                                <td>{{$AccountLedger->Credit}}</td>
                                <td>{{$AccountLedger->Date}}</td>
                                <td>{{$AccountLedger->Method}}</td>
                                <td>{{$AccountLedger->Description}}</td>
                                <td>

                                    <a class=" btn" type="button" aria-haspopup="true" aria-expanded="false" href="/accountLedger/{{$AccountLedger->id}}">
                                        <svg dat a-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="invoice-row-5036-preview-icon" class="mx-1 feather feather-eye">
                                            <path data-v-9a6e255c="" d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle data-v-9a6e255c="" cx="12" cy="12" r="3"></circle>
                                        </svg>
                                    </a>
                                    <span class="dropdown">
                                        <button class="" type="button" class="align-middle text-body feather feather-more-vertical" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <circle data-v-9a6e255c="" cx="12" cy="12" r="1"></circle>
                                                <circle data-v-9a6e255c="" cx="12" cy="5" r="1"></circle>
                                                <circle data-v-9a6e255c="" cx="12" cy="19" r="1"></circle>
                                            </svg></button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li class=""><a class=" btn btn-primary btn-sm pr-4" href="/accountLedger/{{$AccountLedger->id}}/edit"><i class="fa-regular fa-pen-to-square mr-2"></i></i>Edit</a></li>

                                            <li class="">
                                                {{ Form::open(['url' => '/accountLedger/'.$AccountLedger->id,'method' => 'DELETE'])}}
                                                <input type="submit" name="submit" value="Delete" class="  btn btn-sm btn-danger" style=" width:85px">
                                                {{ Form::close()}}
                                            </li>
                                        </ul>
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection