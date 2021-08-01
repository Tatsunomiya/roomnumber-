@extends('layouts.app')

@section('content')


    @if(count($errors) > 0)
        <ul class="alert alert-danger" role="alert">
            @foreach ($errors->all() as $error)
                <li class="mt-4">{{ $error}}</li>
            @endforeach
        </ul>
        
    @endif
 

     <h1>部屋番号の登録ページ</h1>
     
         <div class="row">

         {!! Form::model($room,['route' => 'rooms.store']) !!}

             
                <div class="form-group">
                    {!! Form::label('room_number', '部屋番号') !!}
                    {!! Form::text('room_number', $user->room_number, ['class' => 'form-contorol' ]) !!}
                </div>
             

                 {!! Form::submit('登録', ['class' => 'btn btn-primary']) !!}
                 
            [!! Form:close() !!}
  
             
         </div>
     </div>
     
@endsection