@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard(AAA)</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>

                <div>
<table>
@foreach($articles as $article)
<tr>
<td><a href="/home/detail?id={{$article->id}}">{{$article->title}}</a></td>
</tr>
@endforeach
</table>
{{ $articles->links() }}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
