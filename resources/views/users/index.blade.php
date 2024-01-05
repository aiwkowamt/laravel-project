@extends('layouts.nav')
@section('content')
    <form method="GET" action="{{ route('users.create') }}">
        <button class="btn btn-primary">Добавить нового пользователя</button>
    </form>

    <table class="table table-bordered text-center">
        <thead>
        <tr>
            @foreach($columns as $column)
                <th scope="col" class="align-middle">{{ $column }}</th>
            @endforeach
            <th scope="col" class="align-middle">actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                @foreach($columns as $column)
                    <td class="align-middle">{{ $user->$column }}</td>
                @endforeach
                <td class="align-middle">
                    <div class="d-flex justify-content-center">
                        <form method="GET" action="{{ route('users.edit', $user->id) }}">
                            @csrf
                            <button type="submit" class="btn btn-warning btn-sm">Изменить</button>
                        </form>
                        <form method="POST" action="{{ route('users.destroy', $user->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Удалить</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
