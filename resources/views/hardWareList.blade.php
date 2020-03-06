@extends('layouts.app')

@section('content')
    <div>
        <li>
            @foreach($hardWares as $hardWare)
                HardWare Name:{{$hardWare->name}}
                Quantity:{{$hardWare->quantity}}
                <br>
                <form method="post" action="{{route('hardWareDelete',[$hardWare->id])}}">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Delete</button>
                </form>
                <button><a href="{{route('editHardWare',[$hardWare->id])}}">Edit</a></button>
                <br>
                @endforeach
        </li>
    </div>
@endsection
