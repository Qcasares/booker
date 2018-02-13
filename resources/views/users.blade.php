@extends('main')

@section('content')
  <div class="card">
      @foreach ($users as $user)
        <div> {{ $users->fname; }}
        </div>
      @endforeach
      </div>
  </div>
@endsection
