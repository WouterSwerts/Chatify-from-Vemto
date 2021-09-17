@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>    
                        Welcome {{ $user->name }} at {{ $user->email }},
                    </p>    
                    <p>
                        Enjoy your stay.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="favorite-list-item">
                <img src="{{ asset('/storage/'.config('chatify.user_avatar.folder').'/'.$user->avatar) }}" style="width: 250px;height:250px" alt="test">
                <div data-id="{{ $user->id }}" data-action="0" class="avatar av-m" 
                    style="background-image: url('{{ asset('/storage/'.config('chatify.user_avatar.folder').'/'.$user->avatar) }}');">
                </div>
                <p>{{ strlen($user->name) > 5 ? substr($user->name,0,6).'..' : $user->name }}</p>
            </div>
        </div>
    </div>

</div>
@endsection
