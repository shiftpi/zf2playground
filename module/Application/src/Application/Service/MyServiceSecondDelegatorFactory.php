<?php
namespace Application\Service;

use Zend\ServiceManager\DelegatorFactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class MyServiceSecondDelegatorFactory implements DelegatorFactoryInterface
{
    public function createDelegatorWithName(ServiceLocatorInterface $serviceLocator, $name, $requestedName, $callback)
    {
        $service = $callback();
        
        $service->setSecDependency('huhu');
        
        return $service;
    }
}