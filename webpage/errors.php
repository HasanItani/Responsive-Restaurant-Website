<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo "<p style = 'color:red; margin-bottom:10px; '>".$error."</p>" ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>