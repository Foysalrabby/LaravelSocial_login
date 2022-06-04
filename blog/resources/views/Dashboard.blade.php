@extends('layout.app')

@section('title','Dashboard')

@section('content')

    <div class="container mt-5 p-5">
        <div class="row bg-light p-5">
            <div class="col-md-6">
                <img src="{{Session::get('img')}}" width="10%"   alt="mm" >
                <div class="card" >

                   <table>
                       <tbody>
                       <tr>
                           <td>user id</td>
                           <td>{{Session::get('userId')}}</td>  <!--session '' modde ja dici oi name loginresgister controller-->
                       </tr>
                       <tr>
                           <td>user name</td>
                           <td>{{Session::get('name')}}</td>
                       </tr>
                       <tr>
                           <td>user  nickname</td>
                           <td>{{Session::get('usernickname')}}</td>
                       </tr>
                       <tr>
                           <td>Email</td>
                           <td>{{Session::get('Email')}}</td>
                       </tr>
                       <tr>
                           <td> Token</td>
                           <td>{{Session::get('token')}}</td>
                       </tr>

                   </table>
                    <button> <a href="#"> Logout</a></button>
                </div>
            </div>

        </div>
    </div>






@endsection
