<?php
/**
 * Zo2 (http://www.zootemplate.com/zo2)
 * A powerful Joomla template framework
 * 
 * @since       2.0.0
 * @link        http://www.zootemplate.com/zo2
 * @link        https://github.com/cleversoft/zo2
 * @author      ZooTemplate <http://zootemplate.com>
 * @copyright   Copyright (c) 2014 CleverSoft (http://cleversoft.co/)
 * @license     GPL v2
 */
defined('_JEXEC') or die('Restricted access');
?>
<div id="zo2-row-setting" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><?php echo JText::_('ZO2_ADMIN_FORMFIELD_LAYOUT_ROW_SETTINGS'); ?></h4>
            </div>
            <!-- Body -->
            <div class="modal-body">
                <!-- Name -->
                <div class="control-group">
                    <label class="control-label" for="zo2-setting-name"><?php echo JText::_('ZO2_ADMIN_LAYOUTBUILDER_LABEL_NAME'); ?></label>
                    <div class="controls">
                        <input type="text" id="zo2-setting-name" placeholder="<?php echo JText::_('ZO2_ADMIN_FORMFIELD_LAYOUT_CUSTOM_NAME'); ?>">
                    </div>
                </div>                
                <!-- Jdoc statements -->
                <div class="control-group">
                    <label class="control-label" for="zo2-setting-jdoc"><?php echo JText::_('ZO2_ADMIN_LAYOUTBUILDER_LABEL_JDOC'); ?></label>
                    <div class="controls">
                        <!-- http://docs.joomla.org/Jdoc_statements -->
                        <select id="zo2-setting-jdoc">             
                            <option value="none"><?php echo JText::_('ZO2_ADMIN_LAYOUTBUILDER_SETTINGS_JDOC_NONE'); ?></option>
                            <optgroup label="Joomla! Document">
                                <option value="component"><?php echo JText::_('ZO2_ADMIN_LAYOUTBUILDER_SETTINGS_JDOC_COMPONENT'); ?></option>
                                <option value="messsge"><?php echo JText::_('ZO2_ADMIN_LAYOUTBUILDER_SETTINGS_JDOC_MESSAGE'); ?></option>
                                <option value="modules"><?php echo JText::_('ZO2_ADMIN_LAYOUTBUILDER_SETTINGS_JDOC_MODULES'); ?></option>                                
                                <option value="module"><?php echo JText::_('ZO2_ADMIN_LAYOUTBUILDER_SETTINGS_JDOC_MODULE'); ?></option>
                            </optgroup>
                            <!-- These are extended for 3rd parties -->
                            <optgroup label="Zo2">
                                <?php $zo2DocStatements = Zo2HelperLayoutbuilder::getZo2Statements(); ?>
                                <?php foreach ($zo2DocStatements as $key => $value) : ?>
                                    <option value="<?php echo $key; ?>"><?php echo JText::_($value); ?></option>
                                <?php endforeach; ?>
                            </optgroup>                            
                        </select>
                    </div>
                </div>
                <!-- Styles -->
                <div class="control-group">
                    <label class="control-label" for="zo2-setting-style"><?php echo JText::_('ZO2_ADMIN_STYLEEDIT_STYLE'); ?></label>
                    <div class="controls">
                        <select id="zo2-setting-style">
                            <?php $styles = Zo2HelperLayoutbuilder::getModuleStyles(); ?>
                            <?php foreach ($styles as $key => $value) : ?>
                                <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="zo2-setting-offset"><?php echo JText::_('ZO2_ADMIN_FORMFIELD_LAYOUT_OFFSET'); ?></label>
                    <div class="controls">
                        <select id="zo2-setting-offset">
                            <?php foreach (Zo2HelperLayoutbuilder::getOffsets() as $key => $value) : ?>
                                <option value="<?php echo $key; ?>"><?php echo JText::_($value) . ' ' . $key ?></option>
                            <?php endforeach; ?>                           
                        </select>
                    </div>
                </div>
                <!-- Custom css -->
                <div class="control-group">
                    <label class="control-label" for="zo2-setting-css"><?php echo JText::_('ZO2_ADMIN_FORMFIELD_LAYOUT_CUSTOM_CSS'); ?></label>
                    <div class="controls">
                        <input type="text" id="zo2-setting-css" placeholder="<?php echo JText::_('ZO2_ADMIN_FORMFIELD_LAYOUT_CUSTOM_ROWCSS'); ?>">
                    </div>
                </div>
                <div id="column-responsive">
                    <div class="control-group">
                        <div class="control-label">
                            <label><?php echo JText::_('ZO2_ADMIN_ENABLE_RESPONSIVE_MOBILE'); ?></label>
                        </div>
                        <div class="controls">
                            <fieldset class="radio" id="zo2-enable-responsive-mobile">
                                <input type="radio" value="0">
                                <label>No</label>
                                <input type="radio" checked="checked" value="1">
                                <label>Yes</label>
                            </fieldset>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="control-label">
                            <label><?php echo JText::_('ZO2_ADMIN_ENABLE_RESPONSIVE_TABLET'); ?></label>
                        </div>
                        <div class="controls">
                            <fieldset class="radio" id="zo2-enable-responsive-tablet">
                                <input type="radio" value="0">
                                <label>No</label>
                                <input type="radio" checked="checked" value="1">
                                <label>Yes</label>
                            </fieldset>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="control-label">
                            <label><?php echo JText::_('ZO2_ADMIN_ENABLE_RESPONSIVE_DESTOP'); ?></label>
                        </div>
                        <div class="controls">
                            <fieldset class="radio" id="zo2-enable-responsive-desktop">
                                <input type="radio" value="0">
                                <label>No</label>
                                <input type="radio" checked="checked" value="1">
                                <label>Yes</label>
                            </fieldset>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="control-label">
                            <label><?php echo JText::_('ZO2_ADMIN_ENABLE_RESPONSIVE_LARGEDESTOP'); ?></label>
                        </div>
                        <div class="controls">
                            <fieldset class="radio" id="zo2-enable-responsive-largedesktop">
                                <input type="radio" value="0">
                                <label>No</label>
                                <input type="radio" checked="checked" value="1">
                                <label>Yes</label>
                            </fieldset>
                        </div>
                    </div>

                </div>
                <!-- end -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" onclick="zo2.layoutbuilder.saveSetting();" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>