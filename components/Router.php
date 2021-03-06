<?php

namespace app\components;

use app\components\base\Router as BaseRouter;

/**
 * Class responsible for resolve the Requests router finding the controller and action that will further be called.
 * 
 * @author chipv.bka@gmail.com
 */
class Router extends BaseRouter {

    public function __construct($owner) {
        parent::__construct($owner);
        /**
         * Implement here if you have a different route.
         */
    }

}
