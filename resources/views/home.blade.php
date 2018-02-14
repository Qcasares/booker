@extends('layouts.app')

@section('navigation')
  @include('partials.navigation')
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                        </div>
                    @endif
                    @yield('announcements')
                    @yield('bookings')
                    @yield('availability')
                    @yield('upcoming')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
