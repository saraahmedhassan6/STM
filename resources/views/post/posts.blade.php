@extends('layouts.app')
@section('title')
List
@endsection
@section('content')
    <a class="btn btn-primary" href="/posts/create" style="margin-top:10px">Add</a>
    <table class="table table-striped"  style="margin-top:10px">        
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Created by</th>
            <th>Created at</th>
            <th>Transactions</th>
            <th></th>
        </tr>
        @foreach($posts as $post)
        <tr>
            <td>{{$post['id']}}</th>
            <td>{{$post['title']}}</th>
            <td>{{$post['descr']}}</th>
            <td>{{$post->user->name}}</th>
            <td>{{$post['created_at']}}</th>
            <td ><a class="btn btn-primary" href="/posts/{{$post['id']}}">View</a>
            <a class="btn btn-primary" href="/posts/{{$post['id']}}/edit">Edit</a>
            </td>
            <td>
            <form action="/posts/{{$post->id}}" method="post" >
                @csrf
                @method('delete')
            <button class="btn btn-primary" >Delete</button>
            </form>
            </td>


        </tr>
        @endforeach
    </table>
@endsection

