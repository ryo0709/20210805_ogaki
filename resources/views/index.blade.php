@extends('layouts.default')
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>COACHTECH</title>
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>


<body>
  @section('title', 'Todo List')

  @section('content')
  @if (count($errors) > 0)
  <ul>
    @foreach ($errors->all() as $error)
    <li>
      {{$error}}
    </li>
    @endforeach
  </ul>
  @endif
  <form action="/create" method="POST" class="todo-create">
    @csrf
    <input type="text" name="content" class="input-todo-create">
    <input type="submit" value="追加" class="btn-todo-create">
  </form>
  <div class="todo-list">
    <table>
      <tr>
        <th>作成日</th>
        <th>タスク名</th>
        <th>更新</th>
        <th>削除</th>
      </tr>
      @foreach ($todos as $todo)
      <tr>
        <td>
          {{$todo->created_at}}
        </td>
        </form>
        <td>
          <form action="/update/{{ $todo->id }}" method="POST">
            <input type="text" name="content" value="{{$todo->content}}" class="input-todo-update">
        </td>
        <td>
          @csrf
          <button type="submit" class="btn-todo-update">更新</button>
          </form>
        </td>
        <form action="/delete/{{ $todo->id }}" method="POST">
          <td>
            @csrf
            <input type="submit" name="content" value="削除" class="btn-todo-delete">
        </form>
        </td>
      </tr>
      @endforeach
    </table>
    </form>
    @endsection
  </div>

</body>

</html>