


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('Dashboard') }}
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="welcomeText m-3">You are logged in! Now that you are here, you can: </p>
                    <div class="d-flex align-items-between">
                        <a href="{{ route('create')}}" class="btn btn-success w-50 p-3 m-3 mt-4" >Make An Advert</a>
                        <a href="{{ route('index')}}" class="btn btn-info w-50 p-3 m-3 mt-4" >See All Adverts</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection














































