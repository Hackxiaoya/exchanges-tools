@extends('layouts.app')

@section('title','用户管理')

@section('x-body')
    <body style="background-color: white">

    @extends('layouts.refresh')

    <div class="layui-tab-content">
        <button class="layui-btn" onclick="create_user()">添加用户</button>
        <table class="layui-table">
            <thead>
            <tr>
                <td>昵称</td>
                <td>注册时间</td>
                <td>修改时间</td>
                <td>操作</td>
            </tr>
            </thead>
            <tbody>
            @foreach($users->items() as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>
                    <td>
                        <a class="layui-btn" onclick=edit_user("{{$user->id}}")>修改</a>
                        @if(!$user->isAdmin())
                            @if($user->idDeleted())
                                <a class="layui-btn layui-btn-danger">禁用</a>
                            @else
                                <a class="layui-btn layui-btn-danger">启用</a>
                            @endif
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <script>
        function create_user() {
            layer.open({
                type: 2,
                title: '添加用户',
                shadeClose: true,
                shade: 0.8,
                area: ['900px', '600px'],
                content: "{{url('user/create')}}"
            });
        }

        function edit_user(id) {
            layer.open({
                type: 2,
                title: '编辑用户',
                shadeClose: true,
                shade: 0.8,
                area: ['900px', '600px'],
                content: "{{url('user/')}}" + '/' + id
            });
        }
    </script>
    </body>
@endsection