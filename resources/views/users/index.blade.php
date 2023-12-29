@extends('layouts.nav')
@section('content')
    <button>Добавить</button>
    <div>
        @foreach($users as $user)
            <div>{{$user}}</div>
            <button>Изменить</button>
            <button>Удалить</button>
        @endforeach
    </div>
@endsection
