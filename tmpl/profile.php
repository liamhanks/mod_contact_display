<?php 
// No direct access
defined('_JEXEC') or die;
$tags = new JHelperTags;
?>

<?php if($contact): ?>
	<div class="contact-details panel panel-default<?php echo $params->get('classSfx'); ?>" itemscope itemtype="https://schema.org/Person">
	
	<div class="row">
		<?php if($params->get('showImage') && $params->get('positionImage') && $contact->image): //add options to display this at top or at bottom of module. ?>
			<div class="contact-image col-xs-12 col-sm-3">
				<img src="<?php echo $contact->image; ?>" class="img-reponsive" alt="<?php echo $contact->name; ?>" itemprop="image" />
			</div>
		<?php endif;?>
		<div class="contact-info col-xs-12 col-sm-9">
			<?php if ($params->get('showName') && $contact->name): ?>
				<<?php echo $params->get('header_tag');?> class="contact-name">
					<?php
						$url = JRoute::_(ContactHelperRoute::getContactRoute($params->get('name'),$contact->catid));
					?>
						<span class="contact-item" itemprop="name">
						<?php if($params->get('linkName')):?><a href="<?php echo $url; ?>"><?php echo $contact->name; ?></a>
						<?php else: ?><?php echo $contact->name; ?><?php endif; ?>
						</span>
						
						<?php if ($params->get('showCon_position') && $contact->con_position): ?>
								<br /><small><span class="contact-item" itemprop="jobTitle"><?php echo $contact->con_position; ?></span></small>
					<?php endif; ?>
				</<?php echo $params->get('header_tag');?>>
			<?php endif; ?>
		</div> <!-- /contact-info -->
	</div> <!-- /row -->
	
	<?php if ($params->get('showAddress') && $contact->address):?>
		<address class="contact-address" itemprop="address" itemscope itemtype="http://schema.org/Place">
		<?php if ($params->get('showAddress')): ?>
			<div class="contact-street-address">
				<?php if($params->get('labelAddress')): ?>
					<span class="contact-label"><?php echo JTEXT::_('MOD_CONTACT_DISPLAY_ADDRESS'); ?></span>
				<?php endif; ?>
					<span class="contact-item" itemprop="streetAddress"><?php echo $contact->address; ?></span>
			</div>
		<?php endif; ?>
		<?php if ($params->get('showSuburb') && $contact->suburb): ?>
			<div class="contact-suburb">
				<?php if($params->get('labelSuburb')): ?>
					<span class="contact-label"><?php echo JTEXT::_('MOD_CONTACT_DISPLAY_SUBURB'); ?></span>
				<?php endif; ?>
					<span class="contact-item" itemprop="addressLocality"><?php echo $contact->suburb; ?></span>
			</div>
		<?php endif; ?>
		<?php if ($params->get('showState') && $contact->state): ?>
			<div class="contact-state">
				<?php if($params->get('labelState')): ?>
					<span class="contact-label"><?php echo JTEXT::_('MOD_CONTACT_DISPLAY_STATE'); ?></span>
				<?php endif; ?>
					<span class="contact-item" itemprop="addressRegion"><?php echo $contact->state; ?></span>
			</div>
		<?php endif; ?>
		<?php if ($params->get('showPostcode') && $contact->postcode): ?>
			<div class="contact-postcode">
				<?php if($params->get('labelPostcode')): ?>
					<span class="contact-label"><?php echo JTEXT::_('MOD_CONTACT_DISPLAY_POSTCODE'); ?></span>
				<?php endif; ?>
					<span class="contact-item" itemprop="postalCode"><?php echo $contact->postcode; ?></span>
			</div>
		<?php endif; ?>
		<?php if ($params->get('showCountry') && $contact->country): ?>
			<div class="contact-country">
				<?php if($params->get('labelCountry')): ?>
					<span class="contact-label"><?php echo JTEXT::_('MOD_CONTACT_DISPLAY_COUNTRY'); ?></span>
				<?php endif; ?>
					<span class="contact-item" itemprop="addressCountry"><?php echo $contact->country; ?></span>
			</div>
		<?php endif; ?>
		</address>
	<?php endif; ?>
	<?php if ($params->get('showTelephone') && $contact->telephone): ?>
		<div class="contact-telephone">
			<?php if($params->get('labelTelephone')): ?>
				<span class="contact-label"><?php echo JTEXT::_('MOD_CONTACT_DISPLAY_TELEPHONE'); ?></span>
			<?php endif; ?>
				<span class="contact-item" itemprop="telephone">
				<?php if($params->get('linkTelephone')):?><a href="tel:<?php echo $params->get('telephonePrefix') . $contact->telephone; ?>"><?php echo $contact->telephone; ?></a>
				<?php else: ?><?php echo $contact->telephone; ?><?php endif; ?>
				</span>
		</div>
	<?php endif; ?>
	<?php if ($params->get('showMobile') && $contact->mobile): ?>
		<div class="contact-mobile">
			<?php if($params->get('labelMobile')): ?>
				<span class="contact-label"><?php echo JTEXT::_('MOD_CONTACT_DISPLAY_MOBILE'); ?></span>
			<?php endif; ?>
				<span class="contact-item" itemprop="telephone">
				<?php if($params->get('linkMobile')):?><a href="tel:<?php echo $params->get('mobilePrefix') . $contact->mobile; ?>"><?php echo $contact->mobile; ?></a>
				<?php else: ?><?php echo $contact->mobile; ?><?php endif; ?>
				</span>
		</div>
	<?php endif; ?>
	<?php if ($params->get('showFax') && $contact->fax): ?>
		<div class="contact-fax">
			<?php if($params->get('labelFax')): ?>
				<span class="contact-label"><?php echo JTEXT::_('MOD_CONTACT_DISPLAY_FAX'); ?></span>
			<?php endif; ?>
				<span class="contact-item" itemprop="faxNumber"><?php echo $contact->fax; ?></span>
		</div>
	<?php endif; ?>
	<?php if ($params->get('showEmail_to') && $contact->email_to): ?>
		<div class="contact-misc">
			<?php if($params->get('labelEmail_to')): ?>
				<span class="contact-label"><?php echo JTEXT::_('MOD_CONTACT_DISPLAY_EMAIL_TO'); ?></span>
			<?php endif; ?>
				<span class="contact-item" itemprop="email">
				<?php if($params->get('linkEmail_to')):?><a href="<?php echo $contact->email_to; ?>"><?php echo $contact->email_to; ?></a>
				<?php else: ?><?php echo $contact->email_to; ?><?php endif; ?>
				</span>
		</div>
	<?php endif; ?>
	<?php if ($params->get('showWebpage') && $contact->webpage): ?>
		<div class="contact-webpage">
			<?php if($params->get('labelWebpage')): ?>
				<span class="contact-label"><?php echo JTEXT::_('MOD_CONTACT_DISPLAY_WEBPAGE'); ?></span>
			<?php endif; ?>
				<span class="contact-item" itemprop="url">
				<?php
					$displayUrl = parse_url($contact->webpage);
					unset($displayUrl['scheme']);
					$displayUrl = implode('',$displayUrl);
				?>
				<?php if($params->get('linkWebpage')):?><a href="<?php echo $contact->webpage; ?>"><?php echo $displayUrl; ?></a>
				<?php else: ?><?php echo $contact->webpage; ?><?php endif; ?>
				</span>
		</div>
	<?php endif; ?>
	<?php if ($params->get('showMisc') && $contact->misc): ?>
		<div class="contact-misc">
			<?php if($params->get('labelMisc')): ?>
				<span class="contact-label"><?php echo JTEXT::_('MOD_CONTACT_DISPLAY_MISC'); ?></span>
			<?php endif; ?>
				<div class="contact-item" itemprop="description"><?php echo $contact->misc; ?></div>
		</div>
	<?php endif; ?>
	<?php if ($params->get('listTags') && !$params->get('positionTags') && !empty($tags->getItemTags("com_contact.contact",$params->get('name')))): ?>
		<div class="contact-tags">
			<?php 
				$tags->tagLayout = new JLayoutFile('joomla.content.tags');
				echo $tags->tagLayout->render($tags->itemTags);
			?>
		</div>
	<?php endif; ?>
	<?php if($params->get('showImage') && !$params->get('positionImage') && $contact->image): //add options to display this at top or at bottom of module. ?>
		<img src="<?php echo $contact->image; ?>" class="img-reponsive" alt="<?php echo $contact->name; ?>" itemprop="image" />
	<?php endif;?>
</div>
<?php else:
	// Get a handle to the Joomla! application object
	$application = JFactory::getApplication();
	// Add a message to the message queue
	$application->enqueueMessage(JText::_('MOD_CONTACT_DISPLAY_NOTHING_SELECTED'), 'error');
?>
<?php endif; ?>