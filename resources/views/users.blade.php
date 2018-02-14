@extends('main')

@section('content')
  <div class="card">
      @foreach ($user as $u)
        <div> {{ $us->fname; }}
        </div>
      @endforeach
      </div>
  </div>
@endsection
