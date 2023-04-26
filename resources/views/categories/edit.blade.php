@extends('layout.Main')
@section('content')

<div class="d-flex justify-content-end pt-5 pb-1 ">
    <a class="btn btn-primary px-3" href="{{route('categories.index')}}">List</a>

</div>

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit Category</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('categories.update',[$category->id])}}" method="POST">
        @csrf
        @method('put')
        <div class="card-body">
            <div class="form-group">
                <label for="title">title</label>
                <input name="title" value="{{$category->title}}" type="text" class="form-control" id="title" placeholder="Enter title for category">
            </div>
            
            
            <div class="form-check">
                <input {{$category->is_active ? 'checked':''}}  name="active" value="1" type="checkbox" class="form-check-input" id="is_active" >
                <label class="form-check-label" for="is_active" >is Active ?</label>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>


@endsection