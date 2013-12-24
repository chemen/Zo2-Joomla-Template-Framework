<?php
/**
 * Zo2 (http://www.zo2framework.org)
 * A powerful Joomla template framework
 *
 * @link        http://www.zo2framework.org
 * @link        http://github.com/aploss/zo2
 * @author      ZooTemplate <http://zootemplate.com>
 * @copyright   Copyright (c) 2013 APL Solutions (http://apl.vn)
 * @license     GPL v2
 */
defined('_JEXEC') or die('Restricted access');
$content = $this->get('content');
$shortcodes = Zo2Shortcodes::getInstance();
?>
<div class="highslide-gallery">
    <h3><?php echo $this->get('title'); ?></h3>
    <?php if ($content) { ?>
        <ul>
            <?php echo $shortcodes->execute($content); ?>
        </ul>
    <?php } ?>
</div>