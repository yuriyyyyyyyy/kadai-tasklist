
@extends('layouts.app')
@section('content')

<h1>タスク新規作成</h1>

{!! Form::model($task, ['route' => 'tasks.store']) !!}

  {!! Form::select('status',[
    'done' => '完了',
    'waiting' => '未着手',
    'working' => '着手',
  ]) !!}

  {!! Form::label('content', 'タスク：') !!}
  {!! Form::text('content') !!}

  {!! Form::submit('投稿') !!}

{!! Form::close() !!}

@endsection
