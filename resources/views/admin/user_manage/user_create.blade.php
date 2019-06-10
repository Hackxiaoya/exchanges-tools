@extends('layouts.app')

@section('title','添加用户')

@section('x-body')
    <body style="background-color: white">
    <div class="layui-tab-content">
        <form class="layui-form" action="">
            <div class="layui-form-item">
                <label class="layui-form-label">用户名</label>
                <div class="layui-input-inline">
                    <input type="text" name="name" required lay-verify="required" placeholder="请输入用户名"
                           autocomplete="off" class="layui-input" onkeyup="verify_name_unique(this.value)">
                </div>
                <div class="layui-form-mid layui-word-aux"><span id="verify_name_info" style="color: red"></span></div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">密码框</label>
                <div class="layui-input-inline">
                    <input type="password" name="password" required lay-verify="required" placeholder="请输入密码"
                           autocomplete="off" class="layui-input">
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">是否管理</label>
                <div class="layui-input-inline">
                    <input type="radio" name="is_admin" value="1" title="是">
                    <input type="radio" name="is_admin" value="0" title="否" checked>
                </div>
            </div>

            <div class="layui-form-item">
                <div class="layui-input-block">
                    <a class="layui-btn" lay-submit lay-filter="formDemo" href="javascript:0;"
                       onclick="add_user()">立即提交</a>
                    <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        layui.use(['form'], function () {
            var form = layui.form;
        });

        function verify_name_unique(name) {
            var url;
            url = "{{url('/user/verify-name')}}" + '?name=' + name;

            $.get(url, function (data) {
                if (0 == data.status) {
                    $('#verify_name_info').text('该用户名已存在');
                }
            }, 'json');
        }

        function add_user() {
            var data, url;

            url = "{{url('/user')}}"
            data = $("form").serialize();

            $.post(url, data, function (data) {
                if (1 == data.status) {
                    layer.msg(data.msg)
                } else {
                    layer.alert(data.msg,{icon: 2})
                }
            }, 'json');
        }
    </script>
    </body>
@endsection