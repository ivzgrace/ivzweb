<?php

/*Template Name: Home Static*/

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<title><?php /*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'SimpleKey' ), max( $paged, $page ) );?></title>
<meta charset="utf-8">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<?php if(!isset($VAN['isResponsive']) || $VAN['isResponsive']==1):?>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1"/>
<?php endif;?>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<!-- Compiled and minified CSS -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/materialize.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/style.css">
<!-- Compiled and minified JavaScript -->
<?php wp_head();?>

</script>

</head>



<!--body <?php body_class();?>-->
<body>
<div class="main-container">
<div class="container" id="menu-container">
<div class="row">
<header id="top">
  <nav>
    <div class="nav-wrapper">
      <a href="/" class="brand-logo"><img src="../wp-content/uploads/2016/04/newlogo.png">IVZWEB <span style="color:#8bc34a;">SERVICES</span></a>
      <a href="#" data-activates="mobile-view" class="button-collapse"><i class="fa fa-bars"></i></a>

       <?php wp_nav_menu(array(
          'theme_location' => 'home-menu',
          'container' => 'ul',
          'menu_class' => 'right hide-on-med-and-down wow fadeIn',
          'fallback_cb' => 'van_scroll_pagemenu',
          'echo' => true,
          'walker'=> new Description_Walker,
                  'depth' => 4) );
       ?>



    </div>
  </nav>



</header>
</div>

</div>
<?php wp_nav_menu(array(
          'theme_location' => 'home-menu',
          'container' => 'ul',
          'menu_class' => 'side-nav',
          'menu_id' => 'mobile-view',
          'fallback_cb' => 'van_scroll_pagemenu',
          'echo' => true,
          'walker'=> new Description_Walker,
                  'depth' => 4) );
     ?>
<div id="main-slider">

<!--?php rfwbs_responsiveslider();?-->

<div class="slider-text wow fadeInDown" data-wow-delay="1s">
  <h1>Create & Design Your Website With Us</h1>
  <h5 class="center">I can help you build & design better websites using the CMS and other frameworks!
</h5>
<br>
<?php if(!isset($VAN['top_social']) || $VAN['top_social']==0):?>
    <div class="top_social">
      <?php echo van_social();?>
    </div>
    <?php endif;?>

<div class="go-down wow fadeInUp" data-wow-delay="2s"><a href="#who-we-are" class="white-text"><i class="fa fa-angle-down"></i></a></div>


</div>

</div>

<section id="who-we-are">
<div class="container">
  <div class="row">
    <div class="col s12 m6 l6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
    <h1 class="title blue-grey-text darken-1">who<br>
    <strong class="light-green-text">is Ivzweb</strong></h1>
    <p>Ivzweb is a personal portfolio of Ivy, a web developer that would like to help professionals and business owners to improve their online presence by providing them with quality website services mainly focused on web designing and development.</p> 

<p>Ivzweb also build, customize and manage Wordpress, Adobe Business Catalyst and Magento websites and provide ongoing customer support, fair pricing, user-friendly and mobile view ready sites.</p>

<p>Ivzweb is flexible with minimal supervision. She treat every website job as if it was my own and always deliver by any means necessary.</p>
    <br>

    </div>
    <div class="col s12 m6 l6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="2s">
    <img class="right responsive-img" src="./wp-content/uploads/2016/03/whoweare.jpg">
    </div>
  </div>


</div>

</section>

<section id="what-we-do">
<div class="container">
  <div class="row">
    <div class="col s12 m6 l6 left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
    <img class="left responsive-img" src="./wp-content/uploads/2016/04/whatwedo.jpg">
    </div>
    <div class="col s12 m6 l6 right">
    <h1 class="title blue-grey-text darken-1 wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">what<br>
    <strong class="light-green-text">We Do</strong></h1>
    <div class="we-do wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
    <h5 class="grey-text">BRANDING & IDENTITY</h5>
    <p  class="grey-text">Ivzweb offer various customizable design sets and focus on creating a website to fit your brand while engaging your visitors such as logo, layout themes, colors, etc.</p>
    </div>
    <div class="we-do wow fadeInRight" data-wow-duration="1s" data-wow-delay="2s">
    <h5  class="grey-text">WEB DEVELOPMENT</h5>
    <p  class="grey-text">Ivzweb offer a wide range of services that include e-commerce sites, advertising sites, full-fat websites, platforms, or simply a site that acts as online portfolio to display your services.</p>
    </div>
    <div class="we-do wow fadeInRight" data-wow-duration="1s" data-wow-delay="3s">
    <h5  class="grey-text">MOBILE DESIGN</h5>
    <p  class="grey-text">Ivzweb offer a mobile friendly website or responsive website design that are fully aligned with your brand objectives and at the same time present useful business information to its users. </p>
    </div>




    <br>
    
    </div>


  </div>


</div>

</section>

<section id="portfolio">
<div class="container">
<div class="row">
<div class="col s12 m6 l7 justify wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
  <h1 class="center light-green-text"><strong>My Portfolio</strong></h1>
<h5 class="grey-text center">Ivzweb build websites that will have people sitting up and taking notice of your business.</h5>
  </div>
<div class="col s12 12 fadeIn" data-wow-duration="1s" data-wow-delay="3s">

  <?php $recent = new WP_Query("'post_type=portfolio&posts_per_page=5'"); 

  while($recent->have_posts()) : $recent->the_post(); ?>
    <!--<h1><?php the_title(); ?></h1>-->
    <?php the_content(); ?>
    <?php endwhile; ?>

</div>
</div>
</div>
</section>

<section id="testimonial">
<div class="container">
<div class="row">
<div class="col s12 m6 l7 justify wow fadeInUp"  data-wow-delay="1s">
  <h1 class="center light-green-text"><strong>Client's Says</strong></h1>
<h5 class="grey-text center">What others are saying about <span class="light-green-text">Ivz<span class="blue-grey-text darken-1">Web</span></span></h5>
  </div>
  <br>
  <div class="col s12 l10 justify wow fadeInUp" data-wow-delay="2s">
<?php echo do_shortcode('[show_testimonials]'); ?>
  </div>
  </div>
  </div>



</section>

<!-- <section id="contactus">
<div class="container">
  <div class="row">
    <div class="col s12 m6 l6 wow fadeIn" data-wow-delay="1s">
      <h4 class="white-text"><strong>Get In Touch</strong></h4>
<p class="white-text">We love feedback. Fill out the form below and we'll get back to you as soon as possible.</p>
  <?php $recent = new WP_Query("page_id=59"); while($recent->have_posts()) : $recent->the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; ?>



</div>

<div class="col s12 m6 l5 push-l1 wow fadeIn" data-wow-delay="1s">
<h4 class="white-text"><strong>Contact Info</strong></h4>

</div>

  </div>
</div>


</section> -->

<!--Contact Area-->

    <section id="contact" class="page-area<?php if(!isset($VAN['contact_background_color']) || $VAN['contact_background_color']=='' || $VAN['contact_background_color']=='#313131' || $VAN['enable_custom']==0):?> blockbg1<?php endif;?>">

       <div class="wrapper">
       <div class="row">
       <div class="col s12 m6 l6 wow fadeIn" data-wow-delay="1s">

           <hgroup class="title">

              <h3><strong><?php if(isset($VAN['contact_title']) && $VAN['contact_title']<>''){echo $VAN['contact_title'];}else{echo 'Contact us';}?></strong></h3>

              <?php if(isset($VAN['contact_sub_title']) && $VAN['contact_sub_title']<>''):?><p><?php echo $VAN['contact_sub_title'];?></p><?php endif;?>

           </hgroup>



           <?php get_template_part('content','contactform');?>

</div>

           <div class="contactinfo col s12 m6 l5 push-l1 wow fadeIn" data-wow-delay="2s">

             <?php if(isset($VAN['contact_intro_title']) && $VAN['contact_intro_title']<>''):?>

               <h3><?php echo $VAN['contact_intro_title'];?></h3>

             <?php endif;?>

             <?php if(isset($VAN['contact_content']) && $VAN['contact_content']<>''):?><p><?php echo stripslashes($VAN['contact_content']);?></p><?php endif;?>

             <div class="contactway">

                <?php if(isset($VAN['name']) && $VAN['name']<>''):?><?php _e('Name:','SimpleKey');?> <?php echo $VAN['name'];?><br/><?php endif;?>

                <?php if(isset($VAN['phone']) && $VAN['phone']<>''):?><?php _e('Phone:','SimpleKey');?> <?php echo $VAN['phone'];?><br/><?php endif;?>

                <?php if(isset($VAN['fax']) && $VAN['fax']<>''):?><?php _e('Fax:','SimpleKey');?> <?php echo $VAN['fax'];?><br/><?php endif;?>

                <?php if(isset($VAN['skype']) && $VAN['skype']<>''):?><?php _e('Skype:','SimpleKey');?> <?php echo $VAN['skype'];?><br/><?php endif;?>

                <?php if(isset($VAN['address']) && $VAN['address']<>''):?><?php _e('Address:','SimpleKey');?> <?php echo $VAN['address'];?><?php endif;?>

             </div>






             <?php if(isset($VAN['subscribe_form']) && $VAN['subscribe_form']<>''):?>

             <div class="subscribe">

                <?php if(isset($VAN['subscribe_intro_title']) && $VAN['subscribe_intro_title']<>''):?>

                <h2><?php echo $VAN['subscribe_intro_title'];?></h2>

                <?php endif;?>

                <p>

                  <?php echo stripslashes($VAN['subscribe_form']);?>

                </p>

             </div>

             <?php endif;?>

            <h5>Follow us on</h5>

             <?php echo van_social();?>



           </div>
</div>
<div class="row">
<center><p>Copyright @ 2017 Ivzweb.com. </center>
</div>
       </div>

    </section>


</div>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/materialize.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/custom.js"></script>
<?php wp_footer();?>



</body>

</html>