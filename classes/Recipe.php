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

    public function __construct($title = null)
    {
        $this->setTitle($title);
    }

    public function __toString()
    {
        $output = "You are calling " . __CLASS__ . " object with the title\"";
        $output .= $this->getTitle();
        $output .= "\n It is stored in " . basename(__FILE__) . " at " . __DIR__ . ".";
        $output .= "\n This display is from line " . __LINE__ . " in method " . __METHOD__;
        $output .= implode("\n", get_class_methods(__CLASS__));
        return $output;
    }

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

    public function addIngredient($item, $amount = null, $measure = null)
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

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        if(empty($title)) {
            $this->title = null;
        } else {
            $this->title = ucwords($title);
        }
    }

    public function getSource()
    {
        return $this->source;
    }

    public function setSource($source)
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
