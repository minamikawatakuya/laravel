@extends('layouts.default')

@section('content')
<div>

@if ( $articles != NULL )
@if ( $writer_id != NULL )
記者名：<b>{{$writer_name}}</b><br>
@endif
<table>
@foreach($articles as $article)
<tr>
<td><a href="/detail?id={{$article->id}}">{{$article->title}}</a></td>
</tr>
@endforeach
</table>
{{ $articles->appends(['id' => $writer_id])->links() }}
@endif

@if ( $writers != NULL )
<ul>
@foreach($writers as $writer)
<li>
<a href="/?id={{$writer->id}}">
{{$writer->disp_name()}}
({{$writer->article_num}})
</a>
</li>
@endforeach
</ul>
@endif

</div>
@endsection
