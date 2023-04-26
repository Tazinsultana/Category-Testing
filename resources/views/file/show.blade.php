@extends('layout.Main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb p-4">
            <div class="pull-left">
                <h2> Show Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-dark" href="{{ route('file.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>File:</strong>
                <a href="{{asset('storage/uploads/'.$file->file_path)}}" download>{{$file->title}}</a>
                {{-- <img src="{{asset('storage/uploads/'.$file->file_path)}}" width="500px"> --}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Version</strong>
                {{ $file->version }}
            </div>
        </div>
    </div>
@endsection