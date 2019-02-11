<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 2/11/2019
 * Time: 5:23 PM
 */

class Render
{
    public static function listIngregients($ingredients)
    {
        $output = "";
        foreach ($ingredients->getIngredients() as $ing)
        {
            $output .= $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"];
            $output .= "\n";
        }
        return $output;
    }

    public static function displayRecipe($recipe)
    {
        $output = "";
        $output .= $recipe->getTitle() . " by " . $recipe->getSource();
        $output .= "\n\n";
        $output .= implode(", ", $recipe->getTags());
        $output .= "\n\n";
        $output .= self::listIngregients($recipe->getIngredients());
        $output .= implode("\n", $recipe->getInstructions());
        $output .= "\n\n";
        $output .= $recipe->getYield();
        return $output;
    }
}