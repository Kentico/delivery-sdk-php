<?php
namespace KenticoCloud\Tests\Unit;

use KenticoCloud\Delivery\Client;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    public function testCompilation()
    {
        $params['system.codename'] = 'a_chemex_method';
        $c = new Client('975bf280-fd91-488c-994c-2f04416e5ee3');
        $i = $c->getItem($params);
        $this->assertEquals('e9b81664-cbca-4f0e-b1c8-e7d862f4fd89', $i->system->id);
    }
}


