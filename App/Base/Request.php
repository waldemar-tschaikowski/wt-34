<?php
/**
 * @author waldemar.tschaikowsk
 * @version $Id$
 */

namespace App\Base;

class Request
{
    private $post;
    private $get;

    private $action;
    private $controller;

    public function __construct()
    {
        $this->post = $_POST;
        $this->get = $_GET;

        $_SERVER['REQUEST_URI'] = ltrim($_SERVER['REQUEST_URI'], '/');

        $urlPath = explode('/', $_SERVER['REQUEST_URI']);

        if (isset($urlPath[0]) && preg_match('/^\w+$/', $urlPath[0])) {
            $this->controller = ucfirst($urlPath[0]) . 'Controller';
        }

        if (isset($urlPath[1]) && preg_match('/^\w+$/', $urlPath[1])) {
            $this->action = $urlPath[1];
        }
    }

    public function getController()
    {
        return $this->controller;
    }

    public function getAction()
    {
        return $this->action;
    }
}