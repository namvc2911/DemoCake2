<!DOCTYPE html>
<html lang="en">
	<?php echo $this->element('pages/head');?>
    <body>
		<?php echo $this->element('pages/header');?>
		<div id="wrapper" class="container">
			<?php echo $this->element('pages/content');?>
			<?php echo $this->fetch('content'); ?>

			<?php echo $this->element('pages/footer');?>
		</div>
    </body>
</html>