<?php
get_header();
// Création d'une custom query pour recuperer les trois derniers posts
// publiés
$the_query = new WP_Query([
  "posts_per_page" => 3,
  "post_type" => 'post',
  "post_status" => 'publish',
  "orderby" => 'date',
  "order" => 'ASC'
]);
?>

<?php
get_footer();
?>