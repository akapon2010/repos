<h1>クイズですよ</h1>
<?php 
echo$this->Form->create('Input',array(
	'type' => 'post',
	'url' => 'question'
	));
echo $this->Form->submit('開始');
echo $this->Form->end();
?>