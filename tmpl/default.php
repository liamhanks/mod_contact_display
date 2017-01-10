<?php 
// No direct access
defined('_JEXEC') or die; 

$itemprops = modContact_displayHelper::itemprops;
$microdata = new JMicrodata('Person');


?>

<div class="contact-details<?php echo $params->get('classSfx'); ?>" <?php echo $microdata->displayScope();?>>


<?php if($contacts):?>
	<?php foreach ($contacts as $key => $item):
		$microItem = $microdata->content($item)->property($itemprops[$key])->display();
	?>
		<span class="<?php echo "contact-" . $key;?>">
			<?php if(!null == $params->get('display')):?>
				<span class="contact-label"><?php echo JText::_('MOD_CONTACT_DISPLAY_' . strtoupper(str_replace("con_","",$key))); ?></span>
			<?php endif; ?>
		<?php echo $microItem; ?></span><br />

	<?php endforeach;?>
	<?php else: ?>
	<?php
		// Get a handle to the Joomla! application object
		$application = JFactory::getApplication();
		 
		// Add a message to the message queue
		$application->enqueueMessage(JText::_('MOD_CONTACT_DISPLAY_NOTHING_SELECTED'), 'error');
?>
<?php endif; ?>

</div>