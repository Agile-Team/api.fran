<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Usuarios\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
    	error_reporting(E_ALL|E_STRICT);
		ini_set('display_errors', 'on');

		$id = $this->params()->fromRoute('id');
		$action = $this->params()->fromRoute('action');
		$url = "http://localhost:8888/llx_user".($id?"/$id":"");
		
		$ch = curl_init($url);
		curl_setopt ($ch , CURLOPT_PORT , 8888 );
		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);	
		$usuario = curl_exec($ch);
		curl_close($ch);
		$viewModel = new ViewModel(array('usuario'=>(array)json_decode($usuario)));
		$viewModel->setTerminal(true);
    	return $viewModel;
    }

    public function createAction(){
    	error_reporting(E_ALL|E_STRICT);
		ini_set('display_errors', 'on');

		if ($_POST)
		{
			$url = "http://localhost:8888/llx_user";
			$ch = curl_init($url);
			
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt ($ch , CURLOPT_PORT , 8888 );
			curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);	
			curl_setopt($ch,CURLOPT_POSTFIELDS, json_encode($_POST));
			curl_setopt ($ch, CURLOPT_HTTPHEADER, Array("Content-Type: application/json"));
			$usuario = curl_exec($ch);
			curl_close($ch);
			return new JsonModel(array('respuesta de REST'=>$usuario));
		}
    	$view =  new ViewModel();
    	$view->setTerminal(true);
    	return $view;
    }
}
	