@extends('layout.Main')
@section('content')

<div class="d-flex justify-content-end pt-3 pb-1  p-3 ">
    <a class="btn btn-info px-3" href="{{route('categories.index')}}">List</a>

</div>

<div class="card card-success">
    <div class="card-header">
        <h3 class="card-title">Create Category</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('categories.store')}}" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="title">title</label>
                <input name="title" type="text" class="form-control" id="title" placeholder="Enter title for category">
            </div>
            
            
            <div class="form-check">
                <input name="active" value="1" type="checkbox" class="form-check-input" id="is_active">
                <label class="form-check-label" for="is_active">is Active ?</label>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>


@endsection