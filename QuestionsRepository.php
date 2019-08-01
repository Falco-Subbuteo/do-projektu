<?php

class QuestionReposiory {

	private static $_instance;
	private $questions;
	
	static function getInstance(){
		if(self::$_instance == null){
			self::$_instance = new QuestionReposiory();
		}
		return self::$_instance;
	}
	
	private function __construct(){
		$questions = unserialize(file_get_contents('questions.json'));
	}
	
	function addQuestion($question){
		$questions[] = $question;
		//json_encode($questions);
        file_put_contents('questions.json', serialize($questions));
	}
	
	function getRandomQuestions($limit){
		$questions = array();
		$usedQuestionIndexes = array();
		for($i = 0; i < $limit; $i++) {
			$idx = rand(0, sizeof($this.questions));
			while($usedQuestionIndexes.contains($idx)) {
				$idx = rand(0, sizeof($this.questions));
			}
			$usedQuestionsIndexes[] = $idx;
			$questions[] = $this.questions[$idx];
		}
		return $questions;
	}
	
	function getQuestions(){
		return $this.questions;
	}
}
