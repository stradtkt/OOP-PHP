<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 2/11/2019
 * Time: 3:29 PM
 */

include('Recipe.php');

$recipe1 = new Recipe();
$recipe1->set_source("Patrick Stradtman");
$recipe1->set_title("My First Recipe");
$recipe1->add_ingredient("egg", 1, "oz");
$recipe1->add_ingredient("flour", 2, "cup");

$recipe2 = new Recipe();
$recipe2->set_source("Debra Kellington");
$recipe2->set_title("Pumpkin Pie");
$recipe2->add_ingredient("milk", 1, "pint");

echo $recipe1->get_title();
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
echo $recipe1->get_source();

echo $recipe2->displayRecipe();
echo $recipe1->displayRecipe();