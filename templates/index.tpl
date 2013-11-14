<?php
	echo "Some example content";
?>



<!-- Example of an inline foreach -->
<?php foreach($this->data as $data2): ?>
	<?php foreach($data2 as $data3): ?>
		<!-- Example of inline echo -->
		<?= $data3 ?>
	<?php endforeach; ?>
<?php endforeach; ?>

<br />
<br />
<div>
	<h2>Rendering a template</h2>
	To render a template of current URL can use $templatr->render(); 
	<br />
	To render a specific template you can use $templatr->render('template');
</div>

<div>
	<h2>Setting a template format</h2>
	Either pass it in the initializing of the Template
	<br />
	$templatr->("Template Directory", "Template Format", "Base Path");
	<br />
	Or use the method
	<br />
	$templatr->setTemplateFormat('.tpl');
</div>

<div>
	<h2></h2>
</div>