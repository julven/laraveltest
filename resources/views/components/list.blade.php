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
                            <tr>
                                <td>
                                    <div style="width: 120px; height: 120px; border: 1px solid black">
                                        <img src="" alt="" style="width: 100%; height:100%;">
                                    </div>
                                    
                                </td>
                                <td>
                                    <div style="line-height: 18px">
                                        <small>name:</small>
                                        <p> sample sample</p>
                                        <small>gender:</small>
                                        <p> sample </p>
                                        <small>birthday:</small>
                                        <p> 00-00-0000</p>
                                    </div>
                                </td>
                                <td>
                                    <button class="btn waves-effect" style="width: 100%;margin-bottom: 5px">Edit</button><br>
                                    <button class="btn waves-effect" style="width: 100%">Delete</button>
                                </td>
                            </tr>

                          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection