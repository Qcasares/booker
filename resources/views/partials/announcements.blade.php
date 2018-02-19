@extends('layouts.app')

@section('announcements')
    <div class="uk-container uk-width-auto ">
        <div class="uk-card-small uk-box-shadow-medium uk-border-rounded">
            <div class="uk-card-header" style="background-color: darkslateblue; color:white;">Announcements
                for {{ Auth::user()->name }} <span class="uk-align-right"><a href="#" class="uk-badge">10</a> </span>
            </div>
            <div class="uk-card-body">
                @foreach($data as $d)
                    {{ $d->announcement_text }}
                    <br><span class="uk-divider-small"></span><br>
                @endforeach
            </div>
        </div>
    </div>
@stop


