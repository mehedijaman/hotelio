@extends('layouts.app')
@section('content')
    <div class="container col-md-12 ">
        <section class="button mb-4">
            <a href="{{ asset('room/create') }}" class="btn btn-info text-capitalize">Add Hotel Informetion</a>
        </section>
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header bg-info">
                        <div class="card-title">
                            <h2 class="card-title">Hotel List</h2>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>Table Columns</th>
                                    <th>Data</th>
                                    <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ( $Rooms as $Room)
                                    <tr class="">
                                        <tr>
                                            <th>id</th>
                                            <td>{{ $Room->id }}</td>
                                        </tr>
                                        <tr>
                                            <th>HoteID</th>
                                            <td>{{ $Room->HoteID }}</td>
                                        </tr>
                                        <tr>
                                            <th>RoomNo</th>
                                            <td>{{ $Room->RoomNo }}</td>
                                        </tr>
                                        <tr>
                                            <th>Floor</th>
                                            <td>{{ $Room->Floor }}</td>
                                        </tr>
                                        <tr>
                                            <th>Type</th>
                                            <td>{{ $Room->Type }}</td>
                                        </tr>
                                        <tr>
                                            <th>Geyser</th>
                                            <td>{{ $Room->Geyser }}</td>
                                        </tr>
                                        <tr>
                                            <th>AC</th>
                                            <td>{{ $Room->AC }}</td>
                                        </tr>
                                        <tr>
                                            <th>Balcony</th>
                                            <td>{{ $Room->Balcony }}</td>
                                        </tr>
                                        <tr>
                                            <th>Bathtub</th>
                                            <td>{{ $Room->Bathtub }}</td>
                                        </tr>
                                        <tr>
                                            <th>HiComode</th>
                                            <td>{{ $Room->HiComode }}</td>
                                        </tr>
                                        <tr>
                                            <th>Locker</th>
                                            <td>{{ $Room->Locker }}</td>
                                        </tr>
                                        <tr>
                                            <th>Freeze</th>
                                            <td>{{ $Room->Freeze }}</td>
                                        </tr>
                                        <tr>
                                            <th>Internet</th>
                                            <td>{{ $Room->Internet }}</td>
                                        </tr>
                                        <tr>
                                            <th>Intercom</th>
                                            <td>{{ $Room->Intercom }}</td>
                                        </tr>
                                        <tr>
                                            <th>TV</th>
                                            <td>{{ $Room->TV }}</td>
                                        </tr>
                                        <tr>
                                            <th>Wardrobe</th>
                                            <td>{{ $Room->Wardrobe }}</td>
                                        </tr>
                                        <tr>
                                            <th>Price</th>
                                            <td>{{ $Room->Price }}</td>
                                        </tr>
                                        <tr>
                                            <th>AdditionalFeatures</th>
                                            <td>{{ $Room->AdditionalFeatures }}</td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td>{{ $Room->Status }}</td>
                                        </tr>
                                        <tr class="bg-danger text-light">
                                            <th>Action</th>
                                            <th></th>
                                            <td class="">
                                                {{-- <svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="invoice-row-5036-send-icon" class="cursor-pointer feather feather-send"><line data-v-9a6e255c="" x1="22" y1="2" x2="11" y2="13"></line><polygon data-v-9a6e255c="" points="22 2 15 22 11 13 2 9 22 2"></polygon></svg> --}}
    
                                                <svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="invoice-row-5036-preview-icon" class="mx-1 feather feather-eye"><path data-v-9a6e255c="" d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle data-v-9a6e255c="" cx="12" cy="12" r="3"></circle>
                                                </svg>
    
                                                <span class="dropdown">
                                                    <button class="" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle text-body feather feather-more-vertical"><circle data-v-9a6e255c="" cx="12" cy="12" r="1"></circle><circle data-v-9a6e255c="" cx="12" cy="5" r="1"></circle><circle data-v-9a6e255c="" cx="12" cy="19" r="1"></circle>
                                                    </svg></button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                        <li>
                                                            <a class="dropdown-item" href="/room/{{ $Room->id }}/edit"  style="letter-spacing:3px; font-family:'Courier New', Courier, monospace ;">
                                                                <i class="fa-regular fa-pen-to-square mr-2"></i>Edit
                                                            </a>
                                                        </li>
                                                        {{-- {!! Form::open(["url" => "/room/{{ $Room->id }}/edit" , 'method' => 'GET']) !!}
                                                            <i class="fa-regular fa-pen-to-square mr-2">
                                                                <input type="submit" name="submit" value="Edit" style="letter-spacing:3px; font-family:'Courier New', Courier, monospace">
                                                            </i>
                                                        {!! Form::close() !!} --}}
                                                        {!! Form::open(['url' => '/room/'.$Room->id, 'method' => 'DELETE']) !!}
                                                            <i class="fa-regular fa-trash-can mr-2" style="margin-left:10%;">
                                                                <input type="submit" name="submit" value=" Delete" style="letter-spacing:3px; font-family:'Courier New', Courier, monospace ;" class="bg-danger pt-md-3 pb-md-3">
                                                            </i>
                                                        {!! Form::close() !!}
                                                    </ul>
                                                </span>
                                            </td>
                                        </tr>                                       
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