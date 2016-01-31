<?php
namespace Core\Controller;

use Core\Controller;
use Core\View\Api as ApiView;

/**
 * Class Api 接口端请求控制器基类
 *
 * @package Core\Controller
 * @author  Lancer He <lancer.he@gmail.com>
 */
class Api extends Controller {
    /**
     * init
     */
    public function init() {
        parent::init();
        $this->setView(ApiView::create());
    }
}