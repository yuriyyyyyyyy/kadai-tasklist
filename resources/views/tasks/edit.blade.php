
@extends('layouts.app')
@section('content')

<h1>id: {{ $task->id }} のタスク編集</h1>

{!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

  {!! Form::label('status', 'ステータス：') !!}
  {!! Form::select('status',[
    '完了' => '完了',
    '未着手' => '未着手',
    '着手' => '着手',
  ]) !!}

  {!! Form::label('content', 'タスク：') !!}
  {!! Form::text('content') !!}

  {!! Form::submit('更新') !!}

{!! Form::close() !!}

@endsection
