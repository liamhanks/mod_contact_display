<?php 
// No direct access
defined('_JEXEC') or die;

?>

<?php if($contact): ?>
	<div class="contact-details<?php echo $params->get('classSfx'); ?>" itemscope itemtype="https://schema.org/Person">

	<?php if($params->get('showImage') && file_exists(JPATH_ROOT . '\\' . str_replace('/','\\',$contact->image))): //add options to display this at top or at bottom of module. ?>
		<img src="<?php echo $contact->image; ?>" class="img-reponsive" alt="<?php echo $contact->name; ?>" itemprop="image" />
	<?php endif;?>

	<?php // Update to individual items instead of foreach ?>
	<?php if ($params->get('showName')): ?>
		<div class="contact-name">
			<?php if($params->get('labelName')): ?>
				<span class="contact-label"><?php echo JTEXT::_('MOD_CONTACT_DISPLAY_NAME'); ?></span>
			<?php endif; ?>
			<?php
				$url = JRoute::_(ContactHelperRoute::getContactRoute($params->get('name'),$contact->catid));
			?>
				<span class="contact-item" itemprop="name">
				<?php if($params->get('linkName')):?><a href="<?php echo $url; ?>"><?php echo $contact->name; ?></a>
				<?php else: ?><?php echo $contact->name; ?><?php endif; ?>
				</span>
		</div>
	<?php endif; ?>
	<?php if ($params->get('showAlias')): ?>
		<div class="contact-alias">
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
	<?php if ($params->get('showMobile')): ?>
		<div class="contact-mobile">
			<?php if($params->get('labelMobile')): ?>
				<span class="contact-label"><?php echo JTEXT::_('MOD_CONTACT_DISPLAY_MOBILE'); ?></span>
			<?php endif; ?>
				<span class="contact-item" itemprop="telephone"><?php echo $contact->mobile; ?></span>
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
	<?php if ($params->get('showEmail_to')): ?>
		<div class="contact-misc">
			<?php if($params->get('labelEmail_to')): ?>
				<span class="contact-label"><?php echo JTEXT::_('MOD_CONTACT_DISPLAY_EMAIL_TO'); ?></span>
			<?php endif; ?>
				<span class="contact-item" itemprop="email"><?php echo $contact->email_to; ?></span>
		</div>
	<?php endif; ?>
	<?php if ($params->get('showWebpage')): ?>
		<div class="contact-webpage">
			<?php if($params->get('labelWebpage')): ?>
				<span class="contact-label"><?php echo JTEXT::_('MOD_CONTACT_DISPLAY_WEBPAGE'); ?></span>
			<?php endif; ?>
				<span class="contact-item" itemprop="url"><?php echo $contact->webpage; ?></span>
		</div>
	<?php endif; ?>
	<?php if ($params->get('showMisc')): ?>
		<div class="contact-misc">
			<?php if($params->get('labelMisc')): ?>
				<span class="contact-label"><?php echo JTEXT::_('MOD_CONTACT_DISPLAY_MISC'); ?></span>
			<?php endif; ?>
				<div class="contact-item" itemprop="description"><?php echo $contact->misc; ?></div>
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