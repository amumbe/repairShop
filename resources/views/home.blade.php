@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard
                <li><a href="/home">Home</a></li>
                 <li><a href="/shops">Shops</a></li>
                 <li><a href="/shops/{id}">Shop</a></li>
                
                </div>

            </div>
        </div>
    </div>
</div>
@endsection