@extends('layouts.app')

@section('content')
<div>

<a href="/home/edit?id={{$article->id}}">編集</a><br><br>

<b>{{$article->title}}</b><br><br>
{!! nl2br($article->content) !!}

</div>
@endsection
