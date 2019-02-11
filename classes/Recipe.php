<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 2/11/2019
 * Time: 2:07 PM
 */

class Recipe
{
    private $title;
    private $ingredients = array();
    private $instructions = array();
    private $source = "Kevin Stradtman";
    private $yield;
    private $tag = array();

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



    public function getInstructions()
    {
        return $this->instructions;
    }

    public function addInstructions($string)
    {
        $this->instructions[] = $string;
    }

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

    public function get_title()
    {
        return $this->title;
    }

    public function set_title($title)
    {
        $this->title = ucwords($title);
    }

    public function get_source()
    {
        return $this->source;
    }

    public function set_source($source)
    {
        $this->source = ucwords($source);
    }

    public function setYield($yield)
    {
        $this->yield = $yield;
    }

    public function getYield()
    {
        return $this->yield;
    }

    public function addTag($tag)
    {
        $this->tags[] = strtolower($tag);
    }

    public function getTags()
    {
        return $this->tag;
    }
}
