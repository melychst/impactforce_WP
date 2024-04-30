<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Manrope:wght@300;400;800&family=Sulphur+Point&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="main-wrap">
	<header>
        <div class="container">
            <div class="header-wrap columns display-flex">
                <div class="column left-column">
                    <div class="logo-wrap">
                        <a href="/">
                            <?php 
                                $logo = get_field('header_logo', 'option'); 
                                if( $logo ):
                            ?>
                                <img src="<?php echo $logo['url']; ?>" alt="<?php echo bloginfo(); ?>">
                            <?php
                                endif;
                            ?>
                        </a>
                    </div>
                </div>
                <div class="column center-column">
                    <div class="main-navigation">
                        <div class="navigation-wrap">
                            <ul class="navigation">
                                <li><a href="#">About IFF</a></li>
                                <li><a href="#">Agenda</a></li>
                                <li><a href="#">Speakers</a></li>
                                <li><a href="#">Partners</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="column right-column">
                    <div class="right-navigation">
                        <div class="navigation-wrap">
                            <div class="columns display-flex">
                                <div class="column-wrap reg-icon">
                                    <div class="icon-wrap">
                                        <?php 
                                            $reg_icon = get_field('registration_icon', 'option'); 
                                            if( $reg_icon ):
                                        ?>
                                            <a href="<?php echo get_field('registration_link', 'option'); ?>">
                                                <img src="<?php echo $reg_icon['url']; ?>" alt="<?php echo $reg_icon['alt']; ?>">
                                                <span>registration</span>
                                            </a>                                       
                                        <?php
                                            endif;
                                        ?>
                                    </div>
                                </div>
                                <div class="column-wrap par-icon">
                                    <div class="icon-wrap">
                                        <?php 
                                            $part_icon = get_field('partnership_icon', 'option'); 
                                            if( $reg_icon ):
                                        ?>
                                            <a href="<?php echo get_field('partnership_link', 'option'); ?>">
                                                <img src="<?php echo $part_icon['url']; ?>" alt="<?php echo $part_icon['alt']; ?>">
                                                <span>partnership</span>
                                            </a>                                       
                                        <?php
                                            endif;
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>  