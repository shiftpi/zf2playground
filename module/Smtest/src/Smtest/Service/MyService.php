<?php
namespace Smtest\Service;

class MyService
{
    protected $dependency;
    protected $secdependency;
    
    public function setDependency($dependency)
    {
        $this->dependency = $dependency;
    }
    
    public function getDependency()
    {
        return $this->dependency;
    }
    
    public function setSecdependency($secdependency)
    {
        $this->secdependency = $secdependency;
    }
    
    public function getSecdependency()
    {
        return $this->secdependency;
    }
    
    public function doSomething()
    {
        if ($this->dependency === null || $this->secdependency === null) {
            throw new \Exception('Dependencies not set');
        }
        
        return rand();
    }
}