@extends('layouts.register')

@section('content')
    <div class="slides slide-one">

      <div class="container">
       
        <h3>Enter Your Information</h3></div>

        <form method="POST" action="{{ route('users.store') }}">
            @csrf
            @method('POST')

            <div class="container">

            <fieldset>
                <div class="small-field">
                    <label>First Name</label>
                    <input id="first-name" type="text" class="required @error('first_name') is-invalid @enderror"
                           name="first_name" value="{{ old('first_name') }}" autocomplete="first_name" autofocus>
                    @error('first_name')
                    <span class="invalid-feedback err" role="alert" style="display: block;">
                   <strong>{{ $message }}</strong>
                   </span>
                    @enderror
                </div>


                <div class="small-field">
                    <label>Last Name</label>
                    <input id="last-name" type="text" class="required @error('last_name') is-invalid @enderror"
                           name="last_name" value="{{ old('last_name') }}" autocomplete="last_name" autofocus>
                    @error('last_name')
                    <span class="invalid-feedback err" role="alert" style="display: block;">
                   <strong>{{ $message }}</strong>
                </span>
                    @enderror
                </div>


            </fieldset>
            <fieldset>
                <label>Email</label>
                <input id="email" type="text" class="@error('email') is-invalid @enderror"
                       name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert" style="display: block;">
                          <strong>{{ $message }}</strong>
            </span>
                @enderror

            </fieldset>

            <fieldset>
                <label>Street Address</label>
                <input id="street" type="text" class="required @error('name') is-invalid @enderror"
                       name="street" value="{{ old('street') }}" autocomplete="street"
                       autofocus>
                @error('street')
                <span class="invalid-feedback street" role="alert" style="display: block;">
                                        <strong>{{ $message }}</strong>
                </span>
                @enderror
            </fieldset>

            <fieldset>
                <div class="small-field third">
                    <label>City</label>
                    <input id="city" type="text" class="required @error('city') is-invalid @enderror"
                           name="city" value="{{ old('city') }}" autocomplete="city" autofocus>
                    @error('city')
                    <span class="invalid-feedback street" role="alert" style="display: block;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <div class="small-field third">
                    <label>State</label>
                      <input id="state" type="text" class="required @error('state') is-invalid @enderror"
                           name="state" value="{{ old('state') }}" autocomplete="state" autofocus>
                  
                    @error('state')
                    <span class="invalid-feedback zipcode" role="alert" style="display: block;">
                                        <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                </div>
                <div class="small-field third">
                    <label>Zipcode</label>
                    <input id="zipcode"  type="text" maxlength="5"
                           class="required @error('zipcode') is-invalid @enderror onlynumber" name="zipcode"
                           value="{{ old('zipcode') }}" autocomplete="zipcode" autofocus>
                    @error('zipcode')
                    <span class="invalid-feedback zipcode" role="alert" style="display: block;">
                                        <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                </div>
            </fieldset>

            <fieldset class="phone-fileds">
                <label>Phone</label>
                <div class="phone-one phonerr">
                    <input name="phone" class="required onlynumber" type="text" maxlength="10" value="{{ old('phone') }}">
                    @error('phone')
                    <span class="invalid-feedback err" role="alert" style="display: block;">
                                <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </fieldset>

            
            
          
            </div>
            <div class="button-div">
               <div class="container">
                <button type="submit" id="step-one" class="btn-orange btn btn-primary">Submit <img
                        src="{{ asset('images/arrow-right.png') }}"></button></div>
            </div>
        </form>
    </div>
@endsection

