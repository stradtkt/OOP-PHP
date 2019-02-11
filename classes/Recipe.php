<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 2/11/2019
 * Time: 2:07 PM
 */

class Recipe
{
    public $title;
    public $ingredients = array();
    public $instructions = array();
    public $source = "Kevin Stradtman";
    public $yield;
    public $tag = array();
    public function displayRecipe()
    {
        return $this->title . " by " . $this->source;
    }

    public function set_title($title)
    {
        $this->title = ucwords($title);
    }

    public function set_source($source)
    {
        $this->source = ucwords($source);
    }
}
$recipe1 = new Recipe();
$recipe1->set_source("Patrick Stradtman");
$recipe1->set_title("My First Recipe");

$recipe2 = new Recipe();
$recipe2->set_source("Debra Kellington");
$recipe2->set_title("Pumpkin Pie");

echo $recipe2->displayRecipe();
echo $recipe1->displayRecipe();