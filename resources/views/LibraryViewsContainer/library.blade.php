@extends('master')

@section('content')

<div class="container" style="opacity: 0.8">


    <div class="row">
        @foreach($sections as $section)

            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="/images/{{$section->image_name}}" alt="{{$section->section_name}}">
                    <h1><a class="btn btn-primary">{{$section->section_name}}</a></h1>
                </div>
            </div>
        @endforeach
    </div>

</div>

@stop


