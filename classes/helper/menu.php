<?php

namespace LbMenu;


/**
 *  This class contains some helping functions for the package
 */
class Helper_Menu 
{

    /**
     * Return the correct theme for menu
     * @param  Menu $menu          
     * @param  mixed $themeOverride 
     * @return array                
     */
    public static function getTheme($menu, $themeOverride = null)
    {
        \Config::load('menu', true);
        $themesConf = \Config::get('menu.themes');
        $themeFallback = \Config::get('menu.theme_fallback');
        $themeDefault = \Config::get('menu.theme_default');

        // If no override theme
        if ($themeOverride === null)
        {
            // If the menu is root, try to get his theme
            if ($menu->is_root())
            {
                $theme = (!empty($menu->theme)) ? $menu->theme : $themeFallback;
            }
            // Else try to get the default or fallback theme
            else
            {
                if (isset($themesConfig[$themeDefault]))
                {
                    $theme = $themeDefault;
                }
                else if (!isset($themesConfig[$themeFallback]))
                {
                    throw new Exception("No menu theme found.");
                }
                else
                {
                    $theme = $themeFallback;
                }
            }

            return $themesConf[$theme];
        }

        // If override by theme name
        if (is_string($themeOverride))
        {
            if (isset($themesConfig[$themeOverride]))
            {
                $theme = $themeOverride;
            }
            else if (!isset($themesConfig[$themeFallback]))
            {
                throw new Exception("No menu theme found.");
            }
            else
            {
                $theme = $themeFallback;
            }

            return $themesConf[$theme];
        }
        // If override by theme array
        if (is_array($themeOverride))
        {
            return $themeOverride;
        }
    }

}