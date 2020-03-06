@extends('layouts.app')

@section('content')
    <div>
        <h2>Update your HardWare</h2>

        <form method="post" action="{{route('updateHardWare',[$hardWare->id])}}">
            @csrf
            @method('PUT')
            <label>HardWare Name</label>
            <br>
            <input type="text" name="name" value="{{$hardWare->name}}">
            <br>
            <label>SubCategory Name</label>
            <select name="subcategory_id"  class="form-control select2-multiple">
                <option value=""></option>
                @foreach($subcategories as $subcategory)
                    <option value="{{$subcategory->id}}">
                        {{$subcategory->name}}
                    </option>
                @endforeach


            </select>
            <label>Quantity</label>
            <input type="number" name="quantity" value="">
            <br>
            <br>


            <button type="submit">Update</button>


        </form>

    </div>
@endsection
