<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

/**
 * Class UserManageController
 * @package App\Http\Controllers\Admin
 */
class UserManageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $users = User::paginate(15);
        return view('admin.user_manage.user_index', compact('users'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.user_manage.user_create');
    }

    /**
     * 添加用户
     *
     * @param Request $request
     * @return array
     */
    public function addUser(Request $request)
    {
        try {
            if (empty($name = $request->input('name'))) {
                throw new \Exception('请输入名字');
            }
            if (empty($password = $request->input('password'))) {
                throw new \Exception('请输入密码');
            }

            User::create(
                [
                    'name' => $name,
                    'password' => $password,
                    'is_admin' => $request->input('is_admin')
                ]
            );
            return [
                'status' => 1,
                'msg' => '添加成功'
            ];
        } catch (\Exception $e) {
            return [
                'status' => 0,
                'msg' => $e->getMessage()
            ];
        }
    }

    /**
     * 验证用户名是否重复
     *
     * @param Request $request
     * @return array
     */
    public function verifyNameUnique($userID, Request $request)
    {
        $name = $request->input('name');

        if (!empty($userID)) {
            $user = User::query()->where('name', $name)->where('id', '<>', $userID)->first();
        } else {
            $user = User::query()->where('name', $name)->first();
        }

        if (empty($user)) {
            $res = [
                'status' => 1,
                'msg' => 'ok'
            ];
        } else {
            $res = [
                'status' => 0,
                'msg' => '改用户名已存在！'
            ];
        }

        return $res;
    }

    /**
     * @param $userID
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($userID)
    {
        $user = User::find($userID);

        return view('admin.user_manage.user_edit', compact('user'));
    }

    public function store($id, Request $request)
    {
        try {
            /** @var User $user */
            $user = User::findOrFail($id);
            $user->update($request->all());
            $res = [
                'status' => 1,
                'msg' => '跟新成功'
            ];
        } catch (\Exception $exception) {
            $res = [
                'status' => 0,
                'msg' => '改用户名已存在'
            ];
        }

        return $res;
    }
}