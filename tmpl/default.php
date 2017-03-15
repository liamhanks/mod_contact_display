<?php 
// No direct access
defined('_JEXEC') or die; 

$itemprops = modContact_displayHelper::itemprops;
$microdata = new JMicrodata('Person');

?>

<?php if($contact): ?>
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
	<?php endif; ?>
	<?php if ($params->get('showCon_position')): ?>
		<div class="contact-name">
			<?php if($params->get('labelPosition')): ?>
				<span class="contact-label"><?php echo JTEXT::_('MOD_CONTACT_DISPLAY_POSITION'); ?></span>
			<?php endif; ?>
				<span class="contact-item" itemprop="jobTitle"><?php echo $contact->con_position; ?></span>
		</div>
	<?php endif; ?>
	<?php if ($params->get('showAddress')):?>
		<address class="contact-address" itemprop="address" itemscope itemtype="http://schema.org/Place">
		<?php if ($params->get('showAddress')): ?>
			<div class="contact-street-address">
				<?php if($params->get('labelAddress')): ?>
					<span class="contact-label"><?php echo JTEXT::_('MOD_CONTACT_DISPLAY_ADDRESS'); ?></span>
				<?php endif; ?>
					<span class="contact-item" itemprop="streetAddress"><?php echo $contact->address; ?></span>
			</div>
		<?php endif; ?>
		<?php if ($params->get('showSuburb')): ?>
			<div class="contact-suburb">
				<?php if($params->get('labelSuburb')): ?>
					<span class="contact-label"><?php echo JTEXT::_('MOD_CONTACT_DISPLAY_SUBURB'); ?></span>
				<?php endif; ?>
					<span class="contact-item" itemprop="addressLocality"><?php echo $contact->suburb; ?></span>
			</div>
		<?php endif; ?>
		<?php if ($params->get('showState')): ?>
			<div class="contact-state">
				<?php if($params->get('labelState')): ?>
					<span class="contact-label"><?php echo JTEXT::_('MOD_CONTACT_DISPLAY_STATE'); ?></span>
				<?php endif; ?>
					<span class="contact-item" itemprop="addressRegion"><?php echo $contact->state; ?></span>
			</div>
		<?php endif; ?>
		<?php if ($params->get('showCountry')): ?>
			<div class="contact-country">
				<?php if($params->get('labelCountry')): ?>
					<span class="contact-label"><?php echo JTEXT::_('MOD_CONTACT_DISPLAY_COUNTRY'); ?></span>
				<?php endif; ?>
					<span class="contact-item" itemprop="addressCountry"><?php echo $contact->country; ?></span>
			</div>
		<?php endif; ?>
		<?php if ($params->get('showPostcode')): ?>
			<div class="contact-postcode">
				<?php if($params->get('labelPostcode')): ?>
					<span class="contact-label"><?php echo JTEXT::_('MOD_CONTACT_DISPLAY_POSTCODE'); ?></span>
				<?php endif; ?>
					<span class="contact-item" itemprop="postalCode"><?php echo $contact->postcode; ?></span>
			</div>
		<?php endif; ?>
		</address>
	<?php endif; ?>
	<?php if ($params->get('showTelephone')): ?>
		<div class="contact-telephone">
			<?php if($params->get('labelTelephone')): ?>
				<span class="contact-label"><?php echo JTEXT::_('MOD_CONTACT_DISPLAY_TELEPHONE'); ?></span>
			<?php endif; ?>
				<span class="contact-item" itemprop="telephone"><?php echo $contact->telephone; ?></span>
		</div>
	<?php endif; ?>
	<?php if ($params->get('showFax')): ?>
		<div class="contact-fax">
			<?php if($params->get('labelFax')): ?>
				<span class="contact-label"><?php echo JTEXT::_('MOD_CONTACT_DISPLAY_FAX'); ?></span>
			<?php endif; ?>
				<span class="contact-item" itemprop="faxNumber"><?php echo $contact->fax; ?></span>
		</div>
	<?php endif; ?>
</div>
<?php else:
	// Get a handle to the Joomla! application object
	$application = JFactory::getApplication();
	// Add a message to the message queue
	$application->enqueueMessage(JText::_('MOD_CONTACT_DISPLAY_NOTHING_SELECTED'), 'error');
?>
<?php endif; ?>