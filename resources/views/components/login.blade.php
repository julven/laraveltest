@extends('welcome')

@section('component')
    
    
    <div class="row">
        <div class="col s12 m10 l8 xl6">
            <div class="card">
                <div class="card-content">
                    @if (!Auth::check())

                    <span class="card-title">Login</span>
                    <form action="/login" method="POST">
                        @csrf
                        <div class="input-field">
                            <input placeholder="Placeholder" id="username" type="text" name="username">
                            <label for="username">Username</label>
                        </div>

                        <div class="input-field">
                            <input placeholder="Placeholder" id="password" name="password" type="password">
                            <label for="password">Password</label>
                        </div>

                        <button class="btn waves-effect" type="submit">Login</button>
                    </form>
                    @else
                    <span class="card-title">Logged in as "{{Auth::user()->fname}}"</span>
                    @endif
                </div>
                
            </div>
        </div>
    </div>
    <style>
        #username, #password {
            max-width: 350px;
        }
    </style>
@endsection