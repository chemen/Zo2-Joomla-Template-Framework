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

$jDoc = $row->get('jdoc');
$jDocName = $jDoc->get('name');
$jDocStyle = $jDoc->get('style', 'xhtml');
$rowName = $row->get('name');
$children = $row->get('children', array());
?>
<section 
    class="<?php echo $row->getClass(); ?>" 
    id="zo2-<?php echo $rowName; ?>">

    <?php
    switch ($jDoc->get('type'))
    {
        /* Modules position */
        case 'modules':
            echo '<div id="position-' . $jDocName . '" class="modules-' . Zo2HelperLayoutbuilder::countModules($jDocName) . '">';
            if ($jDocStyle == 'none' || $jDocStyle == 'Inherited')
            {
                
            } else
            {
                echo '<jdoc:include type="modules" name="' . $jDocName . '" style="' . $jDocStyle . '" />';
            }
            echo '</div>';
            break;
        case 'component':
            // Render component only one time
            if (!defined('ZO2_LAYOUTBUILDER_COMPONENT_RENDERED'))
            {
                echo '<main id="' . JFactory::getApplication()->input->getWord('option') . '">';
                echo '<jdoc:include type="component" />';
                echo '</main>';
                define('ZO2_LAYOUTBUILDER_COMPONENT_RENDERED', true);
            }
            break;
        case 'message':
            // Render message only one time
            if (!defined('ZO2_LAYOUTBUILDER_MESSAGE_RENDERED'))
            {
                echo '<jdoc:include type="message" />';
                define('ZO2_LAYOUTBUILDER_MESSAGE_RENDERED', true);
            }

            break;
        /* Custom Zo2 layout */
        default:
            $html = new Zo2Html();
            $html->set('row', $row);
            echo $html->fetch('Zo2://html/site/jdoc/' . $jDoc->get('type') . '.php');
            break;
    }
    ?>
    <?php if ($row->hasChildren()) : ?>      
        <!-- BEGIN children: <?php echo $rowName; ?> -->        
        <?php
        if (count($children) > 0) :
            {
                foreach ($children as $child)
                {
                    $child = new Zo2LayoutbuilderRow($child);
                    echo $child->render('Zo2://html/site/layout/layoutbuilder');
                }
            }
        endif;
        ?>
        <!-- END children: <?php echo $rowName; ?> -->
    <?php endif; ?>
</section>