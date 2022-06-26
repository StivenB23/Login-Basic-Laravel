@extends('partials.nav')
    @section('contenido')
    <div class="row">
        <div class="col s12">
            <div class="col s4">
                <h1>WELCOME TO DASHBOARD</h1>
            </div>
            <div class="col s6">
                <img src="{{ asset('dashboard.svg') }}" alt="dashboard">
            </div>
        </div>
    </div>
    @endsection