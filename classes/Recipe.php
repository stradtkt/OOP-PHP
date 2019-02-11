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

    public function getIngredients()
    {
        return $this->ingredients;
    }

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
