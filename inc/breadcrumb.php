<?php


/**
 * Generate breadcrumbs
 * @author CodexWorld
 * @authorURL www.codexworld.com
 */
function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow" class="breadcrumb-item">'.get_bloginfo('name').'</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;/&nbsp;&nbsp;";
        global $post_id;
        $category_list=get_the_category($post_id);
        if (isset($category_list[0])){
           echo sprintf('<a href="%s" target="_blank">%s</a>',get_category_link($category_list[0]->term_id),$category_list[0]->name);
        }else{
            the_category(' &bull; ');
        }
        if (is_single()) {
            echo "&nbsp;&nbsp;/&nbsp;&nbsp;";
            echo '<span>';
            the_title();
            echo '</span>';
        }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;/&nbsp;&nbsp;";
        echo '<span>';
        echo the_title();
        echo '</span>';
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;/&nbsp;&nbsp;".esc_html__('Search Results for...','hamyar');
        echo '"<span>';
        echo the_search_query();
        echo '</span>"';
    }
}