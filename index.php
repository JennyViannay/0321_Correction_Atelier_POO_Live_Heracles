<?php

// First Labour : Heracles vs Nemean Lion
// use your Figher class here
require 'src/Fighter.php';

$heracles = new Fighter('Heracles', 20, 6);
$lion = new Fighter('Lion de Némée', 11, 13);

echo '🧔🏽' .$heracles->getName() .'💙' .$heracles->getLife() .'<br>';
echo '🦁' .$lion->getName() .'💙' .$lion->getLife() .'<br>';

$i = 1;
while($heracles->getLife() >= 0 && $lion->getLife() >= 0){
    if ($heracles->getLife() == 0) {
        echo '🧔🏽 ️💀 ' .$heracles->getName() .' is dead ! <br>';
        echo '🦁 ️🏆 ' .$lion->getName() .' Wins !(💙' .$lion->getLife() .')' .'<br>';
        exit();
    } elseif ($lion->getLife() == 0) {
        echo '🦁 ️🏆 ' .$lion->getName() .' is dead ! <br>';
        echo ' 🧔🏽💀 ' .$heracles->getName() .' Wins !(💙' .$heracles->getLife() .')' .'<br>';
        exit();
    } else {
        $heracles->fight($lion);
        echo $heracles->getName() .' 🗡️ ' .$lion->getName() .' 💙🦁 ' .$lion->getName() .' :' .$lion->getLife() .'<br>';
        $lion->fight($heracles);
        echo $lion->getName() .' 🗡️ ' .$heracles->getName() .' 💙🧔🏽 ' .$heracles->getName() .' :' .$heracles->getLife() .'<br>';
        echo 'Round ' .$i .'<br> <br>';
        $i++;
    }
}