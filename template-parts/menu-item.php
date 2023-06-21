<div class="menu__item">
    <a href="/<? echo $args['lnk']; ?>" class="menu__link flex flex--aic flex--jcs">
        <span class="menu__text"><? echo $args['name']; ?> </span>
    </a>
    <div class="menu__sub">

    <?php 
    wp_nav_menu( [
        'theme_location'  => $args['menu_id'],
        'container'       => false,
        'menu_class'      => 'menuSub',
        'menu_id'         => 'stir'
    ] );
    ?>
    
    </div>
</div>