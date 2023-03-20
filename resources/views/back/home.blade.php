@extends('layout.back.app')
@section('content')
    @if (Session::has('Success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('Success') }}
        </div>
    @endif
    <a href="{{ route('admin.logout') }}"class="dropdown-item"><i
        class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>{{ __('logout') }}</a>
        <a href="{{ route('admin.logout') }}>{{ __('logout') }}</a>
    
@endsection
