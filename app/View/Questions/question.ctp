<?php echo $content; ?>

<?php
	echo$this->Form->create('Input',array(
	'type' => 'post',
	'url' => 'answer'
	));

	echo $this->Form->radio('選択肢', array(
	'choice_1' => $choice_1, 
	'choice_2' => $choice_2, 
	'choice_3' => $choice_3, 
	'choice_4' => $choice_4
	));
	
	echo $this->Form->submit();
	echo $this->Form->end();
?>