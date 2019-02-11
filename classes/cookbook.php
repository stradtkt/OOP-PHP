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


echo $recipe2->displayRecipe();
echo $recipe1->displayRecipe();