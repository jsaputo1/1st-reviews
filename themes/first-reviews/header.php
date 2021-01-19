<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <?php wp_head();?>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body <?php body_class();?>>
<header>
    <nav>
        <?php wp_nav_menu(array(
            'theme_location' => 'nav'
            )) ;?>  
        <form role type="search" name="s" action="<?php echo home_url('/')?>"> 
        <fieldset>
            <label class="search-field">
            <input placeholder="Search Reviews     &#xF002;" 
            type="search" name="s" 
            value="<?php echo esc_attr(get_search_query()); ?>" 
            class="search-input empty"
            >
        </fieldset>
        </form>
        <div class="contact-info">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fas fa-envelope-square"></i></a>
        </div>
    </nav>
</header>
