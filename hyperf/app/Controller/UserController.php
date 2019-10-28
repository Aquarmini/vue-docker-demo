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

namespace App\Controller;

class UserController extends Controller
{
    public function info(int $id)
    {
        return $this->response->success([
            'id' => $id,
            'name' => 'Hyperf',
        ]);
    }

    public function update(int $id)
    {
        $name = $this->request->input('name');

        return $this->response->success([
            'id' => $id,
            'name' => $name,
        ]);
    }
}
