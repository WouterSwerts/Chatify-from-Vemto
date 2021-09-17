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

        <div class="col-md-4">

            <div class="card">
                <div class="card-header">
                    Chat with USER
                    <button type="button" 
                    class="btn btn-sm btn-outline-primary float-right">
                        Continue
                    </button>
                </div>
                <div class="card-body height3">
                    <ul class="chat-list">
                        <li class="in">
                            <div class="img-fluid chat-img">
                                <img alt="Avtar" src="https://bootdey.com/img/Content/avatar/avatar1.png">
                            </div>
                            <div class="chat-body">
                                <div class="chat-message">
                                    <h5>Jimmy Willams</h5>
                                    <p>Raw denim heard of them tofu master cleanse</p>
                                </div>
                            </div>
                        </li>
                        <li class="out">
                            <div class="img-fluid chat-img">
                                <img alt="Avtar" src="https://bootdey.com/img/Content/avatar/avatar6.png">
                            </div>
                            <div class="chat-body">
                                <div class="chat-message">
                                    <h5>Serena</h5>
                                    <p>Next level veard</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

    </div>

</div>
@endsection
