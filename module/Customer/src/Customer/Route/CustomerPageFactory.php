<?php
namespace Customer\Route;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class CustomerPageFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        // TODO: Get from config
        $controller = 'Customer\Controller\CustomerPage';
        $action = 'index';

        return new CustomerPage($serviceLocator->getServiceLocator()->get('Customer\Service\User'),
            $controller, $action);
    }
}