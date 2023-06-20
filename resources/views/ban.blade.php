@extends('layouts.app')
@section('title', __('Unbans Accounts'))
@section('content')
    <div class="container  ">
        <div class="row justify-content-center">
            <div class="col-md-8 mb-5">
                <div class="card mt-5 mx-4">
                    <div class="card-header text-white 
                    @if(Auth::check() && Auth::user()->isNotBanned())
                    bg-success
                    @else
                    bg-danger
                    @endif
                    ">
                        @if(Auth::check() && Auth::user()->isNotBanned())
                        <h3 class="card-title">🔒Account, Ok.</h3>
                        @else
                        <h3 class="card-title">Account Banned 🔐</h3>
                        @endif
                            
                    </div>
                    <div class="card-body">

                        
                        @if(Auth::check() && Auth::user()->isNotBanned())
                        <h2>
                            ✅ Your account does not register a ban at the moment !
                            <br>
                        </h2>

                        @endif
                        @if(Auth::check() && Auth::user()->bans->last())
                           <h2>🚫 Your account has been banned. </h2>
                            @if(Auth::user()->bans->last()->expired_at)
                                <p class="card-text">Your ban will expire on {{ Auth::user()->bans->last()->expired_at->format('d M Y, h:i:s A') }}</p>
                                <hr>
                                <strong>Your ban will be lifted in {{ Auth::user()->bans->last()->expired_at->diffForHumans() }}</strong>
                            @else
                                <p class="card-text">Your ban is permanent.</p>
                            @endif
                        @else
                            <p class="card-text">You are not logged in or not banned.</p>
                        @endif
                        <p>
                            this is an error, submit a request for unbanning, submit Form ✅
                        </p>
                        <a class="custom-link p-2 shadow" href="{{ route('unban.request') }}">👉Submit a request for Unbanning</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
