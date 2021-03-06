@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center my-5">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header text-center">編集</div>

        <div class="card-body">
          <form method="POST" action="{{ route('tweets.update', $tweets->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group row mb-0">
              <div class="col-md-12 p-3 w-100 d-flex">
                @if ($user->profile_image == null)
                  <img src="/img/mu.png" class="rounded-circle" width="50" height="50">
                @else
                  <img src="{{ asset('storage/profile_image/' .$user->profile_image) }}" class="mr-2 rounded-circle" width="50" height="50" alt="profile_image">
                @endif
                <div class="ml-2 d-flex flex-column">
                  <a href="{{ url('users/' .$user->id) }}">{{ $user->name }}</a>
                </div>
              </div>
              <div class="col-md-12">
                <textarea class="form-control @error('text') is-invalid @enderror" name="text" required autocomplete="text" rows="4">{{ old('text') ? : $tweets->text }}</textarea>

                @error('text')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="form-group row mb-0">
              <div class="col-md-12 text-right">
                <p class="mb-4 text-danger">140文字以内</p>
                  <button type="submit" class="btn btn-main">
                    ツイートする
                  </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection