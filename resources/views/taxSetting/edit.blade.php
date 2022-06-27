@extends('layouts.app')
@section('content')
    <div class="container py-5">
        {{-- <section class="button__list__show">
            <a href="{{ asset('taxSetting') }}" class="btn btn-info text-capitalize">List TaxSetting</a>
        </section> --}}
        <div class="row">
            <div class="col-md-7 m-auto">
                <div class="card card-primary">
                    <div class="card-header">
                        <h2 class="card-title">
                            <a href="{{ asset('taxSetting') }}" class="mr-3"><i class="fa-solid fa-circle-arrow-left fs-5 text-navy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back to List"></i></a> 
                            Update taxSetting
                        </h2>
                    </div>
                    {{ Form::open(array('url' => '/taxSetting/'.$TaxSetting->id, 'method' => 'PATCH','class' => 'form-horizantal', 'files' => true)) }}
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="Name" class="form-label col-md-3">Name:</label>
                                <div class="col-md-8">
                                    <input type="text" name="Name" class="form-control" value="{{ $TaxSetting->Name }}"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Parcent" class="form-label col-md-3">Parcent:</label>
                                <div class="col-md-8">
                                    <input type="number" name="Parcent" class="form-control" value="{{ $TaxSetting->Parcent }}"> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Status" class="form-label col-md-3">Status:</label>
                                <div class="col-md-8">
                                    <div class="form-check form-check-inline ml-1">
                                        <input type="radio" class="form-check-input" name="Status" value="1">
                                        <label for="" class="form-check-label">
                                            Yes
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline ml-4">
                                        <input type="radio" class="form-check-input" name="Status" value="0">
                                        <label for="" class="form-check-label">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <input type="submit" name="submit" id="" class="btn bg-navy float-right w-25" value="Update">
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection



