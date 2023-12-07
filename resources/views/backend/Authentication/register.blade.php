@extends('backend.layouts.appAuth')
@section('title', 'Sign Up')
@section('content')
    <div class="page-content">
        <div class="form-v4-content">
            <div class="form-left">
                <h2>INFOMATION</h2>
                <p class="text-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Et molestie ac feugiat sed. Diam volutpat commodo.</p>
                <p class="text-2"><span>Eu ultrices:</span> Vitae auctor eu augue ut. Malesuada nunc vel risus commodo
                    viverra. Praesent elementum facilisis leo vel.</p>
                {{-- <div class="form-left-last">
                    <input type="submit" name="account" class="account" value="Have An Account">
                </div> --}}
                <span>Do you have an account?</span>
                <a href="{{ route('login') }}">Sign in</a>
            </div>
            <form class="form-detail" action="{{ route('register.store') }}" method="post" id="myform">
                @csrf
                <h2>REGISTER FORM</h2>
                <div class="form-group">

                    <div class="form-row">
                        <label for="">Full Name</label>
                        <input type="text" name="FullName" id="" class="" required="">
                    </div>
                    @if ($errors->has('FullName'))
                        <small>
                            {{ $errors->first('FullName') }}
                        </small>
                    @endif
                </div>
                <div class="form-row">
                    <label for="EmailAddress">Your Email</label>
                    <input type="text" name="EmailAddress" id="EmailAddress" value="{{ old('EmailAddress') }}" required="">
                    @if ($errors->has('EmailAddress'))
                        <small>
                            {{ $errors->first('EmailAddress') }}
                        </small>
                    @endif
                </div>
               
                    <div class="form-row">
                    <label for="image">Image</label>
                    <input type="file" id="image" value="{{ old('image') }}" class="form-control"
                    placeholder="Image" name="image">
                    @if ($errors->has('image'))
                 <small>
                    {{ $errors->first('image') }}
                </small>
                @endif
                    </div> 
                <label class="control-label mb-10" for="contact_no_en">Contact Number</label>
                <input type="text" class="form-control" required="" id="contact_no_en" name="contact_no_en"
                    value="{{ old('contact_no_en') }}" placeholder="Phone Number">
                @if ($errors->has('contact_no_en'))
                    <small class="d-block text-danger">
                        {{ $errors->first('contact_no_en') }}
                    </small>
                @endif

                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="input-text" required>
                @if ($errors->has('password'))
                    <small>
                        {{ $errors->First('password') }}
                    </small>
                @endif


                <label for="password_confirmation">Comfirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="input-text" required>
                @if ($errors->has('password_confirmation'))
                    <small>
                        {{ $errors->First('password_confirmation') }}
                    </small>
                @endif
                <div class="form-row-last">
                    <input type="submit" name="register" class="register" value="Register">
                </div>
        </div>
        {{-- <div class="form-row  "> --}}

        {{-- </div> --}}



        {{-- <div class="form-checkbox">
            <label class="container">
                <p>I agree to the <a href="#" class="text">Terms and Conditions</a></p>
                <input type="checkbox" name="checkbox">
                <span class="checkmark"></span>
            </label>
        </div> --}}

        </form>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

@endsection
