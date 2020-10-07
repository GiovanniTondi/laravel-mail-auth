@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <form action="{!! route('post-update', $post -> id) !!}" method="post">
                    <div class="card-header">
                        <h1>{{ $post -> title }}</h1>
                        @auth
                            <div class="edit">
                                <button href="{!! route('post-update', $post -> id) !!}" class="btn btn-success btn-sm">SAVE</button>
                                <a href="{!! route('post-show', $post -> id) !!}" class="btn btn-secondary btn-sm">BACK</a>
                            </div>
                        @endauth
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            @csrf
                            @method('POST')
                                <div class="form-group">
                                    <label class="title" for="title">Title </label>
                                    <input class="title" type="text" name="title" value="{{ $post -> title }}">
                                </div>
                                <div class="form-group">
                                    <input class="post-desc" type="text" name="description" value="{{ $post -> description }}">
                                </div>
                        </blockquote>
                    </div>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection
