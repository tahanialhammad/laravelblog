@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <p>name : {{ Auth::user()->name }}</p>
                    <p>email: {{ Auth::user()->email }}</p>


                </div>
            </div>
        </div>
    </div>

</div>
<div class="features">
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <i class="fas fa-home fa-2x"></i>
                <h3>Greate idea</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque dolorum numquam laboriosam est quas, adipisci ratione? Quos quis tempore et saepe explicabo pariatur nisi voluptatum asperiores corporis eum! Ut, labore.</p>
            </div>
            <div class="col-sm-6 col-lg-3">
                <i class="fas fa-home fa-2x"></i>
                <h3>Greate idea</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque dolorum numquam laboriosam est quas, adipisci ratione? Quos quis tempore et saepe explicabo pariatur nisi voluptatum asperiores corporis eum! Ut, labore.</p>
            </div>
            <div class="col-sm-6 col-lg-3">
                <i class="fas fa-home fa-2x"></i>
                <h3>Greate idea</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque dolorum numquam laboriosam est quas, adipisci ratione? Quos quis tempore et saepe explicabo pariatur nisi voluptatum asperiores corporis eum! Ut, labore.</p>
            </div>
            <div class="col-sm-6 col-lg-3">
                <i class="fas fa-home fa-2x"></i>
                <h3>Greate idea</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque dolorum numquam laboriosam est quas, adipisci ratione? Quos quis tempore et saepe explicabo pariatur nisi voluptatum asperiores corporis eum! Ut, labore.</p>
            </div>
        </div>
    </div>
</div>

@endsection
