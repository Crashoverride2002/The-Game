<?php
defined('_JEXEC') or die;
jimport('joomla.application.component.model');
jimport('joomla.user.authentication');
jimport('joomla.filesystem.file');

use Joomla\CMS\Factory;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Router\Route;
use Joomla\Utilities\ArrayHelper;		

class APIGameAdministration extends Game
{

    abstract public function administrate();
    public function get_game_list()
    {

    }
    public function upload_game()

        $authenticate = JAuthentication::getInstance();
        $app = JFactory::getApplication();
        $user = JFactory::getUser();
        if (!Factory::getUser()->authorise('core.admin'))
        {
            throw new NotAllowed(Text::_('JERROR_ALERTNOAUTHOR'),403);
        }
        else
        {
            $db = $this->getDbo();
            $fk_user_id = $this->input->get('user_id',0,'int');
            $game_name = $this->input->get('title','','string');
            $video_name = $this->input->get('video_name','','string');
            $video_data = $this->input->get('video_data','','string');
            if (!empty($video_data))
            {
                $filename = JFile::makeSafe($video_name);
                $dest = DS."uploads".DS.$filename;
                JFile::write($filename,$video_data);
                return 
            }
        }
    }
    
}