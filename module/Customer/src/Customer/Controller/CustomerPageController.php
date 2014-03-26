<?php
namespace Customer\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class CustomerPageController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel(array(
           'name' => $this->params()->fromRoute('user'),
        ));
    }
}