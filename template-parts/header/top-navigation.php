<!-- Start Menu -->




<div class="header-bottom bg-white mb-5">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar-top">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php   if (has_nav_menu('header-menu')):
                $menu_args=array(
//                    'menu'              => "", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
                    'menu_class'        => "navbar-nav text-center pr-0 navbar-top", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
//                    'menu_id'           => "", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
//                    'container'         => "", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
                    'container_class'   => "navbar-collapse collapse justify-content-center", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
                    'container_id'      => "navbar-top", // (string) The ID that is applied to the container.
                    'fallback_cb'       => false, // (callable|bool) If the menu doesn't exists, a callback function will fire. Default is 'wp_page_menu'. Set to false for no fallback.
//                    'before'            => "", // (string) Text before the link markup.
//                    'after'             => "", // (string) Text after the link markup.
//                    'link_before'       => "", // (string) Text before the link text.
//                    'link_after'        => "", // (string) Text after the link text.
//                    'echo'              => true, // (bool) Whether to echo the menu or return it. Default true.
//                    'depth'             => "", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
                    //'walker'            => "", // (object) Instance of a custom walker class.
                    'theme_location'    => "header-menu", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
//                    'items_wrap'        => "", // (string) How the list items should be wrapped. Default is a ul with an id and class. Uses printf() format with numbered placeholders.
//                    'item_spacing'      => "", // (string) Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. Default 'preserve'.
                    'add_li_class'  => 'nav-item ml-1'
                );

                wp_nav_menu($menu_args); ?>
            <?php   else: ?>
                <div class="navbar-collapse collapse justify-content-center" id="navbar-top">
                    <?php _e('please add a menu to menu location "Header Menu" from navigation in admin panel','hamyar') ?>
                </div>
            <?php   endif; ?>
        </nav>
    </div>
</div>
<!-- End Menu -->