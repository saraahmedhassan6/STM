@extends('layouts.app')
@section('title')
Show
@endsection
@section('content')
  <ul class="list-group">
    <li class="list-group-item">{{$posts->id}}</li>
    <li class="list-group-item">{{$posts->title}}</li>
    <li class="list-group-item">{{$posts->descr}}</li>
    <li class="list-group-item">{{$posts->created_at}}</li>
    <li class="list-group-item">{{$posts->user->name}}</li>
  
  </ul>
@endsection

