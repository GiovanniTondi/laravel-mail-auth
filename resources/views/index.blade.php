@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>Posts</h1></div>

                <div class="list-group">
                    @foreach ($posts as $post)
                        <a href="{!! route('post-show', $post -> id) !!}" class="list-group-item list-group-item-action">
                            {{ $post -> title }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
