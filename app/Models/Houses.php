<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nichozuo\LaravelHelpers\Traits\ModelTrait;

/**
 * @method static ifWhere(array $params, string $string)
 * @method static ifWhereLike(array $params, string $string)
 * @method static ifWhereIn(array $params, string $string)
 * @method static ifRange(array $params, string $string)
 * @method static create(array $array)
 * @method static unique(array $params, array $array, string $string)
 * @method static idp(array $params)
*/
class Houses extends Model
{
    use ModelTrait, HasFactory;

    # model defines
    protected $table = 'houses';
    protected $comment = '房子';
    protected $fillable = ['name', 'price'];

    # relations

    # scopes
}
