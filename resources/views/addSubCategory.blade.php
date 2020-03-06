@extends('layouts.app')

@section('content')
    <div>

        <h1>Create SubCategory</h1>

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
            <select name="category_id" class="form-control select2-multiple">
                <option value=""></option>
                @foreach($categories as $category)
                    <option value="{{$category->id}}">
                        {{$category->name}}
                    </option>
                @endforeach
            </select>
            <br>
            <label>SubCategory Name</label>
            <br>
            <input type="text" name="name" value="">
            <br>
            <button type="submit">Save</button>
        </form>
    </div>
@endsection
