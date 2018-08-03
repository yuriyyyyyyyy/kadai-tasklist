
@extends('layouts.app')
@section('content')

<h1>タスク新規作成</h1>

{!! Form::model($task, ['route' => 'tasks.store']) !!}

  {!! Form::select('status',[
    '完了' => '完了',
    '未着手' => '未着手',
    '着手' => '着手',
  ]) !!}

  {!! Form::label('content', 'タスク：') !!}
  {!! Form::text('content') !!}

  {!! Form::submit('投稿') !!}

{!! Form::close() !!}

@endsection
