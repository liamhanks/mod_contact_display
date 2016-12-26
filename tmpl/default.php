<?php 
// No direct access
defined('_JEXEC') or die; ?>

<div class="ContactDetails<?php echo $params->get('classSfx'); ?>">

<?php if (isset($item->name)): ?>
	<?php echo $item->name; ?><br />
<?php endif; ?>

<?php if (isset($item->alias)): ?>
	<?php echo $item->alias; ?><br />
<?php endif; ?>

<?php if (isset($item->con_position)): ?>
	<?php echo $item->con_position; ?><br />
<?php endif; ?>
</div>