
@extends('layouts.app')
@section('content')

<table class="table table-bordered">
  <tr>
    <th class="col-xs-3 col-ms-3 col-md-4 col-lg-4">id</th>
    <td>{{ $task->id }}</td>
  </tr>
  <tr>
    <th class="col-xs-3 col-ms-3 col-md-4 col-lg-4">ステータス</th>
    <td>{{ $task->status }}</td>
  </tr>
  <tr>
    <th class="col-xs-3 col-ms-3 col-md-4 col-lg-4">タスク</th>
    <td>{{ $task->content }}</td>
  </tr>
</table>

<div class="row">
  <div class="col-xs-6">
    {!! link_to_route('tasks.edit', 'タスクを編集', ['id' => $task->id], ['class' => 'btn btn-default']) !!}
  </div>
  <div class="col-xs-6">
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
      {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
  </div>
  
</div>

@endsection
