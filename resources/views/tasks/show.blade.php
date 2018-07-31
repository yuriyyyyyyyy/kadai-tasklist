
@extends('layouts.app')
@section('content')

<h1>id= {{ $task->id }} のメッセージ詳細</h1>
<p>{{ $task->content }}</p>

{!! link_to_route('tasks.edit', 'タスクを編集', ['id' => $task->id]) !!}

{!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
  {!! Form::submit('削除') !!}
{!! Form::close() !!}

@endsection
