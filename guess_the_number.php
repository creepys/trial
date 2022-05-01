
<p1>Please guess a number between 1-100:</p1>

<form method="get" action="">
<input type="text" name="value">
<input type="submit">
</form>

<?php
//guess_the_number

$ans = rand(0,100);

for ($i = 0; $i < 10; $i++) { 

    $input = $_GET['value'];

   echo "\n";
    if ($input < $ans) {
    echo "Answer is wrong, try a larger number. /n";
    }
    if ($input > $ans) {
    echo "Answer is wrong, try a smaller number. /n";
    }
    if ($input == $ans) {
        echo "Congratulation! you win the game. /n";
        break;
        }

    if ($i > 9){
        echo  "Sorry, you used up all your attempts, answer is".$ans.". /n";
    }
}

?>

