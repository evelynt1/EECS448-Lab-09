<?php

$firstQAnswer = $_POST['largest'];
$secondQAnswer = $_POST['most'];
$thirdQAnswer = $_POST['first'];
$fourthQAnswer = $_POST['which'];
$fifthQAnswer = $_POST['who'];
$counter = 0;

if($firstQAnswer == "Pacific")
{
    echo "<p>1: What is the name of the Earth’s largest ocean?</p>";
    echo "You answered: " . $firstQAnswer . "<br>";
    echo "Correct answer is: The Pacific Ocean" . "<br>";
    $counter++;
}

    echo "<p>1: What is the name of the Earth’s largest ocean?</p>";
    echo "You answered: " . $firstQAnswer . "<br>";
    echo "Correct answer is: The Pacific Ocean" . "<br>";

if($secondQAnswer == "Brazil")
{
    echo "<p>2: Which country produces the most coffee in the world?</p>";
    echo "You answered: " . $secondQAnswer . "<br>";
    echo "Correct answer is: Brazil" . "<br>";
    $counter++;
}

    echo "<p>2: Which country produces the most coffee in the world?</p>";
    echo "You answered: " . $secondQAnswer . "<br>";
    echo "Correct answer is: Brazil" . "<br>";

if($thirdQAnswer == "Marie Curie")
{
    echo "<p>3: Who was the first woman to win a Nobel Prize (1903)?</p>";
    echo "You answered: " . $thirdQAnswer . "<br>";
    echo "Correct answer is: Marie Curie" . "<br>";
    $counter++;
}

echo "<p>3: Who was the first woman to win a Nobel Prize (1903)?</p>";
echo "You answered: " . $thirdQAnswer . "<br>";
echo "Correct answer is: Marie Curie" . "<br>";

if($fourthQAnswer == "Mitochondria")
{
echo "<p>4: What is the “powerhouse of the cell?</p>";
echo "You answered: " . $fourthQAnswer . "<br>";
echo "Correct answer is: Mitochondria" . "<br>";
$counter++;
}

echo "<p>4: What is the “powerhouse of the cell?</p>";
echo "You answered: " . $fourthQAnswer . "<br>";
echo "Correct answer is: Mitochondria" . "<br>";

if($fifthQAnswer == "Billie Eilish")
{
    echo "<p>5: Which young artist recently claimed five Grammys at the 2020 Graa
mmy Awards?</p>";
    echo "You answered: " . $fifthQAnswer . "<br>";
    echo "Correct answer is: Billie Eilish" . "<br>";
    $counter++;
}

    echo "<p>5: Which young artist recently claimed five Grammys at the 2020 Graa
mmy Awards?</p>";
    echo "You answered: " . $fifthQAnswer . "<br>";
    echo "Correct answer is: Billie Eilish" . "<br>";

echo "Total answered correctly: " . $counter . "<br>";
$score = (($counter/5) * 100);
echo "Score as a percentage: " . $score . "%" . "<br>";

?>



