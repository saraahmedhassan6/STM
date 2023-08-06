@extends('layouts.app')
@section('title')
Edit
@endsection
@section('content')
    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif
    <form action="/posts/{{$posts->id}}/update" method="post" style="width:350px; margin:30px">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="Title">Title</label>
            <input type="text" name="title" class="form-control" id="Title" value="{{$posts->title}}">
        </div>
        <div class="form-group">
            <label for="descr"> Description</label>
            <input type="text" name="descr" id="descr" class="form-control" value="{{$posts->descr}}">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
