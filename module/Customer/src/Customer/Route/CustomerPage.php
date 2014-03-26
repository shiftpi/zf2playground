<?php
namespace Customer\Route;

use Zend\Mvc\Router\Http\RouteMatch;
use Zend\Stdlib\RequestInterface as Request;
use Zend\Mvc\Router\Http\RouteInterface;

class CustomerPage implements RouteInterface
{
    /**
     * @var \Customer\Service\User
     */
    protected $userService;

    /**
     * @var string
     */
    protected $controller;

    /**
     * @var string
     */
    protected $action;

    public function __construct($userService, $controller, $action)
    {
        $this->userService = $userService;
        $this->controller = $controller;
        $this->action = $action;
    }

    public static function factory($options = array())
    {

    }

    public function match(Request $request)
    {
        $identifier = substr($request->getUri()->getPath(), 1);

        $user = $this->userService->getByIdentifier($identifier);

        if ($user === null) {
            return null;
        }

        return new RouteMatch(array(
            'controller' => $this->controller,
            'action' => $this->action,
            'user' => $user,
        ));
    }

    public function assemble(array $params = array(), array $options = array())
    {

    }

    public function getAssembledParams()
    {

    }
}