@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10 my-5">
        <h3 class="text-center mb-3">ユーザー一覧</h3>
        @foreach ($users as $user)
          <div class="card p-3">
            @if ($user->profile_image == null)
              <img src="/img/mu.png" class="rounded-circle" width="50" height="50">
            @else
              <img src="{{ $user->profile_image }}" class="rounded-circle" width="50" height="50">
            @endif
              <a href="{{ url('users/' .$user->id) }}">{{ $user->name }}</a>
          </div>
        @endforeach
      </div>
    </div>
    <div class="mt-3 justify-content-center">
      {{ $users->links() }}
    </div>
  </div>
@endsection