@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
        <!-- <div class="card-header">{{ __('Dashboard') }}</div> -->

        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif


            <!-- Books -->
            @if (count($posts) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        記事一覧
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>ブログ記事</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td class="table-text"><div>{{ $post->title }}</div></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
        </div>
    </div>
    </div>
</div>
@endsection
