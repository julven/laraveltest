@extends('welcome')

@section('component')
<div class="row">
    <div class="col s12 m9 l8 xl6">
        <div class="card">
            <div class="card-content">
                <div class="card-title">
                    Info
                   <a class="waves-effect btn btn-small" style="float:right" href="{{ url()->previous() }}">Back</a>
                </div>
                <hr>
                @if ($errors->any() && array_keys($errors->messages())[0] != 'password')
                    <span style="float:right" class="red-text">Failed to updated info!</span>
                @endif
                @if (session()->has('success') && session()->get('type') == 'info')
                    <span style="float:right" class="green-text">{{session()->get('success')}}</span>
                @endif
                <div style="clear:both"></div>
                <form method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" value="info" name="type">
                    <div style="max-width: 300px">
                        <label for="fname">First Name</label>
                        <input placeholder="Placeholder" id="fname" type="text" name="fname" value="{{$account->fname}}">

                        <label for="lname">Last Name</label>
                        <input placeholder="Placeholder" id="lname" type="text" name="lname" value="{{$account->lname}}">

                        
                        <div  style="max-width: 150px">
                            <label for="bday">Birthday</label>
                            <input placeholder="Placeholder" id="bday" type="text" name="bday" value="{{$account->bday}}">

                            <label for="gender">Gender</label>
                            <select type="text" name="gender" id="selgender">
                            
                                <option value="male" {{$account->gender == "male" ? 'selected' : ''}}>Male</option>
                                <option value="female" {{$account->gender == "female" ? 'selected' : ''}}>Female</option>
                                
                            </select>
                        </div> 
                    
                    </div>
                    <button class="btn waves-effect btn-small" type="submit" style="float: right">Update Info</button>
                    <div style="clear:both"></div>
                </form>
                
                <span class="card-title">Account</span>
                <hr>
                @if ($errors->any() && array_keys($errors->messages())[0] == 'password')
                    <span style="float:right" class="red-text">Failed to updated pass!</span>
                @endif
                @if (session()->has('success') && session()->get('type') == 'pass')
                    <span style="float:right" class="green-text">{{session()->get('success')}}</span>
                @endif
                <div style="clear:both"></div>
                <label for="username">Username</label>
                                
                <p><b>Admin</b></p>
                
                <label for="password">Password</label>
                <form method="POST">
                    <div class="row">

                        @csrf
                        @method('PUT')
                        <input type="hidden" value="pass" name="type">
                        <div class="col s10 m6 l6 xl6">
                            <input placeholder="New Password" id="password_new" type="password" name="password_confirmation">
                        </div>
                        <div class="col s10 m6 l6 xl6">
                            <input placeholder="Confirm" id="password_conf" type="password" name="password">
                        </div>

                    </div>
                    <button class="btn waves-effect btn-small" style="float: right">Update Pass</button>
                    <div style="clear:both"></div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- {{dd($errors ?? '') }} --}}
@endsection