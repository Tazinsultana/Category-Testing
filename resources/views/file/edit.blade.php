@extends('layout.Main')
@section('content')

<div class="d-flex justify-content-end pt-5 pb-1 ">
    <a class="btn btn-info px-3" href="{{route('file.index')}}">List</a>

</div>

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit Upload File</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('file.update',$file->id) }}" method="POST" enctype="multipart/form-data"> 
    @csrf
    @method('PUT')
 
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="text" name="name" value="{{ $file->title }}" class="form-control" placeholder="Title">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>File:</strong>
                <input type="file" name="file" class="form-control" placeholder="file">
                <img src="/image/{{ $file->file_path }}" width="300px">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Version:</strong>
                <input type="text" name="version" value="{{ $file->version }}" class="form-control" placeholder="Version">
            </div>
        </div>
        
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
 
</form>
@endsection