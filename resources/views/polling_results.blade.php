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
                                    <h4>New Result - Answer to Question 3 completed</h4>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            @if(Session::get('done'))
                                            <div class="alert alert-success">
                                                {{Session::get('done')}}
                                            </div>
                                            @endif
                                            <form action="{{route('add_result')}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="polling_unit_id" value="{{$unit_details->polling_unit_id}}">
                                                <div class="row">
                                                    <div class="form-group col-lg-6">
                                                        <label for="">Select the Party</label>
                                                        <select name="party_abbreviation" id="" class="form-control">
                                                            <option value="">Choose the Party</option>
                                                            @foreach($all_party as $party)
                                                            <option value="{{$party->partyid}}">{{$party->partyid}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label for="">Score:</label>
                                                        <input type="text" name="party_score" class="form-control" placeholder="Input the Score" id="">
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


                            <div class="card">
                                <div class="card-header">
                                    <h4>{{env('APP_NAME')}} (Polling Results in unit {{$unit_details->polling_unit_name}}) - Answer to Question 1</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-md">
                                            <thead>
                                                <tr>
                                                    <th>Result ID</th>
                                                    <th>Polling Unit ID</th>
                                                    <th>Party</th>
                                                    <th>Party Score</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($polling_results as $item)
                                                <tr>
                                                    <td>{{$item->result_id}}</td>
                                                    <td>{{$item->polling_unit_uniqueid}}</td>
                                                    <td>{{$item->party_abbreviation}}</td>
                                                    <td>{{$item->party_score}}</td>
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