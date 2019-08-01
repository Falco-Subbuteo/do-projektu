<?php
    // Start sesji
    session_start();

    // Wylogowywanie
    if( !empty($_GET['do']) ){
        switch($_GET['do']){
            case 'logout':
                unset($_SESSION['usr']);
   //             unset($_SESSION['mode']);
                break;
        }
    }

	

    // Zmienne pomocnicze
    $authError = '';

    // Czy przesłano dane autoryzacyjne
    if(empty($_POST['usr']) and empty($_POST['password'])){
		echo '<h1 class="col-sm-12">Login form:</h1>
                        <form method="post" class="col-sm-12">
                            <input placeholder="Login" type="text" class="col-sm-12" name="usr" />
                            <input placeholder="Hasło" type="password" class="col-sm-12" name="password" />
                            <input class="col-sm-3" type="submit">
                        </form>';
                    }
    
    if( !empty($_POST['usr']) and !empty($_POST['password']) ){
        // Zapisanie danych do zmienny dla ułatwienia pracy
        $user = $_POST['usr'];
        $pass = $_POST['password'];
        $users = [
            'admin'=>[
                'password'=>'admin',
            //    'mode'=>'admin'
            ],
        ];
        if( isset($users[$user] ) ){
            if($users[$user]['password'] == $pass){
			
                // Zapisywanie danych w sesji
            //    $authError = 'Zalogowano!';
				echo 'Zalogowano<br/><a href="?do=logout">Wyloguj</a><br />';
                        echo '<form method="post">
								<h2>Dodaj treść pytania oraz 4 odpowiedzi. Zaznacz przyciskiem odpowiedź prawidłową.</h2><br />
								Pytanie: <input type="text" name="question" class="col-sm-12 col-lg-10"/><br />
								Odpowiedź 1: <input type="text" name="answer0"/><input type="radio" name="correctAnswer" value="0" checked="checked"/><br />
								Odpowiedź 2: <input type="text" name="answer1"/><input type="radio" name="correctAnswer" value="1"/><br />
								Odpowiedź 3: <input type="text" name="answer2"/><input type="radio" name="correctAnswer" value="2"/><br />
								Odpowiedź 4: <input type="text" name="answer3"/><input type="radio" name="correctAnswer" value="3"/><br />
								<input type="submit" value="Dodaj pytanie"/>
							</form>';
							//Pytania///////////////////////////////////////////////////////////////////////
			//	$serialized_questions = file_get_contents('pytania.json');
			//	$questions = unserialize($serialized_questions);
				$question = $_POST['question'];
				$answers = array($_POST['answer0'], $_POST['answer1'], $_POST['answer2'], $_POST['answer3']);
				$correctAnswer = $_POST['correctAnswer'];
            } else {
                $authError = 'Błędne hasło!';
            }
        } else {
            $authError = 'Błędna nazwa!';
        }
    }
?>
<html>
    <head>
        <title>Panel Admina</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
			<?php
              if( !empty($_SESSION['usr']) ) {
                           echo 'Zalogowano jako: '.$_SESSION['usr'];
                           echo "<br/>";
                            echo $users[$user];
                            echo '<h1 class="col-sm-12">New user:</h1>
                <form method="post" class="col-sm-12">
                    <input placeholder="Give username" type="text" class="col-sm-12" name="question" />
                    <input placeholder="Give password" type="password" class="col-sm-12" name="answer0" />
                    <input class="col-sm-12" type="submit">
                </form>';
			}
              ?>
            </div>
        </div>
    </body>
</html>
