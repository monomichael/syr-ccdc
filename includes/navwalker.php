<?php
/**
 * class wp_bootstrap_Walker_Nav_Menu()
 *
 * Extending Walker_Nav_Menu Class
 *
 **/

class syr_ccdc_Walker_Nav_Menu extends Walker_Nav_Menu {

    function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {
        $element->hasChildren = isset($children_elements[$element->ID]) && !empty($children_elements[$element->ID]);
        return parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
    }

    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
    }

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $item_html = '';
        parent::start_el($item_html, $item, $depth, (object)$args);
        if (($item->hasChildren) && ($depth === 0)) {
            $item_html = str_replace('<a', '<a class="dropdown-toggle" data-toggle="dropdown" data-target="#"', $item_html);
            $item_html = str_replace('</a>', ' <b class="caret"></b></a>', $item_html);
        }
        $output .= $item_html;
    }
}

function syr_ccdc_nav_menu_css_class($classes, $item) {
    $classes = preg_replace('/(current(-menu-|[-_]page[-_])(item|parent|ancestor))/', 'active', $classes);
    if ($item->hasChildren) {
        $classes[] = 'dropdown';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'syr_ccdc_nav_menu_css_class', 10, 2);
