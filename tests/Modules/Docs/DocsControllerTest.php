<?php

namespace Tests\Modules\Docs;

use Tests\TestCase;

class DocsControllerTest extends TestCase
{
    public function testGetMenu()
    {
        $this->go(__METHOD__, [
            'type' => 'database'
        ]);
    }

    public function testGetContent()
    {
        $this->go(__METHOD__, [
            'type' => 'readme',
            'key' => '/1 test/haha/haha.md'
        ]);
    }
}
