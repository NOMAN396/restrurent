@extends('backend.layouts.appAuth')
@section('content')
    <div class="page-content">
        <div class="form-v5-content">
            <form class="form-detail" action="{{ route('login.check') }}" method="post">
                @csrf
                
                <h2>Please Log In</h2>

                <div class="form-row">
                    <label for="username">Your Email</label>
                    <input type="text" name="username" id="username" class="input-text" placeholder="Your Email"
                        value="{{ old('username') }}"/>
                    @if ($errors->has('username'))
                        <small>
                            {{ $errors->first('username') }}
                        </small>
                    @endif
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="form-row">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="input-text" placeholder="Your Password"
                        @if ($errors->has('password')) required />
<small>{{ $errors->first('password') }} </small> @endif
                        <i class="fas fa-lock"></i>
                </div>
                <div class="form-row-last">
                    <input type="submit" name="log in" class="register" value="Sign in" />
                </div>
            </form>
        </div>
    </div>
@endsection
