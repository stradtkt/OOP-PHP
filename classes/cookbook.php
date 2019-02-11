<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 2/11/2019
 * Time: 3:29 PM
 */

include('Recipe.php');
include('Render.php');

$recipe1 = new Recipe();
$recipe1->setSource("Patrick Stradtman");
$recipe1->setTitle("My First Recipe");
$recipe1->addIngredient("egg", 1, "oz");
$recipe1->addIngredient("flour", 2, "cup");

$recipe2 = new Recipe();
$recipe2->setSource("Debra Kellington");
$recipe2->setTitle("Pumpkin Pie");
$recipe2->addIngredient("milk", 1, "pint");

echo $recipe1->getTitle();
foreach ($recipe1->getIngredients() as $ing)
{
    echo "\n" . $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"];
}
echo implode("\n", $recipe1->getInstructions());
$recipe1->addTag("Breakfast");
$recipe1->addTag("Main Course");

echo implode(", ", $recipe1->getTags());

$recipe1->setYield("6 servings");
echo $recipe1->getYield();
echo $recipe1->getSource();

Render::displayRecipe($recipe1);