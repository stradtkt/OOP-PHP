<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 2/11/2019
 * Time: 7:39 PM
 */

class RecipeCollection
{
    private $title;
    private $recipes = array();

    public function __construct($title = null)
    {
        $this->setTitle($title);
    }

    public function setTitle($title)
    {
        if(empty($title)) {
            $this->title = null;
        } else {
            $this->title = ucwords($title);
        }
    }
    public function getTitle()
    {
        return $this->title;
    }

    public function addRecipe($recipe)
    {
        $this->recipes[] = $recipe;
    }

    public function getRecipes()
    {
        return $this->recipes;
    }

    public function getRecipeTitles()
    {
        $titles = array();
        foreach ($this->recipes as $recipe)
        {
            $titles[] = $recipe->getTitle();
        }
        return $titles;
    }

    public function filterByTag($tag)
    {
        $tagRecipes = array();
        foreach ($this->recipes as $recipe) {
            if(in_array(strtolower($tag), $recipe->getTags())) {
                $tagRecipes[] = $recipe;
            }
        }
        return $tagRecipes;
    }

    public function getCombinedIngredients()
    {
        $ingredients = array();
        foreach($this->recipes as $recipe) {
            foreach($recipe->getIngredients() as $ing) {
                $item = $ing["item"];
                if(strpos($item, ",")) {
                    $item = strstr($item, ",", true);
                }
                if(substr($item, -1) == "s" && array_key_exists(rtrim($item, "s"), $ingredients)) {
                    $item = rtrim($item, "s");
                } else if(array_key_exists($item . "s", $ingredients)) {
                    $item .= "s";
                }
                $ingredients[$item] = array(
                    $ing["amount"],
                    $ing["measure"]
                );
            }
        }
        return $ingredients;
    }

    public function filterById($id)
    {
        return $this->recipes[$id];
    }
}