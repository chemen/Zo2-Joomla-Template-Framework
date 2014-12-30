<?php

/**
 * Zo2 (http://www.zootemplate.com/zo2)
 * A powerful Joomla template framework
 *
 * @link        http://www.zootemplate.com/zo2
 * @link        https://github.com/cleversoft/zo2
 * @author      ZooTemplate <http://zootemplate.com>
 * @copyright   Copyright (c) 2014 CleverSoft (http://cleversoft.co/)
 * @license     GPL v2
 */
defined('_JEXEC') or die('Restricted access');

/**
 * Class exists checking
 */
if (!class_exists('Zo2Profile'))
{

    /**
     * Zo2 profile object
     */
    class Zo2Profile extends JRegistry
    {

        public function loadFile($file, $format = 'JSON', $options = array())
        {
            parent::loadFile($file, $format = 'JSON', $options = array());
            // Display message to know which profile file was loaded
            if (Zo2Framework::isDevelopmentMode())
            {
                Zo2Framework::message('Loaded profile :' . $file);
            }
        }

    }

}