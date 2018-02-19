@extends('layouts.app')

@section('content')
    <div class="uk-container">

        <div class="row">
            <div class="uk-box-shadow-medium">
                <div class="uk-card uk-card-small ">
                    <div class="uk-card-header uk-card-title uk-card-primary">Rooms</div>
                    <div class="card-body">
                        @foreach($rooms as $r)
                            {{ $r->name }}
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="uk-box-shadow-medium uk-border-rounded">
                <div class="uk-card uk-card-small ">
                    <div class="uk-card-header uk-card-title uk-card-primary">Rooms</div>
                    <div class="card-body">
                        @foreach($announcement as $a)
                            {{ $a->announcement_text }}<br>
                        @endforeach
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-m-6 uk-box-shadow-medium"></div>
                <div class="col-m-6 uk-box-shadow-medium"></div>
            </div>
        </div>
    </div>

@stop
