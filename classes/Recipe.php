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
}
$recipe1 = new Recipe();
echo $recipe1->source = "Patrick Stradtman";
echo $recipe1->source;

$recipe2 = new Recipe();
echo $recipe2->source = "Debra Kellington";
echo $recipe2->source;