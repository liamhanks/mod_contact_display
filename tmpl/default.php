<?php 
// No direct access
defined('_JEXEC') or die; 

$itemprops = modContact_displayHelper::itemprops;
$microdata = new JMicrodata('Person');

?>

<div class="ContactDetails<?php echo $params->get('classSfx'); ?>" <?php echo $microdata->displayScope();?>>

<?php foreach ($contacts as $key => $item):
	$microItem = $microdata->content($item)->property($itemprops[$key])->display();
	$label = '<span class="contact-label">' . JText::_('CONTACT_DETAILS_LABEL_' . strtoupper($key)) . "</span>";
?>
	
	<span class="<?php echo "contact-" . $key;?>"> <?php echo $label;?> <?php echo $microItem; ?></span><br />

<?php endforeach; ?>

</div>