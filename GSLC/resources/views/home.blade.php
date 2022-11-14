@extends('Master.master')

@section('title', 'Home Page')

@section('content')
<link rel="stylesheet" href="/css/homeStyle.css">

    <div class='home-content'>
        @foreach($role as $c => $r)
        <div class="card text-center text-bg-dark card-style ">
            <div class="card-header text-bg-secondary">
                <h3>{{ $r }}</h3>
            </div>
            <div class="card-body">
            
            @if($c == 'Franco')
            <h5 class="card-title">{{ $c }}</h5>
            <p class="card-text text-success">One shot, one kill!</p>

            @elseif($c == 'Hayabusa')
            <h5 class="card-title">{{ $c }}</h5>
            <p class="card-text text-danger">Biarkan aku membersihkan jalan untuk tuanku</p>

            @elseif($c == 'Beatrix')
            <h5 class="card-title">{{ $c }}</h5>
            <p class="card-text text-info">Ada yang melihat Diggie belakangan ini? Aku ada pesan untuknya</p>
            @endif
            </div>
        </div>
        @endforeach
    <div> 
@endsection