<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    protected $myservice;
    
    public function __construct($myservice)
    {
        $this->myservice = $myservice;
    }
    
    public function indexAction()
    {
        return new ViewModel(array(
            'myservice' => array(
        	   'doSomething' => $this->myservice->doSomething(),
               'dependency' => $this->myservice->getDependency(),
               'secdependency' => $this->myservice->getSecDependency(),
            ), 
        ));
    }
}
