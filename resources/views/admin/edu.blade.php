@extends('layouts.app')

@section('content')
    <!-- <h1>{{ $admin->name }}</h1>
    <ul>
        @foreach($admin->articles as $article)
            <li><a href="{{ route('article', ['article' => $article->id]) }}">{{ $article->title }}</a></li>
        @endforeach
    </ul> -->
    <h2>{{ $categoryItems->first()->kategori }} Articles</h2>

<ul>
    @foreach ($categoryItems as $item)
        <li>{{ $item->judul }}</li>
    @endforeach
</ul>
@endsection