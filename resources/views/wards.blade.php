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
                                    <h4>{{env('APP_NAME')}} (All Wards in {{$lga_details->lga_name}})</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-md">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Ward ID</th>
                                                    <th>Ward Name</th>
                                                    <th>Ward Description</th>
                                                    <th>LGA ID</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($wards as $item)
                                                <tr>
                                                    <td>{{$item->uniqueid}}</td>
                                                    <td>{{$item->ward_id}}</td>
                                                    <td>{{$item->ward_name}}</td>
                                                    <td>{{$item->ward_description}}</td>
                                                    <td>{{$item->lga_id}}</td>
                                                    <td>
                                                        <a href="/poll_units/{{$item->ward_id}}">
                                                            <button class="btn btn-primary">View Polling Units</button>
                                                        </a>
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
                </div>
            </section>
        </div>
    </div>
</div>

@stop