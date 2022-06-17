@extends('layouts.app')
@section('content')
    
    <div class="custom__container">
        <section class="button mb-4">
            <a href="{{ asset('bankLedger/create') }}" class="custom__btn__puple">Add BankLedger</a>
        </section>
        <section class="custom__table">
            <table class="table table-hover text-center custom__index__table__bg" id="myTable">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>BankID</th>
                        <th>Deposit</th>
                        <th>Withdraw</th>
                        <th>Date</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($invoices as $invoice)
                        <tr>
                            <td>{{$invoice->id}}</td>
                            <td>1</td>
                            <td>1</td>
                            <td>Nogot</td>
                            <td>455</td>
                            <td>48952</td>
                            <td>489524822</td>
                            <td>
                                
                            </td>
                        </tr>
                    @endforeach --}}
                        <tr>
                            <td>1</td>
                            <td>Nogot</td>
                            <td>48952</td>
                            <td>489524822</td>
                            <td>489524822</td>
                            <td>489524822</td>
                            <td>
                                <svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="invoice-row-5036-send-icon" class="cursor-pointer feather feather-send"><line data-v-9a6e255c="" x1="22" y1="2" x2="11" y2="13"></line><polygon data-v-9a6e255c="" points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>

                                <svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="invoice-row-5036-preview-icon" class="mx-1 feather feather-eye"><path data-v-9a6e255c="" d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle data-v-9a6e255c="" cx="12" cy="12" r="3"></circle></svg>
                                <svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle text-body feather feather-more-vertical"><circle data-v-9a6e255c="" cx="12" cy="12" r="1"></circle><circle data-v-9a6e255c="" cx="12" cy="5" r="1"></circle><circle data-v-9a6e255c="" cx="12" cy="19" r="1"></circle>
                                </svg>
                            </td>
                        </tr>
                    </tbody>
                <tfoot>

                </tfoot>
            </table>
        </section>
    </div>
@endsection