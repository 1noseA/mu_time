@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header text-center">プロフィール編集</div>

        <div class="card-body">
          <form method="POST" action="{{ url('users/' .$user->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group row align-items-center">
              <label for="profile_image" class="col-md-4 col-form-label text-md-right">{{ __('Profile Image') }}</label>

              <div class="col-md-6 d-flex align-items-center">
                @if ($user->profile_image == null)
                  <img src="/img/mu.png" class="rounded-circle" width="80" height="80">
                @else
                  <img src="{{ asset('storage/profile_image/' .$user->profile_image) }}" class="mr-2 rounded-circle" width="80" height="80" alt="profile_image">
                @endif
                <input type="file" name="profile_image" class="@error('profile_image') is-invalid @enderror" autocomplete="profile_image">

                @error('profile_image')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

              <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                @error('name')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

              <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

                @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="introduction" class="col-md-4 col-form-label text-md-right">{{ __('Introduction') }}</label>

              <div class="col-md-6">
                <input id="introduction" type="text" class="form-control @error('introduction') is-invalid @enderror" name="introduction" value="{{ $user->introduction }}" required autocomplete="introduction" autofocus>

                @error('introduction')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-main">更新する</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection