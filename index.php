<?php

// First Labour : Heracles vs Nemean Lion
// use your Figher class here
require 'src/Fighter.php';

$heracles = new Fighter('Heracles', 20, 6);
$lion = new Fighter('Lion de NÃŠmÃŠe', 11, 13);

echo 'đ§đŊ' .$heracles->getName() .'đ' .$heracles->getLife() .'<br>';
echo 'đĻ' .$lion->getName() .'đ' .$lion->getLife() .'<br>';

$i = 1;
while($heracles->getLife() >= 0 && $lion->getLife() >= 0){
    if ($heracles->getLife() == 0) {
        echo 'đ§đŊ ī¸đ ' .$heracles->getName() .' is dead ! <br>';
        echo 'đĻ ī¸đ ' .$lion->getName() .' Wins !(đ' .$lion->getLife() .')' .'<br>';
        exit();
    } elseif ($lion->getLife() == 0) {
        echo 'đĻ ī¸đ ' .$lion->getName() .' is dead ! <br>';
        echo ' đ§đŊđ ' .$heracles->getName() .' Wins !(đ' .$heracles->getLife() .')' .'<br>';
        exit();
    } else {
        $heracles->fight($lion);
        echo $heracles->getName() .' đĄī¸ ' .$lion->getName() .' đđĻ ' .$lion->getName() .' :' .$lion->getLife() .'<br>';
        $lion->fight($heracles);
        echo $lion->getName() .' đĄī¸ ' .$heracles->getName() .' đđ§đŊ ' .$heracles->getName() .' :' .$heracles->getLife() .'<br>';
        echo 'Round ' .$i .'<br> <br>';
        $i++;
    }
}