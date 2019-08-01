<?php
require("QuestionsRepository.php");
if (!isset($_SESSION)) {
    session_start();
}
?>

<html lang="pl">
	<head>

		<meta charset="utf-8">

		<title>
			Milionerzy
		</title>
    </head>
    
    <body>
		<form method="post" action="AddQuestion.php">
			Pytanie: <input type="text" name="question"/>
			Odpowiedź 1: <input type="text" name="answer0"/><input type="radio" name="correctAnswer" value="0" checked="checked"/>
			Odpowiedź 2: <input type="text" name="answer1"/><input type="radio" name="correctAnswer" value="1"/>
			Odpowiedź 3: <input type="text" name="answer2"/><input type="radio" name="correctAnswer" value="2"/>
			Odpowiedź 4: <input type="text" name="answer3"/><input type="radio" name="correctAnswer" value="3"/>
			<input type="submit" value="Dodaj pytanie"/>
		</form>
		
		<?php foreach(QuestionReposiory::getInstance()::getQuestions() as $question): ?>
			<div><?php echo $question.question; ?></div>
		<?php endforeach; ?>
		
	</body>
</html>
