<?php

namespace Tests\Modules\Docs;

use Tests\TestCase;

class DocsControllerTest extends TestCase
{
    public function testGetMenu()
    {
        $this->go(__METHOD__, [
            'type' => 'modules'
        ]);
    }

    public function testGetContent()
    {
        $this->go(__METHOD__, [
            'type' => 'modules',
            'key' => 'Admin\\Temp\\HousesController@list'
        ]);
    }
}
