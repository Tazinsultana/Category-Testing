@extends('layout.Main')
@section('content')

<div class="d-flex justify-content-end pt-5 pb-1 ">
    <a class="btn btn-primary px-3" href="{{route('categories.index')}}">List</a>

</div>
<div>
    <h1> Title: {{$category->title}}</h1>
    <h2>is active : {{$category->is_active ? "Active": "InActive"}} </h2>
    <h3>Created at: {{$category->created_at}} </h3>
    <h3>Modied At : {{$category->updated_at}} </h3>
</div>


@endsection