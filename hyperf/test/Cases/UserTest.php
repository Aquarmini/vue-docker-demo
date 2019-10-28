<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace HyperfTest\Cases;

use HyperfTest\HttpTestCase;

/**
 * @internal
 * @coversNothing
 */
class UserTest extends HttpTestCase
{
    public function testUserInfo()
    {
        $res = $this->get('/user/1');

        $this->assertSame(0, $res['code']);
        $this->assertSame(['id' => 1, 'name' => 'Hyperf'], $res['data']);
    }

    public function testUserUpdate()
    {
        $res = $this->json('/user/1', [
            'name' => 'limx',
        ]);

        $this->assertSame(0, $res['code']);
        $this->assertSame(['id' => 1, 'name' => 'limx'], $res['data']);
    }
}
