<?php 
declare(strict_types=1);



/*echo "Witamy  w języku PHP \n";
echo "jakiś inny tekst";

// komentarz komentatowy

/* komentarz wielo 
komentarzowy 

echo '<br>';
$variable = '51';
$intVariable = 51;
$name = 'Janek';

echo $variable;
echo '<br>';
echo $intVariable;

var_dump($variable);

$result = 4+5;
var_dump($result);
echo '<br>';
$age = 11;
var_dump($age++);
echo '<br>';
$age = 5;
$example3 = 'Moniki pies miał kiedyś '.$age. ' lat';
echo $example3;

echo '<br>';
$user1 = 'Jan Kowalski';
$user2 = 'Zbigniew Sobieski';
$user3= 'Piotr Nowak';

$users = ['Jan Kowalski', 'Zbigniew Sobieski', 'Piotr Nowak'];
print_r($users); */

/* class Flat
{

}

$myFlat = new Flat();
var_dump($myFlat); */



class Flat
{
public ?string $type = null;
public function open(): void {
    echo "drzwi zostały otwarte <br>";

}

public function close(): void {
echo "Drzwi zostały zamknięte <br>";
}
public function doSomething( string
$comand): ?string{
    if($comand === 'test'){
        return null;
    }
    return 'Dzien dobry';
}
}

$myFlat = new Flat();
$myFlat ->open();
$myFlat->close();
$temporary=$myFlat->doSomething('wiola');
var_dump($temporary);
