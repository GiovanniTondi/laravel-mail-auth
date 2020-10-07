@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>{{ $post -> title }}</h1>
                    @auth
                        @if ($post -> user_id === Auth::user() -> id)
                            <div class="edit">
                                <a href="{!! route('post-edit', $post -> id) !!}" class="btn btn-success btn-sm">EDIT</a>
                                <a href="{!! route('post-delete', $post -> id) !!}" class="btn btn-danger btn-sm">DELETE</a>
                            </div>
                        @endif
                    @else
                        <div class="edit">
                            <a href="{!! route('login') !!}" class="btn btn-primary btn-sm">LOGIN</a>
                            </div>
                    @endauth
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p>{{ $post -> description }}</p>
                        <footer class="blockquote-footer">{{ $post -> user -> name }} - <cite title="Source Title">{{ $post -> updated_at }}</cite></footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
