<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>梅天涼 NoGood 全新開幕</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/style.css">
  </head>
  <body>
    <?php get_header(); ?>
    <main class="pt-5">
      <section class="container">
        <?php get_template_part('company'); ?>
      </section>
      <section class="container my-5 py-5 bg-light">
        <div>
          <?php get_template_part('about'); ?>
        </div>
      </section>
      <section class="container mb-5">
        <?php get_template_part('assess'); ?>
      </section>
      <section class="bg-light">
        <?php get_template_part('join'); ?>
      </section>
    </main>
    <?php get_footer(); ?>
  </body>
</html>


  