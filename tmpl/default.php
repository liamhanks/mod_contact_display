<?php 
// No direct access
defined('_JEXEC') or die;
$tags = new JHelperTags;
?>

<?php if($contact): ?>
	<div class="contact-display contact-display-details<?php echo $params->get('moduleclass_sfx'); ?>" itemscope itemtype="https://schema.org/Person">

	<?php if($params->get('showImage') && $params->get('positionImage') && $contact->image): ?>
		<div class="contact-display-image">
			<img src="<?php echo $contact->image; ?>" class="img-responsive" alt="<?php echo $contact->name; ?>" itemprop="image" />
		</div>
	<?php endif;?>
	<?php if ($params->get('listTags') && $params->get('positionTags') && !empty($tags->getItemTags("com_contact.contact",$params->get('name')))): ?>
		<div class="contact-display-tags">
			<?php 
				$tags->tagLayout = new JLayoutFile('joomla.content.tags');
				echo $tags->tagLayout->render($tags->itemTags);
			?>
		</div>
	<?php endif; ?>
	<?php if ($params->get('showName') && $contact->name): ?>
		<div class="contact-display-name">
			<?php if($params->get('labelName')): ?>
				<span class="contact-display-label"><?php echo JTEXT::_('MOD_CONTACT_DISPLAY_NAME'); ?></span>
			<?php endif; ?>
			<?php
				$url = JRoute::_(ContactHelperRoute::getContactRoute($params->get('name'),$contact->catid));
			?>
				<span class="contact-display-item" itemprop="name">
				<?php if($params->get('linkName')):?><a href="<?php echo $url; ?>"><?php echo $contact->name; ?></a>
				<?php else: ?><?php echo $contact->name; ?><?php endif; ?>
				</span>
		</div>
	<?php endif; ?>
	<?php if ($params->get('showAlias') && $contact->aliass): ?>
		<div class="contact-display-alias">
			<?php if($params->get('labelAlias')): ?>
				<span class="contact-display-label"><?php echo JTEXT::_('MOD_CONTACT_DISPLAY_ALIAS'); ?></span>
			<?php endif; ?>
				<span class="contact-display-item" itemprop="alternateName"><?php echo $contact->alias; ?></span>
		</div>
	<?php endif; ?>
	<?php if ($params->get('showCon_position') && $contact->con_position): ?>
		<div class="contact-display-position">
			<?php if($params->get('labelPosition')): ?>
				<span class="contact-display-label"><?php echo JTEXT::_('MOD_CONTACT_DISPLAY_POSITION'); ?></span>
			<?php endif; ?>
				<span class="contact-display-item" itemprop="jobTitle"><?php echo $contact->con_position; ?></span>
		</div>
	<?php endif; ?>
	<?php if ($params->get('showAddress') && $contact->address):?>
		<address class="contact-display-address" itemprop="address" itemscope itemtype="http://schema.org/Place">
		<?php if ($params->get('showAddress')): ?>
			<div class="contact-display-street-address">
				<?php if($params->get('labelAddress')): ?>
					<span class="contact-display-label"><?php echo JTEXT::_('MOD_CONTACT_DISPLAY_ADDRESS'); ?></span>
				<?php endif; ?>
					<span class="contact-display-item" itemprop="streetAddress"><?php echo nl2br($contact->address); ?></span>
			</div>
		<?php endif; ?>
		<?php if ($params->get('showSuburb') && $contact->suburb): ?>
			<div class="contact-display-suburb">
				<?php if($params->get('labelSuburb')): ?>
					<span class="contact-display-label"><?php echo JTEXT::_('MOD_CONTACT_DISPLAY_SUBURB'); ?></span>
				<?php endif; ?>
					<span class="contact-display-item" itemprop="addressLocality"><?php echo $contact->suburb; ?></span>
			</div>
		<?php endif; ?>
		<?php if ($params->get('showState') && $contact->state): ?>
			<div class="contact-display-state">
				<?php if($params->get('labelState')): ?>
					<span class="contact-display-label"><?php echo JTEXT::_('MOD_CONTACT_DISPLAY_STATE'); ?></span>
				<?php endif; ?>
					<span class="contact-display-item" itemprop="addressRegion">(<?php echo $contact->state; ?>)</span>
			</div>
		<?php endif; ?>
		<?php if ($params->get('showPostcode') && $contact->postcode): ?>
			<div class="contact-display-postcode">
				<?php if($params->get('labelPostcode')): ?>
					<span class="contact-display-label"><?php echo JTEXT::_('MOD_CONTACT_DISPLAY_POSTCODE'); ?></span>
				<?php endif; ?>
					<span class="contact-display-item" itemprop="postalCode"><?php echo $contact->postcode; ?></span>
			</div>
		<?php endif; ?>
		<?php if ($params->get('showCountry') && $contact->country): ?>
			<div class="contact-display-country">
				<?php if($params->get('labelCountry')): ?>
					<span class="contact-display-label"><?php echo JTEXT::_('MOD_CONTACT_DISPLAY_COUNTRY'); ?></span>
				<?php endif; ?>
					<span class="contact-display-item" itemprop="addressCountry"><?php echo $contact->country; ?></span>
			</div>
		<?php endif; ?>
		</address>
	<?php endif; ?>
	<?php if ($params->get('showTelephone') && $contact->telephone): ?>
		<div class="contact-display-telephone">
			<?php if($params->get('labelTelephone')): ?>
				<span class="contact-display-label"><?php echo JTEXT::_('MOD_CONTACT_DISPLAY_TELEPHONE'); ?></span>
			<?php endif; ?>
				<span class="contact-display-item" itemprop="telephone">
				<?php if($params->get('linkTelephone')):
					$telLink = preg_replace("/, poste [0-9]{4}/","",$contact->telephone);
				?><a href="tel:<?php echo $params->get('telephonePrefix') . $telLink; ?>"><?php echo $contact->telephone; ?></a>
				<?php else: ?><?php echo $contact->telephone; ?><?php endif; ?>
				</span>
		</div>
	<?php endif; ?>
	<?php if ($params->get('showMobile') && $contact->mobile): ?>
		<div class="contact-display-mobile">
			<?php if($params->get('labelMobile')): ?>
				<span class="contact-display-label"><?php echo JTEXT::_('MOD_CONTACT_DISPLAY_MOBILE'); ?></span>
			<?php endif; ?>
				<span class="contact-display-item" itemprop="telephone">
				<?php if($params->get('linkMobile')):?><a href="tel:<?php echo $params->get('mobilePrefix') . $contact->mobile; ?>"><?php echo $contact->mobile; ?></a>
				<?php else: ?><?php echo $contact->mobile; ?><?php endif; ?>
				</span>
		</div>
	<?php endif; ?>
	<?php if ($params->get('showFax') && $contact->fax): ?>
		<div class="contact-display-fax">
			<?php if($params->get('labelFax')): ?>
				<span class="contact-display-label"><?php echo JTEXT::_('MOD_CONTACT_DISPLAY_FAX'); ?></span>
			<?php endif; ?>
				<span class="contact-display-item" itemprop="faxNumber"><?php echo $contact->fax; ?></span>
		</div>
	<?php endif; ?>
	<?php if ($params->get('showEmail_to') && $contact->email_to): ?>
		<div class="contact-display-email">
			<?php if($params->get('labelEmail_to')): ?>
				<span class="contact-display-label"><?php echo JTEXT::_('MOD_CONTACT_DISPLAY_EMAIL_TO'); ?></span>
			<?php endif; ?>
				<span class="contact-display-item" itemprop="email">
				<?php 
				$email_link = $params->get('linkEmail_to') ? "1" : "0";
				echo JHtml::_('email.cloak',$contact->email_to,$email_link); ?>
				</span>
		</div>
	<?php endif; ?>
	<?php if ($params->get('showWebpage') && $contact->webpage): ?>
		<div class="contact-display-webpage">
			<?php if($params->get('labelWebpage')): ?>
				<span class="contact-display-label"><?php echo JTEXT::_('MOD_CONTACT_DISPLAY_WEBPAGE'); ?></span>
			<?php endif; ?>
				<span class="contact-display-item" itemprop="url">
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
		<div class="contact-display-misc">
			<?php if($params->get('labelMisc')): ?>
				<span class="contact-display-label"><?php echo JTEXT::_('MOD_CONTACT_DISPLAY_MISC'); ?></span>
			<?php endif; ?>
				<div class="contact-display-item" itemprop="description"><?php echo $contact->misc; ?></div>
		</div>
	<?php endif; ?>
	<?php if ($params->get('listTags') && !$params->get('positionTags') && !empty($tags->getItemTags("com_contact.contact",$params->get('name')))): ?>
		<div class="contact-display-tags">
			<?php 
				$tags->tagLayout = new JLayoutFile('joomla.content.tags');
				echo $tags->tagLayout->render($tags->itemTags);
			?>
		</div>
	<?php endif; ?>
	<?php if($params->get('showImage') && !$params->get('positionImage') && $contact->image): ?>
		<div class="contact-display-image">
			<img src="<?php echo $contact->image; ?>" class="contact-image img-responsive" alt="<?php echo $contact->name; ?>" itemprop="image" />
		</div>
	<?php endif;?>
</div>
<?php /*else:
	// Get a handle to the Joomla! application object
	$application = JFactory::getApplication();
	// Add a message to the message queue
	$application->enqueueMessage(JText::_('MOD_CONTACT_DISPLAY_NOTHING_SELECTED'), 'error');*/
?>
<?php endif; ?>
