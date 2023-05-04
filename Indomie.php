<?php
/*
QUESTION: Write a pseudo code on how to prepare noodles and implement it using PHP
SOLUTION: THE PSEUDO CODE
1. Boil a pot of water.
2. Add your noodles to the boiling water.
3. Cook the noodles for the recommended time (usually around 5-7 minutes).
4. Drain the noodles using a colander.
5. Rinse the noodles with cold water to stop the cooking process and prevent them from sticking together.
6. Serve the noodles with your preferred sauce or seasoning.
*/

// Step 1: Boil a pot of water
$potOfWater = true;
$heat = "high";
boil($potOfWater, $heat);

// Step 2: Add your noodles to the boiling water
$noodles = "spaghetti";
addNoodles($potOfWater, $noodles);

// Step 3: Cook the noodles for the recommended time
$cookTime = 6; // minutes
cookNoodles($noodles, $cookTime);

// Step 4: Drain the noodles using a colander
$colander = true;
drainNoodles($noodles, $colander);

// Step 5: Rinse the noodles with cold water
$coldWater = true;
rinseNoodles($noodles, $coldWater);

// Step 6: Serve the noodles with your preferred sauce or seasoning
$sauce = "tomato sauce";
$seasoning = "parmesan cheese";
serveNoodles($noodles, $sauce, $seasoning);

function boil($potOfWater, $heat) {
    if ($potOfWater && $heat == "high") {
        echo "The pot of water is boiling.";
    }
}

function addNoodles($potOfWater, $noodles) {
    if ($potOfWater) {
        echo "Adding $noodles to the pot of water.";
    }
}

function cookNoodles($noodles, $cookTime) {
    echo "Cooking $noodles for $cookTime minutes.";
    sleep($cookTime); // simulate cooking time
}

function drainNoodles($noodles, $colander) {
    if ($colander) {
        echo "Draining $noodles using a colander.";
    }
}

function rinseNoodles($noodles, $coldWater) {
    if ($coldWater) {
        echo "Rinsing $noodles with cold water.";
    }
}

function serveNoodles($noodles, $sauce, $seasoning) {
    echo "Serving $noodles with $sauce and $seasoning.";
}

?>
