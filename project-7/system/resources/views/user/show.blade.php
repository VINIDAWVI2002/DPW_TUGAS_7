@extends('admin.base')

@section ('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-15">
    <div class="card">
        <div class="card-header">
            Detail Data User
        </div>
        <div class="card-body">
            <h3>{{$user->nama}}</h3>
            <hr>
            <p>
                {{$user->username}} |
                email : {{$user->email}}

                No Handphone: {{ $user->detail->no_handphone }}
        </div>
    </div>
 </div>
</div>
</div>
@endsection