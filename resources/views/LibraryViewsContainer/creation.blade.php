@extends('master')

@section('content')
    <body>
    <div class="container" style="width: 60% ; background-color: white">
        <form action="library" method="POST" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="SectionName">enter the name of the section </label>
                <input type="text" class="form-control" name="SectionNAme" id="SectionName" placeholder="Section Name ">
            </div>
            <div class="form-group">
                <label for="ImageSrc">Image input</label>
                <input type="file" id="ImageSrc" name="image">
                <p class="help-block">charge the image</p>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
        @if($sections != null)
            <table class="table table-hover ">
                <tr>
                    <td>Section name</td>
                    <td>Total Books</td>
                    <td>Update</td>
                    <td>Delete</td>
                </tr>
                @foreach($sections as  $section )
                    <tr>
                        <form action="library/{{$section->id}}/" method="post">
                            {!! csrf_field() !!}
                            <input type="hidden" name="_method" value="PATCH">
                            <td><input type="text" name="section_name" value="{{$section->section_name}}"></td>
                            <td><span class="label label-default">{{$section->books_total}} </span></td>
                            <td><button type="button" class="btn btn-success" onclick="submit()">Update</button></td>


                        </form>
                        <td>
                            <form action="library/{{$section->id}}/" method="post">
                            {!! csrf_field() !!}
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="button" class="btn btn-danger" onclick="submit()">Delete</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </table>

        @endif
    </div>


    </body>


@stop