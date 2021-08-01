@extends('layouts.app')

@section('content')


<div class="center jumbotron">
        <div class="text-center">
            <h1>マンション消防点検設備立ち合い状況一覧ページ</h1>
            @if (Auth::check())


            @else
            {!! link_to_route('signup.get', 'ユーザー部屋番号登録ページ', [], ['class' => 'btn btn-lg btn-primary']) !!}


            @endif

        </div>
    </div>




@foreach($users as $user)

<li><a href="/show/{{ $user->room_number }}">  名前 {{$user->name}} 部屋番号{{$user->room_number}}  






@endforeach


@endsection