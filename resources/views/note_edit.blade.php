@extends('layouts.app')

@section('content')
  <div class="card">
    <form action="{{ route('note.update', $note->id) }}" method="POST">                        
        @method('PUT')
        <div class="card-header">
        <h3 class="m-0">Edit Note</h3>
        </div>{{-- header --}}

        <div class="card-body">
            <label for="title">Title</label>
            <input class="form-control mb-3" type="text" name="title" id="title" placeholder="Title" value="{{$note->title}}" required>
            <label for="note">Note</label>
            <input class="form-control" type="text" name="note" id="note" placeholder="Note" value="{{$note->note}}" required>
        </div>{{-- body --}}

        <div class="card-footer d-flex">
            <a class="btn btn-danger" href="{{ route('notes') }}">Cancel</a>
            <button type="submit" class="btn btn-success ml-auto">Save</button>
        </div>{{-- footer --}}                        
        @csrf
    </form>
  </div>{{-- card --}}
@endsection