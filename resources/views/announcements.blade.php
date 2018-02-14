@extends('home')

@section('announcements')
  @foreach (BBS\Models\Announcement::all() as $announcement)
    <div class="flex-box">  {{ $announcement->announcement_text }} </div>
  @endforeach
@endsection

@section('bookings')
  {{ "BOOINGS" }}
@endsection

@section('availability')
  {{ 'AVAILABILITY' }}
@endsection

@section('upcoming')
  {{ 'UPCOMING' }}
@endsection
