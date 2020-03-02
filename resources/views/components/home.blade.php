@extends('welcome')

@section('component')
    <div class="row">
        <div class="col s12 m7 l6 xl5">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Summary</span>
                    <hr>
                    <table style="max-width: 230px">
                        <tbody>
                            <tr>
                                <td>Male(s)</td>
                                <td>{{$data['male']}}</td>
                            </tr>

                            <tr>
                                <td>Female(s)</td>
                                <td>{{$data['female']}}</td>
                            </tr>

                            <tr>
                                <td>Total</td>
                                <td>{{$data['total']}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
   {{-- {{dd($data['total'] ?? '')}} --}}
@endsection