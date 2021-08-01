@extends('layouts.app')

@section('content')

 <h1> 部屋番号は {{$user->room_number}} です <h1>
<h1>id: {{ $status }} の状態の編集ページ</h1>

<h1>　現在の状態は {{$status}}です <h1>


<div class="row">
    <div class="col-6">
    {!! Form::model($roomstatus, ['route' => ['rooms.update',$roomstatus], 'method' => 'put' ]) !!}

            
                            <div class="form-group">
                    {!! Form::label('status', '状態:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}

                </div>


                <div class="form-group">
                    {!! Form::label('room_number', '部屋番号:') !!}
                    {!! Form::text('room_number', null, ['readonly']) !!}
                    
                </div> 


 

 
            
            
     
            
            
            {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}
            
        {!! Form::close() !!}
    </div>
</div>






@endsection






