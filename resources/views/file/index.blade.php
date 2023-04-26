@extends('layout.Main')
@section('content')
    <div class="d-flex justify-content-end pt-3 pb-1 p-3 ">
        <a class="btn btn-primary px-3" href="{{ route('file.create') }}">Upload</a>

    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-bordered p-5 py-6 px-4">
        <tr>
            <th>No</th>
            {{-- <th>File</th> --}}
            <th>Title</th>
            <th>Version</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($file as $file)
        <tr>
            <td>{{ $file->id }}</td>
            {{-- <td>
                {{-- {{ $file->file_path }} --}}
                {{-- <img src="{{asset('storage/uploads/'.$file->file_path)}}" width="100px" height="100px">
            
            {{-- </td> --}} 
            <td>{{ $file->title}}</td>
            <td>{{ $file->version }}</td>
            <td>
                <form action="{{ route('file.destroy',$file->id) }}" method="POST">
     
                    <a class="btn btn-success" href="{{ route('file.show',$file->id) }}">Show</a>
      
                    <a class="btn btn-warning" href="{{ route('file.edit',$file->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {{-- {!! $products->links() !!} --}}
@endsection
