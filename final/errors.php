<?php
if(count($form_errors) > 0) :?>
<div class="error">
  <?php foreach($form_errors as $error) : ?>
	<span class="danger"><?php echo $error; ?> </p>
  <?php endforeach; ?>
</div>
<?php endif; ?>
