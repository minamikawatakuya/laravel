@extends('layouts.default_vue')

@section('content')
<div id="app">
<my-component-detail article_id="{{ $article_id }}"></my-component-detail>
</div>
@endsection