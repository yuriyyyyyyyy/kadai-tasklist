
@extends('layouts.app')
@section('content')

<h1>タスク新規作成</h1>

<div class="row">
  <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
    {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
      <div class="form-group row">
        {!! Form::label('status', 'ステータス：', ['class' => 'control-label col-xs-3']) !!}
        <div class="col-xs-3">
          {!! Form::select('status',[
            '完了' => '完了',
            '未着手' => '未着手',
            '着手' => '着手',
          ], null, ['class' => 'form-control']) !!}
        </div>
      </div>
      <div class="form-group row">
        {!! Form::label('content', 'タスク：', ['class' => 'control-label col-xs-3']) !!}
        <div class="col-xs-9">
          {!! Form::text('content', null, ['class' => 'form-control']) !!}
        </div>
      </div>

      {!! Form::submit('投稿', ['class' => 'btn btn-primary col-xs-3']) !!}
    
    {!! Form::close() !!}
  </div>
</div>

@endsection
