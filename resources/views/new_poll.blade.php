@extends('layout')
@section('content')
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <!-- Main Content -->
        <div class="container" style="padding-top: 80px;">
            <section class="section">
                <div class="section-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>New Polling Unit - Answer to Question 3 starts</h4>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            @if(Session::get('done'))
                                                <div class="alert alert-success">
                                                    {{Session::get('done')}}
                                                </div>
                                            @endif
                                            <form action="{{route('add_unit')}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="ward_id" value="{{$ward_details->ward_id}}">
                                                <input type="hidden" name="lga_id" value="{{$ward_details->lga_id}}">
                                                <div class="row">
                                                    <div class="form-group col-lg-6">
                                                        <label for="">Name of Unit</label>
                                                        <input type="text" name="polling_unit_name" class="form-control">
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label for="">Polling Unit Description:</label>
                                                        <input type="text" name="polling_unit_description" class="form-control">
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label for="">Longitude:</label>
                                                        <input type="text" name="long" class="form-control">
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label for="">Latitude:</label>
                                                        <input type="text" name="lat" class="form-control">
                                                    </div>

                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary btn-lg">Click to Proceed</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>


@stop