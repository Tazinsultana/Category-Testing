@extends('layout.Main')
@section('content')

    <div class="d-flex justify-content-end  pt-3 pb-2 py-1  p-3">
        <a class="btn btn-info  px-3" href="{{ route('file.index') }}">List</a>

    </div>
 
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
{{--      
<form action="{{ route('file.store') }}" method="POST" request.FILES enctype="multipart/form-data">
    @csrf
    
     <div class="row">

        <div class="custom-file">
        <input type="file" name="file" class="form-control" accept=".jpg,.jpeg,.bmp,.png,.gif,.doc,.docx,.csv,.rtf,.xlsx,.xls,.txt,.pdf,.zip">
                <input type="file" name="image" class="custom-file-input" id="chooseFile">
                <label class="custom-file-label" for="chooseFile">Select file</label>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>version</strong>
                <textarea class="form-control" style="height:150px" name="version" placeholder="version"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div> --}}
     
</form> 


<div class="container mt-5">
        <form action="{{route('file.store')}}" method="post" enctype="multipart/form-data">
          <!-- <h3 class="text-center mb-5">Upload File in Laravel</h3> -->
            @csrf
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <strong>{{ $message }}</strong>
            </div>
          @endif
          @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif
          {{-- <div class="custom-file">
              <label  class="custom-title-label" for="title"placeholder="title">Title</label>
            <input type="text" name="title" id="title">
        </div> --}}
        <div class="card-body">
            <div class="form-group">
                <label for="title">Title</label>
                <input name="title" type="text" class="form-control" id="title" placeholder="Enter Title">
            </div>
            <div class="custom-file">
                <input type="file" name="file" class="custom-file-input" id="chooseFile">
                <label class="custom-file-label" for="chooseFile">Select file</label>
            </div>
            <!-- <div class="col-xs-12 col-sm-12 col-md-12"> -->
            <div class="form-group pt-2 pb-2">
                {{-- <strong>version</strong> --}}
                <input type="text" class="form-control" name="version" placeholder="version"></input>
            </div>
        <!-- </div> -->
            <button type="submit"  class="btn btn-primary btn-block mt-4">Upload Files </button>
        </form>
    </div>
@endsection
