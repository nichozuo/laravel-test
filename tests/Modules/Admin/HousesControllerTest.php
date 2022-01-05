<?php

namespace Tests\Modules\Admin;


use Tests\TestCase;

class HousesControllerTest extends TestCase
{

    public function testStore()
    {
        $this->go(__METHOD__, [
            'name' => '111',
            'price' => 222,
        ]);
    }

    public function testList()
    {
        $this->go(__METHOD__);
    }

    public function testUpdate()
    {

    }

    public function testDelete()
    {

    }
}
