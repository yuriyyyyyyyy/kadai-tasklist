
@extends('layouts.app')
@section('content')

<h1>タスク新規作成</h1>

<div class="row">
  <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
    {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
    <div class="form-group">
      {!! Form::select('status',[
        '完了' => '完了',
        '未着手' => '未着手',
        '着手' => '着手',
      ]) !!}
      {!! Form::label('content', 'タスク：') !!}
      {!! Form::text('content') !!}
    </div>
    
      {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
    
    {!! Form::close() !!}
  </div>
</div>

@endsection
