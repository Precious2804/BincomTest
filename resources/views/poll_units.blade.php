@extends('layout')
@section('content')
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <!-- Main Content -->
        <div class="container" style="padding-top: 80px;">
            <section class="section">
                <div class="section-body">
                    <div style="padding: 20px; text-align:center">
                        <a href="/new_poll/{{$ward_details->ward_id}}">
                            <button class="btn btn-primary"> + Create New Polling Unit</button>
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>{{env('APP_NAME')}} (All Polling Units in {{$ward_details->ward_name}})</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-md">
                                            <thead>
                                                <tr>
                                                    <th>Polling Unit ID</th>
                                                    <th>Ward ID</th>
                                                    <th>LGA ID</th>
                                                    <th>Polling Unit Number</th>
                                                    <th>Polling Unit Name</th>
                                                    <th>Polling Unit Description</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($poll_units as $item)
                                                <tr>
                                                    <td>{{$item->uniqueid}}</td>
                                                    <td>{{$item->ward_id}}</td>
                                                    <td>{{$item->lga_id}}</td>
                                                    <td>{{$item->polling_unit_number}}</td>
                                                    <td>{{$item->polling_unit_name}}</td>
                                                    <td>{{$item->polling_unit_description}}</td>
                                                    <td>
                                                        <a href="/polling_results/{{$item->uniqueid}}">
                                                            <button class="btn btn-primary">View Results</button>
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