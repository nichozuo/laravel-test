<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User;
use Nichozuo\LaravelHelpers\Traits\ModelTrait;


/**
 * @method static ifWhere(array $params, string $string)
 * @method static ifWhereLike(array $params, string $string)
 * @method static ifWhereIn(array $params, string $string)
 * @method static ifRange(array $params, string $string)
 * @method static create(array $array)
 */
class Admins extends User
{
    use ModelTrait, HasFactory;
    use SoftDeletes;

    # model defines
    protected $table = 'admins';
    protected $fillable = ['username', 'password', 'real_name', 'phone', 'weight'];
    protected $hidden = ['password'];
    protected $guard_name = 'sanctum';

    # relations

    # scopes
}
