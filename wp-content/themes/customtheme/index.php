<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>
    <body>

        <div class="navbar gradient-bg main-custom-nav">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-exapmle-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Brand</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- <li><a href="#">Link</a></li> -->
                        <!-- Dynamic Menu -->
                        <?php
                            wp_nav_menu(array(
                                'theme_location' => 'primary',
                                'menu_class'=>'primary-menu',
                                'container' => false,
                                'items_wrap'=> '%3$s'
                            ));
                        ?>
                    </ul>
                </div>
            </div> <!-- /.navbar-collapse -->
        </div> <!-- /.container-fluid -->

        <div class="jumbotron gradient-bg margin-neg-20">
            <div class="container text-center">
                <h1>Welcome to my Custom Site</h1>
            </div>
        </div>

        <div class="container">
            <?php if( have_posts()):?>
                <?php while(have_posts()):the_post();?>
                    <h2> <?php the_title(); ?> </h2>
                    <?php the_content();?>
                <?php endwhile;?>
            <?php endif;?>
            <?php wp_footer(); ?>
        </div>
    </body>
</html>



