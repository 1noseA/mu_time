@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10 my-5">
        <h3 class="text-center mb-3">ユーザ一覧</h3>
        @foreach ($all_users as $user)
          <div class="card">
            <div class="card-haeder p-3 w-100 d-flex">
              @if ($user->profile_image == null)
                <img src="/img/mu.png" class="rounded-circle" width="50" height="50">
              @else
                <img src="{{ asset('storage/profile_image/' .$user->profile_image) }}" class="rounded-circle" width="50" height="50">
              @endif
              <a href="{{ url('users/' .$user->id) }}">{{ $user->name }}</a>
            
              <div class="ml-3">
              @if (auth()->user()->isFollowed($user->id))
                <div class="px-1 bg-secondary text-light">フォローされています</div>
              @endif
                <div class="ml-2">
                  {{ $user->introduction }}
                </div>
              </div>
              <div class="d-flex justify-content-end flex-grow-1">
                @if (auth()->user()->isFollowing($user->id))
                  <form action="{{ route('unfollow', ['id' => $user->id]) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                  <button type="submit" class="btn btn-un">フォロー解除</button>
                  </form>
                @else
                  <form action="{{ route('follow', ['id' => $user->id]) }}" method="POST">
                    {{ csrf_field() }}
                  <button type="submit" class="btn btn-follow">フォローする</button>
                  </form>
                @endif
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
    <div class="mt-3 d-flex justify-content-center">
      {{ $all_users->links() }}
    </div>
  </div>
@endsection