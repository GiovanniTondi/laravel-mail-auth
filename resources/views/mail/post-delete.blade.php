@extends('mail.layouts.app')

@section('content')
<div class="container">

    <h1>{{ $action }}: {{ $post -> title }}</h1>

    <div class="text">
        The user has deleted this post
    </div>
    <div class="post">
        <h2>{{ $post -> title }}</h2>
        <p>{{ $post -> description }}</p>
    </div>
</div>
@endsection
