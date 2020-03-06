@extends('layouts.app')

@section('content')
    <div>

        <h1>Create Category</h1>

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form method="post">
            @csrf
            <label>Category Name</label>
            <input type="text" name="name" value="" >
            <br>
            <label>Description</label>
            <br>
            <textarea type="text" name="description" ></textarea>
            <br>
            <button type="submit">Save</button>
        </form>
    </div>

@endsection
