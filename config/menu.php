<?php

return array(
	'theme_default' => 'default',
	'theme_fallback' => 'default',
	'themes' => array(
		'default' => array(
	        'menu' => '<ul class="menu">{menu}</ul>',
	        'menu_item' => '<li class="item depth-1">{item} {submenu}</li>',
	        'menu_item_inner' => '<a href="{link}" class="{active}" title="{title}">{text}</a>',

	        'sub_menu' => '<ul class="sub-menu depth-{depth}">{menu}</ul>',
	        'sub_menu_item' => '<li class="sub-item depth-{depth}">{item} {submenu}</li>',
	        'sub_menu_item_inner' => '<a href="{link}" class="{active}" title="{title}">{text}</a>',

	        // 'sub_menu_depth-3' => '<ul class="sub-menu depth-{depth}">{menu}</ul>',
	        // 'sub_menu_item_depth-3' => '<li class="sub-item depth-{depth}">{item} {submenu}</li>',
	        // 'sub_menu_item_inner_depth-3' => '<a href="{link}" title="{title}">{text}</a>',
		),
		'sb-admin' => array(
	        'menu' => "<ul>{menu}</ul>",
	        'menu_item' => "<li>{item}\n{submenu}</li>\n",
	        'menu_item_inner' => '<a href="{link}" title="{title}">{text}</a>',
	        'sub_menu' => "<ul>{menu}</ul>",
	        'sub_menu_item' => "<li>{item}\n{submenu}</li>\n",
	        'sub_menu_item_inner' => '<a href="{link}" title="{title}">{text}</a>',
		),
	),
);