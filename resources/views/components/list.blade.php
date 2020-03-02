@extends('welcome')

@section('component')
    <div class="row">
        <div class="col s10 m10 l9 xl7">
            <div class="card" style="min-width: 400px">
                <div class="card-content"  >
                    <div class="card-title">List <a class="waves-effect btn" style="float:right" href="/add">New</a></div>
                    <hr>
                    <div style="min-height: 600px">
                        <table>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td>
                                        <div style="width: 100px; height: 100px; border: 1px solid lightgray">
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
                                    <a href="/edit/{{$user->id}}" class="btn waves-effect" style="width: 100%;margin-bottom: 5px">Edit</a><br>
                                        <button class="btn waves-effect" style="width: 100%" onclick="deletes({{$user->id}})">Delete</button>
                                        <form method="POST" id="userdel_{{$user->id}}">
                                            @method("DELETE")
                                            @csrf
                                            <input type="hidden" value="{{$user->id}}" name="id">
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                
    
                              
                            </tbody>
                        </table>
                    </div>
                    

                    <ul class="pagination" style="text-align: center">
                        <li class="{{$users->currentPage() == 1 ? 'disabled': 'waves-effect '}}"><a href="{{$users->previousPageUrl()}}"><i class="material-icons">chevron_left</i></a></li>
                        <li ><a >{{$users->currentPage()}}</a></li>
                        <li ><a >/</a></li>
                        <li ><a >{{$users->lastPage()}}</a></li>
                        <li class="{{$users->currentPage() == $users->lastPage() ? 'disabled': 'waves-effect '}}" ><a href="{{$users->nextPageUrl()}}"><i class="material-icons">chevron_right</i></a></li>
                    </ul>
                {{-- <div>{{$users->links()}}</div> --}}
                </div>
            </div>
        </div>
    </div>
    {{-- {{dd([$users->currentPage(),$users->lastPage(),$users->currentPage() == $users->lastPage()])}} --}}
@endsection