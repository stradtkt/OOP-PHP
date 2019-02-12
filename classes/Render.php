<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 2/11/2019
 * Time: 5:23 PM
 */

class Render
{
    public static function listIngredients($ingredients)
    {
        $output = "";
        foreach ($ingredients->getIngredients() as $ing)
        {
            $output .= $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"];
            $output .= "\n";
        }
        return $output;
    }

    public static function listShopping($ingredient_list)
    {
        ksort($ingredient_list);
        return implode("\n", array_keys($ingredient_list));
    }

    public static function listRecipes($titles)
    {
        asort($titles);
        $output = "";
        foreach($titles as $key => $title) {
            if($output != "") {
                $output .= "\n";
            }
            $output .= "[$key] $title";
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
        $output .= self::listIngredients($recipe->getIngredients());
        $output .= implode("\n", $recipe->getInstructions());
        $output .= "\n\n";
        $output .= $recipe->getYield();
        return $output;
    }
}