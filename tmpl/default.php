<?php 
// No direct access
defined('_JEXEC') or die; 

$itemprops = modContact_displayHelper::itemprops;
$microdata = new JMicrodata('Person');

?>

<div class="contact-details<?php echo $params->get('classSfx'); ?>" <?php echo $microdata->displayScope();?>>

<?php foreach ($contacts as $key => $item):
	$microItem = $microdata->content($item)->property($itemprops[$key])->display();
	$langStr = JText::_('MOD_CONTACT_DISPLAY_' . strtoupper(str_replace("con_","",$key)));
	$label = '<span class="contact-label">' . $langStr . "</span>";
?>
	
	<span class="<?php echo "contact-" . $key;?>"> <?php echo $label;?> <?php echo $microItem; ?></span><br />

<?php endforeach; ?>

</div>