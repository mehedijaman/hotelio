@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-12">
                {{ Form::Open(array('url' => '/booking','method' => 'POST','class' => 'form-horizontal', 'files' => true)) }}

                <div class="row">
                    <div class="col-md-8 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="col-md-5">
                                    <h3>Hotelio</h3>
                                    <p class="">
                                        Office 149, 450 South Brand Brooklyn
                                        San Diego County, CA 91905, 
                                        USA +1 (123) 456 7891, 
                                        +44 (876) 543 2198
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">

                    </div>
                </div>
                
                {{ Form::close() }}
            </div>
            
        </div>
    </div>
@endsection


