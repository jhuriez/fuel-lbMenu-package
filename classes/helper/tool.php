<?php

namespace LbMenu;

class Helper_Tool
{

	public static function url($uri)
	{
		$uri = str_replace("\n", "", $uri);
		$uri = str_replace("\r", "", $uri);
		$uri = str_replace(" ", "%20", $uri);

        $regex = '/^([a-zA-Z0-9]+(\.[a-zA-Z0-9]+)+.*)$/';

        if ($uri && ! empty($uri))
        {
	        $isUrl = (preg_match($regex, $uri) || filter_var($uri, FILTER_VALIDATE_URL));

	        // Si c'est une URL interne
	        if ( ! $isUrl)
	        {
		        $uri = \Uri::create($uri);
	        }

	        // Si il manque le protocol
			if(! preg_match("#^(http|https|ftp)://#i", $uri))
			{
				$uri = 'http://'.$uri;
			}

	        // Replace // by /
	        $uri = str_replace('://', '||sep_protocol||', $uri);
	        $uri = str_replace('//', '/', $uri);
	        $uri = str_replace('||sep_protocol||', '://', $uri);

	        return $uri;

        }
		else
		{
			return $uri;
		}
	}

}