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

<form action="/home/create" method="post">
{{ csrf_field() }}

<input type="hidden" name="updated" value="1">
<input type="hidden" name="writer_id" value="{{ Auth::user()->id }}">

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
    <input type="text" name="title" value="{{old('title')}}">
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
    <textarea name="content">{{old('content')}}</textarea>
    </td>
</tr>


<tr>
    <th></th><td><input type="submit" value="send"></td>
</tr>
</table>

</form>

@endsection