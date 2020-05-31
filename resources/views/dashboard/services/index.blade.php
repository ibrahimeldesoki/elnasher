@extends('dashboard.layout')
@section('title', __('Services'))
@section('page_css')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/data-tables/css/jquery.dataTables.min.css')}}">
@endsection
@section('settings')
<div class="col s2 m6 l6 right-align">
    <a class="btn mb-1 waves-effect waves-light" href="{{route('services.create')}}">{{__('ADD NEW') }}
        <i class="material-icons right">add</i>
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

<table id="users" class="display">
            <thead>
                <tr>
                    <th>{{ "#" }}</th>
                    <th>{{__('Name')}}</th>
                    <th>{{__('Description')}}</th>
                    <th>{{__('Settings')}}</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $service->name}}</td>
                    <td>{{ $service->description}}</td>
                    <td>
                        <a  href="{{route('services.edit',$service->id)}}">
                            <i class="material-icons">edit</i>
                        </a>
                        <a  class="delete-with-confirmation" href="{{route('delete_service',$service->id)}}" data-method="delete">
                            <i class="material-icons pink-text delete-with-confirmation">clear</i>
                        </a>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @section('page_js')
        <script src="{{asset('js/users.js')}}" type="text/javascript"></script>
        @endsection
        @endsection


