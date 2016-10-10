@extends('layouts.app')

@section('content')

    <a href="{{ url('cats') }}" class="btn btn-default">Back</a>

        <div class="well">
            <h1>{{ $cat->name }}</h1>
            <p>

                Photo: <br>    
                @if($cat->photo != '')
                    <img src="{{ asset('uploads/thumb/'.$cat->photo) }}">
                @endif

                Description:<br>  
                {{ $cat->description }}
                
                Color:<br>  
                {{ $cat->color }}

                Active:<br>  
                {{ $cat->active == 1 ? 'Yes' : 'No' }}

                Weight<br>  
                {{ $cat->weight }}
            </p>
        </div>

@stop