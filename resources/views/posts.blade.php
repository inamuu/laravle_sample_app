@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
    @foreach ($posts as $post)
        <div class="card">
        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

            @if (count($posts) > 0)
            <div class="panel panel-default">
                <div class="panel-body">
                    <table class="table table-striped task-table">
                        <tbody>
                            <tr>
                                <td class="table-text"><div>タイトル: {{ $post->title }}</div></td>
                                <td class="table-text"><div>投稿日時: {{ $post->created_at }}</div></td>
                            </tr>
                            <tr>
                                <td class="table-text"><div>{{ $post->content }}</div></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            @endif
        </div>
        </div>
    @endforeach
    {{ $posts->links() }}
    </div>
    </div>
</div>
@endsection
