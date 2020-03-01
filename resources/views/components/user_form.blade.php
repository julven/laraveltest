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

                    <form action="" method="POST"  enctype="multipart/form-data">
                        @csrf
                        <div style="max-width: 400px">
                            <label for="fname">First Name</label>
                        <input autocomplete="off" id="fname" name="fname" type="text" class="{{$errors->has('fname') ? 'invalid' : ''}}" value="{{old('fname', '')}}">
                        
                            <label for="lname">Last Name</label>
                            <input autocomplete="off" id="lname" name="lname" type="text" class="{{$errors->has('lname') ? 'invalid' : ''}}" value="{{old('lname', '')}}">
                        
                            <label for="bday">Birthday</label>
                            <input autocomplete="off" id="bday" name="bday" type="text" class="{{$errors->has('bday') ? 'invalid' : ''}}" value="{{old('bday', '')}}">
                        
                            <label for="gender" >Gender</label>
                            <br>
                            <label style="padding-right: 5px">
                            <input name="gender" class="gender" value="male" type="radio" {{old('gender') != null && old('gender') == 'male'?'checked': ''}}/>
                                <span class="{{$errors->has('gender') ? 'red-text' : ''}}">Male </span>
                            </label>
                            <label style="padding-right: 5px">
                                <input name="gender" class="gender" value="female" type="radio"  {{old('gender') != null  && old()['gender'] == 'female'?'checked': ''}}/>
                                <span class="{{$errors->has('gender') ? 'red-text' : ''}}">Female</span>
                            </label>
                        
                        
                            <div class="file-field input-field">
                            <div class="btn">
                                <span>File</span>
                                <input type="file" name="image" id="image">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path {{$errors->has('image') ? 'invalid' : ''}}" type="text" >
                            </div>
                          </div>
                        </div>

                        <div style="text-align: right">
                            <button class="btn waves-effect" type="submit">Add</button>&nbsp;
                            <a class="btn waves-effect" href="/list">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- {{dd(old('gender'))}} --}}
    </div>
@endsection