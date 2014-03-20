<?php
namespace Smtest\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class MyServiceFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $dependency = $serviceLocator->get('useless-string');
        
        $service = new MyService();
        $service->setDependency($dependency);
        $service->setSecdependency($dependency);
        
        return $service;
    }
}