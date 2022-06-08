@extends('layouts.login')

@section('content')

<h2>ユーザー検索</h2>
<form action="/search_result" method="POST">
    @CSRF
    <P><input type="search" name=“username” placeholder="ユーザー名"></P>
    <P><input type="submit" name="username" value="検索"></P>
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
