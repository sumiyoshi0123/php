<?php
for ($i = 1; $i <= 5; $i++) {
    echo $i * 2 . "<br />";
}

<?php
$count = 0;

while ($count < 20) {
    $count += 1;
    echo $count . "<br />";
}

<?php
$count = 0;

while ($count < 100) {
    if ($count === 20) {
        break;
    }
    if ($count % 3 === 0) {
        $count++;
        continue;
    }
    echo $count . <br />;
    $count++;
}

<?php
$num = 0;

do {
    echo "num = " . $num . <br />;
    $num += 1;
} while ($num < 3);


<?php
$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";

for ($i = 1 ; $i <= 50; $i++) {
    if ($i % 3 === 0){
        echo $Fizz;
    }elseif ($i % 5 === 0){
        echo $Buzz;
    }elseif ($i % 3 === 0 && $i % 5 === 0){
        echo $FizzBuzz;
    }else{
        echo $i
    }
}

<?php
for ($i = 1; $i < 6; $i++) {
    for ($j = 1; $j < 6; $j++) {
        echo "●";
    }
    echo "<br />"
}