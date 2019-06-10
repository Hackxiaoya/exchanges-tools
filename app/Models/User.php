<?php

namespace App\Models;

use App\Exceptions\ModelException;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'is_admin', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_admin' => 'boolean'
    ];

    const IS_ADMIN = true;

    /**
     * 判断是否是管理员
     *
     * @return bool
     */
    public function isAdmin()
    {
        return $this->is_admin == true;
    }

    /**
     * 用户是否被软删除
     *
     * @return bool
     */
    public function idDeleted()
    {
        return $this->deleted_at === null;
    }

    /**
     * 验证用户名是否重复
     *
     * @return bool
     */
    protected function verifyUsernameUnique()
    {
        if (empty($this->id)) {
            $re = !empty(User::query()->where('name', $this->name)->first());
        } else {
            $re = !empty(User::query()->where('name', $this->name)->where('id', '!=', $this->id)->first());
        }

        return $re;
    }

    /**
     * hash password
     */
    protected function HashPassword()
    {
        if (array_key_exists('password', $this->attributes)) {
            $this->attributes['password'] = Hash::make($this->attributes['password']);
        }
    }

    protected static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub

        self::saving(function (User $user) {
            if ($user->verifyUsernameUnique()) {
                throw new ModelException('该用户名已存在');
            }
            $user->HashPassword();
        });
    }
}
