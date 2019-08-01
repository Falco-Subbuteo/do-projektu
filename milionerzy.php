<!doctype html>
<?php
require("scoring.php");
require("questions.php");
if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['logged']) || !$_SESSION['logged']) {
    $_SESSION['username'] = '';
    $_SESSION['currentQuestionNumber'] = 0;
}
?>
<html lang="pl">


<head>

    <meta charset="utf-8">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>
        Milionerzy
    </title>

    <style>
        body {
					margin: 0;
					font-family: 'Alegreya Sans', sans-serif;
				}
				
				a {
					font-size: 8px;
				}
				
				img {
					max-width: 100%;
					max-height: 100%;
				}
				
				.help {
					border-radius: 100%;
					display: inline;	
				}
				
				.help:hover {
					background-image: linear-gradient(orange, yellow);
				}
				
				div {
					text-align: center;
				}
				
				.possibleAnswer {
					margin: 0;
					background-image: linear-gradient(to bottom right, #000000, #000035);
					border-radius: 5px;
					border: 1px solid white;
				}
				
				.possibleAnswer:hover {
					background-image: linear-gradient(orange, yellow);
				}
				
				.stuff {
					margin: 0;
					background-image: linear-gradient(to bottom right, #000000, #000035);
					border-radius: 5px;
					border: 1px solid white;
				}
				
				footer {
					font-size: 5px;
				}


    </style>
</head>

<body class="bg-dark">
<div class=" col-xl-12 col-lg-12 col-md-12 col-sm-12 text-white bg-dark">

    <div class="h-75 col-xl-9 col-lg-9 col-md-10 d-none d-md-block float-left">
        <img src="stonks.jpeg" class="rounded">
    </div>
    <div class="h-75 col-xl-3 col-lg-3 col-sm-12 col-md-2 float-md-right float-lg-right float-xl-right">
        <div class="disply-inline">
            <div class="h-15 w-100">
				<a href="login_php.php">Panel admina</a>
                <form action="/milionerzy/registerUser.php" name="registerUser" method="post">
                    <input type="text" disable="<?php echo $_SESSION['logged']; ?>" name="username"
                           value="<?php echo $_SESSION['username']; ?>"/>
                    <?php if (!isset($_SESSION['logged']) || !$_SESSION['logged']): ?><input type="submit"
                                                                                             value="Zapisz"/><?php endif; ?>
                </form>
            </div>
            <?php if (isset($_SESSION['logged']) && $_SESSION['logged']): ?>
                <div class="display-inline h-15 w-100">
                    <?php if (!isset($_SESSION['usedHelps'][0])): ?>
                        <div class="display-inline help w-30"><a href="/milionerzy/help.php?id=0">H</a>
                        </div><?php endif; ?>
                    <?php if (!isset($_SESSION['usedHelps'][1])): ?>
                        <div class="display-inline help w-30"><a href="/milionerzy/help.php?id=1">H</a>
                        </div><?php endif; ?>
                    <?php if (!isset($_SESSION['usedHelps'][2])): ?>
                        <div class="display-inline help w-30"><a href="/milionerzy/help.php?id=2"><div class="display-inline help w-15">H</a>
                        </div><?php endif; ?>
                </div>
            <?php endif; ?>
        </div>

        Nagroda: <br/><br/>
        <div>
            <?php for ($i = 11; $i >= 0; $i--): ?>
                <div class="display-block stuff" style="<?php if ($_SESSION['currentQuestionNumber'] - 1 == $i) {
                    echo 'color: red';
                } ?>">
                    <?php echo $_SESSION['moneyOptions'][$i]; ?> PLN
                </div>
            <?php endfor; ?>
        </div>

    </div>
    <?php if (isset($_SESSION['logged']) && $_SESSION['logged']): ?>
        <?php if (!isset($_SESSION['endGame']) || !$_SESSION['endGame']): ?>
            <div class="h-25 fixed-bottom col-xl-12 col-lg-12 col-md-12 col-sm-12 float-md-left float-lg-left float-xl-left">
                <div class="w-100 h-40 col-xl-12 col-lg-12 col-md-12 col-sm-12 stuff">
                    <?php echo $_SESSION['currentQuestion']['question']; ?>
                </div>
                <div>
                    <?php for ($i = 0; $i < 4; $i++): ?>
                        <div class="display-inline w-50 float-left possibleAnswer" style="<?php if ($_SESSION['currentHelp'] == $i) {
                            echo "color: red";
                        } ?>">
                            <form method="post" action="/milionerzy/checkAnswer.php">
                                <input type="hidden" name="checkedAnswer" value="<?php echo $i ?>">
                                <input type="submit" value="Zaznacz">
                            </form>
                            <?php echo $_SESSION['currentQuestion']['answer'][$i] ?>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        <?php else: ?>
            <div>
                <?php if ($_SESSION['isWon']): ?>
                    WYGRAŁES MISTRU! <?php if (isset($_SESSION['wonSum'])) {
                        echo $_SESSION['wonSum'];
                    } ?>
                <?php else: ?>
                    PRZEGRAŁEŚ GRZYBIE JEDEN!
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <div>
            <a href="/milionerzy/restart.php">od nowa</a>
        </div>
        <a href="/milionerzy/endWithGuaranteedSum.php">zakończ z sumą gwarantowaną</a>
    <?php endif; ?>
</div>


</body>
</html>
