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
        $output = "";
        $output .= $recipe->getTitle() . " by " . $recipe->getSource();
        $output .= "\n";
        $output .= implode(", ", $recipe->getTags());
        $output .= "\n";
        foreach ($recipe->getIngredients() as $ing)
        {
            $output .= $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"];
            $output .= "\n";
        }
        $output .= implode("\n", $recipe->getInstructions());
        $output .= "\n";
        $output .= $recipe->getYield();
        return $output;
    }
}