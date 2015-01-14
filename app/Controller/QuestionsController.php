<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class QuestionsController extends AppController{
	//public $scaffold;
	//public $helpers = array('Html', 'Form');
	//public $uses = array('Question');
	
	public function index(){
		//$this -> redirect("./question/");
	}

	public function question(){
		$content = $this->Question->content;
		$choice_1 = $this->Question->choice_1;
		$choice_2 = $this->Question->choice_2;
		$choice_3 = $this->Question->choice_3;
		$choice_4 = $this->Question->choice_4;
		
		$this->set('content', $content);
		$this->set('choice_1',$choice_1);
		$this->set('choice_2',$choice_2);
		$this->set('choice_3',$choice_3);
		$this->set('choice_4',$choice_4);
		//$question = new Question();
	}

	public function answer(){
		$input = $this->data['Input']['選択肢'];
		$result = $this->Question->judge($input);
		$this->set('result',$result);
	}
}
