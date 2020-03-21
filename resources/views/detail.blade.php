@extends('layouts.default')

@section('content')
<div>

<b>{{$article->title}}</b><br><br>
{!! nl2br($article->content) !!}

</div>
@endsection
