@extends('layouts.app')

@section('content')
<h1>Danh sách bài viết</h1>
@foreach ($articles as $item)
    <div>
        <h2>{{ $item->title}}</h2>
        <p>{{$item->content}}</p>

    </div>
@endforeach
<div>
    {{$articles->links()}}
</div>
@endsection