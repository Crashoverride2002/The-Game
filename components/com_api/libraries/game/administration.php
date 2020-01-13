<?php
defined('_JEXEC') or die;
jimport('joomla.application.component.model');
jimport('joomla.user.authentication');

use Joomla\CMS\Factory;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Router\Route;
use Joomla\Utilities\ArrayHelper;		

class APIGameAdministration extends Game
{

    abstract public function administrate();

    public function edit() {
        $authenticate = JAuthentication::getInstance();
        $app = JFactory::getApplication();
        $user = JFactory::getUser();
        if (!Factory::getUser()->authorise('core.admin'))
        {
            throw new NotAllowed(Text::_('JERROR_ALERTNOAUTHOR'), 403);
        }
        else
        {
            $db = $this->getDbo();
            $item_id = $this->input->get('item_id',0,'int');
            $coordinate = $this->input->get('coordinate','','string');
            

        }
    }
}