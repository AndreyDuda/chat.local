@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-4">
            <div class="btn-toolbar justify-content-center" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group mr-2" role="group" aria-label="First group">
                    <a type="button" class="btn btn-secondary" href="#one">Example Component</a>
                    <a type="button" class="btn btn-secondary" href="#two">Vue -> Blade</a>
                    <a type="button" class="btn btn-secondary" href="#three">Vue -> Blade</a>
                    <a type="button" class="btn btn-secondary" href="#four">Chart</a>
                    <a type="button" class="btn btn-secondary" href="#five">Pie</a>
                    <a type="button" class="btn btn-secondary" href="#six">Random</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="own-carausel own-them mt-5">
                <div class="row m-2" data-hash="1" id="one">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body" style="min-height: 720px;">
                                <h2 class="text-center">#1 Example component</h2>
                                <example-component></example-component>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-2" data-hash="2" style="display:block" id="two">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body" style="min-height: 720px;">
                                <h2 class="text-center">#2 передача данных в Vue из Blade</h2>
                                <prop-component :urldata="{{json_encode($url_data)}}"></prop-component>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-2" data-hash="3" id="three" style="display:block">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body" style="min-height: 720px;">
                                <h2 class="text-center">#3 Ajax</h2>
                                <ajax-component></ajax-component>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-2" data-hash="4" id="four" style="display:block">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body" style="min-height: 720px;">
                                <h2 class="text-center">#4 chart</h2>
                                <chart-component></chart-component>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-2" data-hash="4" id="five" style="display:block">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body" style="min-height: 720px;">
                                <h2 class="text-center">#5 Pie</h2>
                                <pie-component></pie-component>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-2" data-hash="4" id="six" style="display:block">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body" style="min-height: 720px;">
                                <h2 class="text-center">#5 Random</h2>
                                <random-component></random-component>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
