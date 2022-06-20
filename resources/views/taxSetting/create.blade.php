@extends('layouts.app')
@section('content')
    <div class="custom__container">
        <section class="button__list__show">
            <a href="{{ asset('taxSetting') }}" class="custom__btn__puple">List TaxSetting</a>
        </section>
        <section class="form__custom">
            <div class="row">
                <div class="col-md-6 m-auto custom__add__tb__bg">
                    <div class="custom__add__heading text-center">
                        <h2 class="">Add New TaxSetting</h5>
                    </div>
                    <div class="p-4">
                        {{!! Form::open(array('url' => '/taxSetting', 'method' => 'post', 'files' => true)) !!}}
                        <div class="row mb-3 mt-3">
                            <label for="Name" class="form-label col-md-2">Name:</label>
                            <div class="col-md-8">
                                <input type="text" name="Name" class="form-control"> 
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label for="Parcent" class="form-label col-md-2">Parcent:</label>
                            <div class="col-md-8">
                                <input type="number" name="Parcent" class="form-control"> 
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label for="Status" class="form-label col-md-2">Status:</label>
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
                        <div class="col-md-3 ml-auto">
                            <div class="button__invoice">
                                <input type="submit" name="submit" id="" class="invioce__add__btn">
                            </div>
                        </div>
                        {{!! Form::close() !!}}
                    </div>
                   
                </div>
            </div>
        </section>
    </div>

@endsection



