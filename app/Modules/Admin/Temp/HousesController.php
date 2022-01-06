<?php


namespace App\Modules\Admin\Temp;


use App\Http\Controllers\Controller;
use App\Models\Houses;
use Illuminate\Http\Request;
use Nichozuo\LaravelHelpers\Exceptions\Err;

/**
 * @intro 房子
 * Class HousesController
 * @package App\Modules\Admin
 */
class HousesController extends Controller
{
    /**
     * @intro 列表
     * @responseParams id,string,哈哈哈
     * @param Request $request
     * @return mixed
     * @throws Err
     */
    public function list(Request $request)
    {
        $params = $request->validate([
            'name' => 'nullable|string', // 名称
            'name1' => 'nullable|string', // 名称
        ]);
        return Houses::ifWhereLike($params, 'name')
            ->order()
            ->paginate($this->perPage());
    }

    /**
     * @intro 添加
     * @param Request $request
     * @return array
     */
    public function store(Request $request): array
    {
        $params = $request->validate([
            'name' => 'required|string', // 名称
            'price' => 'required|numeric', // 价格
        ]);
        Houses::unique($params, ['name'], '名称');
        Houses::create($params);
        return [];
    }

    /**
     * @intro 修改
     * @param Request $request
     * @return array
     */
    public function update(Request $request): array
    {
        $params = $request->validate([
            'id' => 'required|integer', // id
            'name' => 'required|string', // 名称
            'price' => 'required|numeric', // 价格
        ]);
        Houses::unique($params, ['name'], '名称');
        Houses::idp($params)->update($params);
        return [];
    }

    /**
     * @intro 删除
     * @param Request $request
     * @return array
     */
    public function delete(Request $request): array
    {
        $params = $request->validate([
            'id' => 'required|integer', // id
        ]);
        Houses::idp($params)->delete();
        return [];
    }
}
