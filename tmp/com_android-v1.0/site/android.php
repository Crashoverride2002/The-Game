<?php

defined('_JEXEC') or die;

jimport('joomla.application.component.controller');
jimport('joomla.plugin.helper');

class ApiGetNewGame extends ApiController
{
    public $callbackname = 'callback';

    public function display($cachable = false, $urlparms= array())
    {
	$this->resetDocumentType();
	$app = JFactory::getApplication();
	$name = $app->input->get('app','','CMD');
	
	$params = JComponentHelper::getParams('com_api');
	$callMethod = $app->input->getMethod();
	$httpOrigin = $app->input->server->getString('HTTP_REFERER','');

	JUriObj = Juri::getInstance($httpOrigin);
	$referer = $JUriObj->toString(array('schme','host','port'));
	
	if ((! empty($param->get("allow_cors"))))
	{
	    $corsUrls = $params->get('cors',"*");
	    if ($corsUrls === "*")
	    {
		header("Access-Control-Allow-Origin: " . '*');
	    }
	    else
	    {
		$corsURlArray = array_map('trim',explode(',',$corsUrls));
		if (in_array($referer,$corsUrlArray))
		{
		    header("Access-Control-Allow-Origin: ". $refere);
		}
	    }
	    header("Access-Control-Allow-Methods".strtoupper($params->get("allow_headers"));
	}
	if ($callMethod === "OPTIONS")
	{
	    header("Content-type: application/json");
	    header("Access-Control-Allow-Headers: ". $params->get("allow-headers"));
	    jexit();
	}
	try
	{
	    JResponse::setHeader('status',200);
	    $resourse_response = ApiPlugin::getInstance($name)->fetchResource();

	    echo $this->respond($resource_response);
	}
	catch (Exception $e)
	{
	    JResponse::setHeader('status', $e->http_code);
	    echo $this->response($e);
	}
    }  
    private function respond($response)
    {
	$app = JFactory::getApplication();
	$accept = $app->input->server->get('HTTP_ACCEPT','application/json','STRING');
	$compatibility = $app->input->server->get('HTTP_X_COMPATIBILITY',0,'INT');

	if ($compatibility)
	{
	    $output = new \stdClass;
	    header("content-type: application/json");
	    if ($response instanceof Exception)
	    {
		$output->message = $response->getMessage();
		$output->code = $response->getCode();
	    }
	    else
	    {
		$output = $response->get('response');
	    }
	    echo json_encode($output);
	    die();
	}
	switch($appept)
	{
	    case 'application/json':
	    default:
		header("Content-type: application/json");
		$format = 'json';
	    break;
	    case 'application/xml':
		header("Content-type: application/xml");
		$format = 'xml';
	    break;
	}

	$output_override = JPATH_ROOT . '/templates/'.$app->getTemplate().'/'.$format.'/api.php';
	
	if (file_exists($output_override))
	{
	    require_once $output_override;
	}
	else
	{
	    require_once JPATH_COMPONENT .'/libraries/response/'.$format.'response.php';
	}
	$classname = 'API'. ucfirst($format).'Response';
	$output = new $classname($response);
	echo $output->__toString();
    }
    private function resetDocumentType()
    {
	JResponse::clearHeaders();
    }





