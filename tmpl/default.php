<?php 
// No direct access
defined('_JEXEC') or die; 

$itemprops = modContact_displayHelper::itemprops;
$microdata = new JMicrodata('Person');

?>

<div class="contact-details<?php echo $params->get('classSfx'); ?>" <?php echo $microdata->displayScope();?>>

<?php if(isset($contact->image) && file_exists($contact->image)): //add options to display this at top or at bottom of module. ?>
 <img src="<?php echo $contact->image; ?>" class="img-reponsive" alt="<?php echo $contact->name; ?>" itemprop="image" />
<?php endif;?>

<?php // Update to individual items instead of foreach ?>
<?php if ($params->get('showName')): ?>
	<div class="contact-name">
		<?php if($params->get('labelName')): ?>
			<span class="contact-label"><?php echo JTEXT::_('MOD_CONTACT_DISPLAY_NAME'); ?></span>
		<?php endif; ?>
			<span class="contact-item" itemprop="name"><?php echo $contact->name; ?></span>
	</div>
<?php endif; ?>
<?php if ($params->get('showAlias')): ?>
	<div class="contact-name">
		<?php if($params->get('labelAlias')): ?>
			<span class="contact-label"><?php echo JTEXT::_('MOD_CONTACT_DISPLAY_ALIAS'); ?></span>
		<?php endif; ?>
			<span class="contact-item" itemprop="alternateName"><?php echo $contact->alias; ?></span>
	</div>
<?php if ($params->get('showCon_position')): ?>
	<div class="contact-name">
		<?php if($params->get('labelPosition')): ?>
			<span class="contact-label"><?php echo JTEXT::_('MOD_CONTACT_DISPLAY_POSITION'); ?></span>
		<?php endif; ?>
			<span class="contact-item" itemprop="jobTitle"><?php echo $contact->con_position; ?></span>
	</div>
<?php endif; ?>
<?php else:
	// Get a handle to the Joomla! application object
	$application = JFactory::getApplication();
	// Add a message to the message queue
	$application->enqueueMessage(JText::_('MOD_CONTACT_DISPLAY_NOTHING_SELECTED'), 'error');
?>
	
<?php endif; ?>

<?php /* if($contacts):?>
	<?php foreach ($contacts as $key => $item):
	if($key !== "image"):
		$microItem = $microdata->content($item)->property($itemprops[$key])->display();
	?>
		<span class="<?php echo "contact-" . $key;?>">
			<?php if(!null == $params->get('display')):?>
				<span class="contact-label"><?php echo JText::_('MOD_CONTACT_DISPLAY_' . strtoupper(str_replace("con_","",$key))); ?></span>
			<?php endif; ?>
		<?php echo $microItem; ?></span><br />
	<?php endif; ?>
	<?php endforeach;?>
	<?php else: ?>
	<?php
		// Get a handle to the Joomla! application object
		$application = JFactory::getApplication();
		 
		// Add a message to the message queue
		$application->enqueueMessage(JText::_('MOD_CONTACT_DISPLAY_NOTHING_SELECTED'), 'error');
?>
<?php endif; */ ?>

</div>