@extends('layouts.app')

@section('content')
    <div>

        <h1>Add HardWares</h1>

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


        <form method="post" name="hardware">
            @csrf

            <label>HardWare Name</label>
            <br>
            <input type="text" name="name" value="">
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


            <button type="submit">Save</button>

        </form>
    </div>

{{--    <script>--}}
{{--    $('#category').on('change',function (e) {--}}
{{--    console.log(e);--}}

{{--        var cat_id = e.target.value;--}}

{{--        $.get('/hardware?cat_id=' +cat_id,function (data) {--}}
{{--        //console.log(data);--}}
{{--            $('#subcategory').empty();--}}
{{--            $.each(data, function (addHardWare,subcatObj) {--}}
{{--                $('#subcategory').append('<option value="'+subcatObj.id+'">'+subcatObj.name+'</option>');--}}

{{--            });--}}

{{--        });--}}

{{--    });--}}
{{--    </script>--}}

@endsection
