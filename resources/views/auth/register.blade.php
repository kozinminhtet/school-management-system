@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h2 class="text-center mb-4">{{ __('Register') }}</h2>
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">{{ __('Name') }}</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" autocomplete="email">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Select Your Role</label>
                        @foreach ($roles as $role)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="role_id" value="{{ $role->id }}"
                                    id="role{{ ucfirst($role->name) }}" {{ old('role_id') == $role->id ? 'checked' : '' }}>
                                <label class="form-check-label" for="role{{ ucfirst($role->name) }}">
                                    {{ ucfirst($role->name) }}
                                </label>
                            </div>
                        @endforeach
                        @error('role_id')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" autocomplete="new-password">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            autocomplete="new-password">
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
