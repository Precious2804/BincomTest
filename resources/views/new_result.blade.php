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
                                    <h4>New Polling Unit & Result</h4>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form action="{{route('add_result')}}" method="POST">
                                                @csrf
                                                <div class="row">
                                                    <div class="form-group col-lg-6">
                                                        <label for="">Select the Party</label>
                                                        <select name="party_name" id="" class="form-control">
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
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>


@stop