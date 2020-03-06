@extends('layouts.app')

@section('content')




    <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                        <a href="{{route('addCategory')}}">Add Category</a>
                        <a href="{{route('addSubCategory')}}">Add SubCategory</a>
                        <a href="{{route('addHardWare')}}">Add HardWare</a>
                </div>
            @endif
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
