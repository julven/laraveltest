@extends('welcome')

@section('component')
    <div class="row">
        <div class="col s12 m10 l8 xl7">
            <div class="card" style="min-width: 350px">
                <div class="card-content">
                    <div class="card-title">
                        Form
                        @if (session()->has('success'))
                        <span style="float:right" class="green-text">{{session()->get('success')}}</span>
                        @endif
                        @if($errors->any())
                        <span style="float:right" class="red-text">Please fill up the required fields!</span>
                        @endif
                        
                    </div>
                    <hr>
                    <form  method="POST"  enctype="multipart/form-data" id="user_form" >
                        @if ($type=="edit")
                            @method('PUT')
                        @endif
                        @csrf
                        <div style="max-width: 400px">

                            <label for="fname">First Name</label>
                            <input 
                            autocomplete="off" 
                            id="fname" 
                            name="fname" 
                            type="text" 
                            class="{{$errors->has('fname') ? 'invalid' : ''}}" 
                            value="{{$user->fname ?? old('fname', '')}}">
                        
                            <label for="lname">Last Name</label>
                            <input 
                            autocomplete="off" 
                            id="lname" 
                            name="lname" 
                            type="text" 
                            class="{{$errors->has('lname') ? 'invalid' : ''}}" 
                            value="{{$user->lname ?? old('lname', '')}}">
                        
                            <label for="bday">Birthday</label>
                            <input 
                            autocomplete="off" id="bday" 
                            name="bday" type="text" 
                            class="{{ $errors->has('bday') ? 'invalid' : ''}}" 
                            value="{{$user->bday ?? old('bday', '')}}">
                        
                            <label for="gender" >Gender</label>
                            <br>
                            <label style="padding-right: 5px">
                                <input 
                                name="gender" 
                                class="gender" 
                                value="male" 
                                type="radio" 
                                {{(old('gender') != null && old('gender') == 'male')?'checked': ''}}
                                {{$type == 'edit' && $user->gender == 'male' ? 'checked' : '' ?? ''}}/>
                                <span class="{{$errors->has('gender') ? 'red-text' : ''}}">Male </span>
                            </label>
                            <label style="padding-right: 5px">
                                <input 
                                name="gender" class="gender" 
                                value="female" 
                                type="radio"  
                                {{(old('gender') != null  && old()['gender'] == 'female')?'checked': ''}}
                                {{$type == 'edit' && $user->gender == 'female' ? 'checked' : '' ?? ''}}/>
                                <span class="{{$errors->has('gender') ? 'red-text' : ''}}">Female</span>
                            </label>
                        
                            @if ($type == 'add')
                            <div class="file-field input-field">
                                <div class="btn">
                                    <span>File</span>
                                    <input 
                                    type="file" 
                                    name="image" 
                                    id="image">
                                </div>
                                <div class="file-path-wrapper">
                                    <input 
                                    class="file-path 
                                    {{$errors->has('image') ? 'invalid' : ''}}" 
                                    type="text" >
                                </div>
                            </div>  
                            @endif

                            @if ($type == 'edit')
                                <div style="width: 100px; height:100px; margin: 10px 0px; border: 1px solid lightgray">
                                    <img  id="imgprev" src="{{asset($user->image)}}" alt="{{$user->image}}" style="width: 100%;height:100%">
                                    <input 
                                    hidden
                                    type="file" 
                                    name="image" 
                                    id="image">
                                </div>
                                <button 
                                class="btn waves-effect btn-small" 
                                style="width: 100px" 
                                id="imgchange" 
                                >Change</button>
                            @endif
                           
                        </div>
                        @if ($type == 'add')
                            <div style="text-align: right">
                                <button class="btn waves-effect" type="submit">Add</button>&nbsp;
                                <a class="btn waves-effect" href="/list">Back</a>
                            </div>
                        @endif
                        @if ($type == 'edit')
                        <div style="text-align: right">
                            <button class="btn waves-effect" type="submit">Edit</button>&nbsp;
                            <a class="btn waves-effect" href="/list">Back</a>
                        </div>
                       
                        @endif
                        {{-- {{dd($user->fname ?? '')}} --}}
                    </form>
                </div>
            </div>
        </div>
        {{-- {{dd(Request::url())}} --}}
    </div>
@endsection