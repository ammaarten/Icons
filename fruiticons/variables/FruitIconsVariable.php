<?php
namespace Craft;

class FruitIconsVariable
{

    /**
        * Whatever you want to output to a Twig tempate can go into a Variable method. You can have as many variable
        * functions as you want.  From any Twig template, call it like this:
        *
        *     {{ craft.fruitIcons.getFruitIcons }}
    **/
    public function getFruitIcons()
    {
        require_once(CRAFT_PLUGINS_PATH . 'fruiticons/data/fontawesome.php');
        return fontAwesomeIcons();
    }
}