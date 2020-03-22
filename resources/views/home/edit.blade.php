@extends('layouts.app')

@section('content')

@if (count($errors) > 0)
<div>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="/home/update" method="post">
{{ csrf_field() }}

<input type="hidden" name="id" value="{{$form->id}}">

<table>

@if ($errors->has('title'))
<tr>
    <th>ERROR</th>
    <td>{{$errors->first('title')}}</td>
</tr>
@endif
<tr>
    <th>title: </th>
    <td>
    <input type="text" name="title" value="{{ $form->title }}">
    </td>
</tr>

@if ($errors->has('content'))
<tr>
    <th>ERROR</th>
    <td>{{$errors->first('content')}}</td>
</tr>
@endif
<tr>
    <th>content: </th>
    <td>
    <textarea name="content">{{ $form->content }}</textarea>
    </td>
</tr>


<tr>
    <th></th><td><input type="submit" value="send"></td>
</tr>
</table>

</form>

@endsection