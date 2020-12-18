<?php  if (count($error) > 0) : ?>
  <div class="error">
  	<?php foreach ($error as $er) : ?>
  	  <p><?php echo $er ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>