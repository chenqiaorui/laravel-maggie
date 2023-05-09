<?php

namespace App\Http\Controllers;

use App\Module\Base;
use App\Tasks\AutoArchivedTask;
use App\Tasks\DeleteTmpTask;
use App\Tasks\OverdueRemindEmailTask;
use Arr;
use Hhxsv5\LaravelS\Swoole\Task\Task;
use Redirect;
use Request;


/**
 * 页面
 * Class IndexController
 * @package App\Http\Controllers
 */
class IndexController 
{
    public function __invoke($method, $action = '', $child = '')
    {
        $app = $method ?: 'main';   
        if ($action) {
            $app .= "__" . $action;
        }
        if (!method_exists($this, $app)) {
            $app = method_exists($this, $method) ? $method : 'main';
        }
        return $this->$app($child);
    }
}
