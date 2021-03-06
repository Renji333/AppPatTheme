<!DOCTYPE html>
<html>

<head <?php language_attributes(); ?>>

    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/jquery.mmenu.all.css" type="text/css"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/font.css" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/toc.css" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/global.css" type="text/css">

    <?php if(is_single() && 'post' == get_post_type()) {
        echo "<link rel='stylesheet' type='text/css' href='".get_stylesheet_directory_uri()."/css/impression.css' media='print'>";
        echo "<link rel='stylesheet' type='text/css' href='".get_stylesheet_directory_uri()."/css/patritheque.css'>";
    }?>

    <?php wp_head(); ?>

</head>

<body>

    <header>

        <a class="HeaderBlock AppNameTitle" href="<?php echo home_url();?>">
            <span><?php bloginfo('name'); ?></span>
        </a>

        <div class="HeaderBlock AppLogout">
            <img src="https://www.instituteofhypnotherapy.com/wp-content/uploads/2016/01/tutor-8.jpg" alt="..." class="UserAvatar"/>
            <span class="UserName">John Doe</span>
            <a href="<?php echo wp_logout_url('$index.php'); ?>">
                <img src="<?php bloginfo('template_directory'); ?>/img/logout.svg" alt="..." class="LogOutIcon"/>
            </a>

            <a href="#menu" style="height: 50px; width: 50px; background-color: #1a4159;"><span></span></a>
        </div>

        <div class="HeaderBlock AppSearch">

            <div class="custom-select">
                <select id='filtreSearch' >
                    <option data-id-option='0' value='null' >Filtres</option>
	                <?php makeFiltre(); ?>
                </select>
            </div>

            <form role="search" method="get" class="search-form" action="<?php echo home_url();?>">
                <div class="input-group">

                    <input type="text" class="form-control" placeholder="Rechercher..." name="s" value="<?php if( isset($_GET['s']) && $_GET['s'] != "" ){ echo htmlspecialchars($_GET['s']); }?>"/>
                    <input id="filtreHiddenInput" type="hidden" name="filtre" value="all"/>

                    <span class="input-group-btn">
                        <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                    </span>

                </div><!-- /input-group -->
            </form>

        </div>

    </header>