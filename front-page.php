<?php
get_header();

$title = get_field('title');
$description = get_field('description');
$link = get_field('link');
$imageArray = get_field('image');
$image = $imageArray['sizes']['large'];
?>

<?php
get_footer();
