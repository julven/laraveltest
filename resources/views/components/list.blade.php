@extends('welcome')

@section('component')
    <div class="row">
        <div class="col s10 m10 l9 xl7">
            <div class="card" style="min-width: 400px">
                <div class="card-content">
                    <div class="card-title">List <a class="waves-effect btn" style="float:right" href="/user_form">New</a></div>
                    <hr>
                    <table >
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>
                                    <div style="width: 100px; height: 100px; border: 1px solid black">
                                    <img src="{{asset($user->image)}}" alt="" style="width: 100%; height:100%;">
                                    </div>
                                    
                                </td>
                                <td>
                                    <div style="line-height: 20px; max-width: 160px">
                                        <small>name:</small>
                                        <span style="float: right"> {{$user->fname}} {{$user->lname}}</span><br>
                                        <small>gender:</small>
                                        <span style="float: right"> {{$user->gender}} </span><br>
                                        <small>birthday:</small>
                                        <span style="float: right"> {{$user->bday}}</span><br>
                                    </div>
                                </td>
                                <td>
                                    <button class="btn waves-effect" style="width: 100%;margin-bottom: 5px">Edit</button><br>
                                    <button class="btn waves-effect" style="width: 100%">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                            

                          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- {{dd($users[0]->fname)}} --}}
@endsection