<?php
if (!defined('_PS_VERSION_'))
  exit;
 
class Monform extends Module
{
public function __construct()
  {
    $this->name = 'monform';
    $this->tab = 'Others';
    $this->version = '1.0';
    $this->author = 'jr';
    $this->need_instance = 0;
    $this->ps_versions_compliancy = array('min' => '1.6', 'max' => '2.0');
    $this->dependencies = array('blockcart');
    $this->bootstrap = true;
    $this->display = 'view';
 
    parent::__construct();
 
    $this->displayName = $this->l('MONFORM');
    $this->description = $this->l('Description of my module.');
 
    $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');
 
    if (!Configuration::get('MYMODULE_NAME'))      
      $this->warning = $this->l('No name provided');
  }
public function install()
	{
  	if (parent::install() == false)
    		return false;
    	$this->registerHook('header');
  	return true;
	}
public function uninstall() {
	if (parent::uninstall()==false)
  		return false;
	return true;	
	}

public function hookDisplayHeader()
	{
  		$this->context->controller->addCSS($this->_path.'css/monform.css', 'all');
	}   
}
?>
