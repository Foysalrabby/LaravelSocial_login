@extends('layout.app')

@section('title','Dashboard')

@section('content')

    <div class="container mt-5 p-5">
        <div class="row bg-light p-5">
            <div class="col-md-6">
                <img src="scss/imgae/rabbi.jpg" width="10%"   alt="mm" >
                <div class="card" >

                   <table>
                       <tbody>
                       <tr><td><input type="text" class="form-control mt-4" placeholder="UserId" /></td></tr>
                       <tr> <td><input type="text" class="form-control" placeholder="Name " /></td></tr>
                       <tr> <td><input type="text" class="form-control" placeholder="Nickname" /></td></tr>
                       <tr><td><input type="email" class="form-control" placeholder="Email" /></td></tr>
                       <tr> <td><input type="text" class="form-control" placeholder="token" /></td></tr>


                   </table>
                    <button> <a href="#"> Logout</a></button>
                </div>
            </div>

        </div>
    </div>






@endsection
