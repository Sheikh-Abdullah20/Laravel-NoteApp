@extends('mainlayout')

@section('content')

@if(session()->has('updated'))
<div class="alert alert-warning text-dark">
    {{session('updated')}}
</div>
@endif
        <div class="container my-5 ">
            <div class="row text-center">
                <h4>Add-Note</h4>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <form action="{{route('addnote')}}" method="POST">
                        @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Enter Title Here" name="title">
                        <span class="text-danger">
                        @error('title')
                            {{$message}}
                        @enderror    
                        </span>
                      </div>
                      <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" rows="5" name="description"></textarea>
                        <span class="text-danger">
                            @error('description')
                                {{$message}}
                            @enderror    
                            </span>
                      </div>
                      <button type="submit" class="btn btn-dark ">Add Note</button>
                    </form>
            </div>
            
            
            {{-- fetching notes --}}
           
            <div class="row my-5 ">
                @foreach ( $notes as $note )
                    
            
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-body">
                          <h5 class="card-title">{{$note->title}}</h5>
                          <p class="card-text">{{$note->description}}</p>
                          <a href="{{route('editnote' , $note->id)}}" class="btn btn-dark">Edit</a>
                          <a href="#" class="btn btn-danger">Delete</a>
                        </div>
                      </div>  
                    </div>
                    @endforeach
            </div>
        </div>

        @endsection