
@extends('dashboard.layout')
@section('title',  __('Edit  '.$service->name . ' Service'))
@section('page_css')
<style>
    .form__group {
        position: relative;
        padding: 15px 0 0;
        margin-top: 10px;
      }

      .form__field {
        font-family: inherit;
        width: 100%;
        height: 200px;
        border: 0;
        border-bottom: 1px solid #d2d2d2;
        outline: 0;
        font-size: 16px;
        color: #212121;
        padding: 7px 0;
        background: transparent;
        transition: border-color 0.2s;
      }

</style>
@endsection
@section('settings')
<div class="col s2 m6 l6 right-align">
    <a class="btn mb-1 waves-effect waves-light" href="{{route('services.index')}}">{{__('Back') }}
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
                    <form method="POST" action="{{route('services.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="input-name col s12">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Service Name') }}</label>
                            <div class="col-md-6">
                                <input value="{{ $service->name}}" id="name" type="text" class="form-control" name="name" placeholder="add service name" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="input-name col s12">
                            <label for="serviceDescription">{{ __('Service Description') }}</label>
                            <textarea id="message" name="description" class="form__field" placeholder="add service description" rows="6" cols="20" ></textarea>
                         </div>
                        <div class="form-group row">
                            <div class="row">
                                <div class ="col s6 ">
                                         <img   id="output" src="{{asset('images/services/'.$service->image)}}" class=""  style="max-width: 100px">
                                </div>
                                <div class="btn float-left col s2">
                                   <span>{{ __('Change Image') }}</span>
                                   <input type="file" name="image" accept="image/*" class="upload-preview">
                                </div>


                    </div>

                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn cyan waves-effect waves-light right">
                                    {{ __('ADD') }}
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
<script  type="text/javascript">
    $('.upload-preview').change(function() {
        document.getElementById('output').src = window.URL.createObjectURL(this.files[0])
    });

</script>

@endsection
@endsection
