@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xs-12">

         <h1 class="page-title">Cats  <a href="{{ route('cats.create') }}" class="btn btn-primary">Add new</a></h1>

       
         <div class="row">
        @if (count($cats) > 0)
            @foreach ($cats as $cat)
                <div class="col-xs-12">
                    <div class="well">
                        <h3>{{ $cat->name }}</h3>
                        <a href="{{ route('cats.show',[$cat->id]) }}" class="btn btn-primary">View</a>
                        <a href="{{ route('cats.edit',[$cat->id]) }}" class="btn btn-primary">Edit</a>
                        {!! Form::open(array(
                                'style' => 'display: inline-block;',
                                'method' => 'DELETE',
                                'onsubmit' => "return confirm('".trans("Are you sure?")."');",
                                'route' => ['cats.destroy', $cat->id])) !!}
                        {!! Form::submit('Delete', array('class' => 'btn btn-primary')) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            @endforeach
        @else
        <h2>Yo you got no cats. Maybe you should make one...</h2>
                  
        @endif
        </div>

    </div>
</div>
@stop


