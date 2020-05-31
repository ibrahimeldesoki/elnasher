@extends('dashboard.layout')
@section('title',  __('Edit User'))
@section('page_css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('settings')
<div class="col s2 m6 l6 right-align">
    <a class="btn mb-1 waves-effect waves-light" href="{{route('all_users')}}">{{__('Back') }}
        <i class="material-icons right">keyboard_return</i>
    </a>
</div>
@endsection
@section('middle_content')
@if ($message = Session::get('success'))
<div class="card-alert card gradient-45deg-green-teal">
    <div class="card-content white-text">
        <p>
        <i class="material-icons">check</i> {{ $message }}</p>
</div>
    <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
@endif
@if($errors->any())
      <div class="card-alert card red lighten-5 card-content red-text">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="card-body">
                    <form method="POST" action="{{route('update_user',$user->id)}}">
                        @csrf
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
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                            </div>
                        </div>
                        <div class="input-name row">
                             <label for="mobile">{{ __('User Mobile') }}</label>
                            <input value="{{$user->mobile}}"  name="mobile" id="mobile" type="text" class="validate" placeholder="{{ __('Add User Mobile') }}">
                        </div>
                        <!-- <div class="input-name row">
                            <input  value="{{$user->nationalId}}" name="nationalId" id="nationalId" type="text" class="validate" placeholder="{{ __('Add nationalId') }}">
                            <label for="nationalId">{{ __('User National Id') }}</label>
                        </div> -->
                        <div class="row ">
                            <label>{{ __('Country') }}</label>
                            <select class="no-autoinit select2" name="country_id">
                                <option value="" disabled selected>{{ __('Choose Country') }}</option>
                                @foreach($countries as $country)
                                <option value="{{$country->id}}"@if($country->id == $user->city->country->id) selected @endif
                                        class="circle"> {{$country->name}} </option>
                                @endforeach
                            </select>
                         </div>
                        <div class="row ">
                        <label>{{ __('City') }}</label>
                            <select class="no-autoinit select2" name="city_id">
                                <option value="" disabled selected>{{ __('Choose City') }}</option>
                                @foreach($cities as $city)
                                    <option value="{{$city->id}}"@if($city->id == $user->city->id) selected @endif
                                    class="circle"> {{$city->name}} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="item-category row">
                            <label>{{ __('Role') }}</label>
                            <select class="no-autoinit select2" name="role_id">
                                <option value="" disabled selected>{{ __('Choose Role') }}</option>
                                @foreach($roles as $role)
                                        <option  value="{{$role->id}}"   class="circle"{{$role->id==$user->role_id?'selected':''}}> {{$role->name}} </option>
                                @endforeach
                            </select>
                         </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn cyan waves-effect waves-light right">
                                    {{ __('Edit') }}
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

        </div>
    </div>
</div>
@section('page_js')
<script src="{{asset('resources/js/studium-add.js?v=2')}}" type="text/javascript"></script>
<script src="{{asset('resources/js/city.js')}}" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
<script src="{{asset('resources/js/select.js')}}"></script>
@endsection
@endsection
