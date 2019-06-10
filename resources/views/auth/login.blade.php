@extends('layouts.app')
@section('x-body')
    <body class="login-bg">

    <div class="login layui-anim layui-anim-up">
        <div class="message">x-admin2.0-管理登录</div>
        <div id="darkbannerwrap"></div>

        <form method="post" class="layui-form" action="{{ route('login') }}">
            {{csrf_field()}}
            <input name="name" placeholder="用户名" type="text" lay-verify="required" class="layui-input">
            <hr class="hr15">
            <input name="password" lay-verify="required" placeholder="密码" type="password" class="layui-input">
            <hr class="hr15">
            <input value="登录" lay-submit lay-filter="login" style="width:100%;" type="submit">
            <hr class="hr20">
        </form>
    </div>

    <script>
        $(function () {
            layui.use('form', function () {
                var form = layui.form;
                form.on('submit(login)', function (login_data) {

                });
            });
        })
    </script>
@endsection
