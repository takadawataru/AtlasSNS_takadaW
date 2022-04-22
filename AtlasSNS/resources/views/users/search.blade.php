@extends('layouts.login')

@section('content')

<h2>ユーザー検索</h2>
<form action="/search_result" method="POST">
    @CSRF
    <input type="search" name=“textbox” placeholder="ユーザー名">
    <input type="submit" name="search" value="検索">
</form>

<h2>全ユーザー表示</h2>
<table class='table table-hover'>
            <tr>
                <th>ユーザー</th>
            </tr>

  @foreach ($users as $users)
   <tr>
                <td>{{ $users->username }}</td>
</tr>
</table>
 @endforeach



@endsection
