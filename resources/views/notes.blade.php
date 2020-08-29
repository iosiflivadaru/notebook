@extends('layouts.app')

@section('content')
  <div class="d-flex align-items-center">
    <h1 class="m-0 mr-2">Notebook</h1>
    <a href="{{ route('note.create') }}" class="btn btn-success"><i class="fas fa-plus"></i></a>
  </div>
  <br>

  @forelse ($notes as $note)
    <div class="card">
        <div class="card-header d-flex">
            <h5 class="m-0 d-flex align-items-center">{{$note->title}}</h5>
            <div class="d-flex ml-auto" role="group" aria-label="Basic example">
                <a class="btn btn-primary mr-1" href="{{route('note.edit', $note->id)}}"><i class="fas fa-edit"></i></a>
                
                {{-- HTML forms do not support PUT, PATCH or DELETE actions. CSRF (cross-site request forgery) --}}
                <form method="POST" action="{{route('note.delete', $note->id)}}">
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="fas fa-times"></i></button>
                    @csrf
                </form>
            </div>
        </div>
        <div class="card-body">
            {{$note->note}}
        </div>
    </div> <br>
  @empty
    <h4 class="font-italic alert-secondary p-2 rounded text-center">Empty Notebook</h4>
  @endforelse

@endsection