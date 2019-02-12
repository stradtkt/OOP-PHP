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
}