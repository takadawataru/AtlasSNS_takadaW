@extends('layouts.login')

@section('content')
<h2>機能を実装していきましょう。</h2>


<!--
  投稿フォームを設置する。
  formのurlを設定する
  web.phpに移動してコードを書く
  掛けたら、コントローラーにコードを書く。
-->

 <div class="container">
        {!! Form::open(['url' => 'post/create']) !!}
        <div class="form-group">
            {!! Form::input('text', 'newPost', null, ['required', 'class' => 'form-control', 'placeholder' => '投稿内容']) !!}
            <!---->
        </div>
        <button type="submit" class="btn btn-success pull-right">追加</button>
        {!! Form::close() !!}
 </div>

<body class="container">

    <div>
        <h2 class="page-header">投稿一覧</h2>
        <table class='table table-hover'>
            <tr>
                <th>投稿No</th>
                <th>投稿内容</th>
                <th>投稿日時</th>
                <th>投稿者</th>
                 <th></th>
            </tr>
            @foreach ($posts as $posts)
            <tr>
                <td>{{ $posts->id }}</td>
                <td>{{ $posts->post }}</td>
                <td>{{ $posts->created_at }}</td>
                <td>{{ $posts->user->username}}></td>
                 <td><a class="btn btn-primary" href="/post/{{$posts->id}}/update-form">更新</a></td>

                 <td><a class="btn btn-danger" href="/post/{{$posts->id}}/delete" onclick="return confirm('こちらの投稿を削除してもよろしいでしょうか？')">削除</a></td>
            </tr>






            @endforeach
        </table>
    </div>
    <footer>

</body>




@endsection
