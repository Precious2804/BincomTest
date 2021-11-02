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
                                    <h4>{{env('APP_NAME')}} (All LGA) </h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-md">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>LGA Name</th>
                                                    <th>State ID</th>
                                                    <th>LGA Description</th>
                                                    <th>LGA ID</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($all_lga as $item)
                                                <tr>
                                                    <td>{{$item->uniqueid}}</td>
                                                    <td>{{$item->lga_name}}</td>
                                                    <td>{{$item->state_id}}</td>
                                                    <td>{{$item->lga_description}}</td>
                                                    <td>{{$item->lga_id}}</td>
                                                    <td>
                                                        <a href="/wards/{{$item->lga_id}}">
                                                            <button class="btn btn-primary">View Wards</button>
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