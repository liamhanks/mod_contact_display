<?php 
// No direct access
defined('_JEXEC') or die; 

//Itemprops array (DB column => itemprop name). Maps DB column titles to itemprop names.
$itemprops = array('name' => 'name','alias' => null,'con_position' => 'title');

?>

<div class="ContactDetails<?php echo $params->get('classSfx'); ?>">

<?php foreach ($contacts as $key => $item):

	//Build the item:
	null !== $itemprops[$key] ? $itemprop = 'itemprop = "' . $itemprops[$key] . '"' : $itemprop = '';
	
?>
	<span class="<?php echo "contact-" . $key;?>" <?php echo $itemprop; ?>><?php echo $item;?></span><br />

<?php endforeach; ?>
<?php /* if (isset($item->name)): ?>
	<?php echo $item->name; ?><br />
<?php endif; ?>

<?php if (isset($item->alias)): ?>
	<?php echo $item->alias; ?><br />
<?php endif; ?>

<?php if (isset($item->con_position)): ?>
	<?php echo $item->con_position; ?><br />
<?php endif; */ ?>
</div>