<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 2/11/2019
 * Time: 5:23 PM
 */

class Render
{
    public static function displayRecipe($recipe)
    {
        return $recipe->getTitle() . " by " . $recipe->getSource();
    }
}