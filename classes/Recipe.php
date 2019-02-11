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

    private $measurements = array(
        "tsp",
        "tbsp",
        "cup",
        "oz",
        "lb",
        "fl oz",
        "pint",
        "quart",
        "gallon"
    );

    public function add_ingredient($item, $amount = null, $measure = null)
    {
        if($amount != null && !is_float($amount) && !is_int($amount)) {
            exit("The amount must be a float:  " . gettype($amount) . " $amount given");
        }
        if($measure != null && !in_array(strtolower($measure), $this->measurements)) {
            exit("Please enter a valid measurement: " . implode(", ", $this->measurements));
        }
        $this->ingredients[] = array(
            "item" => ucwords($item),
            "amount" => $amount,
            "measure" => strtolower($measure)
        );
    }
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
$recipe1->add_ingredient("egg", 1, "oz");

$recipe2 = new Recipe();
$recipe2->set_source("Debra Kellington");
$recipe2->set_title("Pumpkin Pie");

echo $recipe2->displayRecipe();
echo $recipe1->displayRecipe();