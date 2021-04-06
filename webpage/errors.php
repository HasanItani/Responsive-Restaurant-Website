<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo "<p style = 'color:red; position:relative; left:2px; top:500px; '>".$error."</p>" ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>