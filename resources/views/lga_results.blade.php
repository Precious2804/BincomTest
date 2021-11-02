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
                                    <h4>Total Polling Results by Local Government</h4>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            @if(Session::get('not_found'))
                                                <div class="alert alert-danger">
                                                    {{Session::get('not_found')}}
                                                </div>
                                            @endif
                                            <form action="{{route('fetch_results')}}" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="">Choose the LGA</label>
                                                    <select name="lga_id" id="" class="form-control custom-select">
                                                        <option value="">Choose the LGA</option>
                                                        @foreach($all_lga as $item)
                                                        <option value="{{$item->lga_id}}">{{$item->lga_name}} ({{$item->lga_description}})</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary btn-lg">Click to Proceed</button>
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