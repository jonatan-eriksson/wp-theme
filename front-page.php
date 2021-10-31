<?php
get_header();

$title = get_field('title');
$description = get_field('description');
$link = get_field('link');
$imageArray = get_field('image');
$image = $imageArray['sizes']['large'];
?>

<section class="hero bg-light py-5">
  <div class="container">
    <div class="row row align-items-center">
      <div class="col-lg-5 offset-lg-1 order-lg-1">
        <img class="img-fluid" src="<?php echo $image; ?>">
      </div>
      <div class="col-lg-6">
        <h1 class="mt-3">
          <?php echo $title; ?>
        </h1>
        <p class="lead text-secondary my-5">
          <?php echo $description; ?>
        </p>
        <a href="<?php echo $link['url']; ?>" class="btn btn-outline-secondary btn-lg">
          <?php echo $link['title']; ?>
        </a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
