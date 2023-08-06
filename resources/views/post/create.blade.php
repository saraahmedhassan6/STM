@extends('layouts.app')
@section('title')
Create
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
    <form action="/posts" method="post" style="width:350px; margin:30px">
        @csrf

        <div class="form-group">
            <label for="Title">Title</label>
            <input type="text" name="title" class="form-control" id="Title">
        </div>
        <div class="form-group">
            <label for="descr"> Description</label>
            <input type="text" name="descr" id="descr" class="form-control">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection

