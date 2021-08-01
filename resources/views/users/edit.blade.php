@extends('layouts.app')

@section('content')

 <h1> 部屋番号は {{$user->room_number}} です <h1>
<h1>id: {{ $user->name }} の状態の編集ページ</h1>

<h1>　現在のEmailは {{$user}}です <h1>


<div class="row">
    <div class="col-6">
    {!! Form::model($user, ['route' => ['users.update',$user], 'method' => 'put' ]) !!}

            
                            <div class="form-group">
                    {!! Form::label('name', '名前:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}

                </div>


                <div class="form-group">
                    {!! Form::label('email', 'メールアドレス:') !!}
                    {!! Form::text('email', null, ) !!}
                    
                </div> 


 

 
            
            
     
            
            
            {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}
            
        {!! Form::close() !!}
    </div>
</div>






@endsection



