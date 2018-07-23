
<?php
$context = Bridge\Bridge::context();
$context['posts'] = Bridge\Query::model('post')->get(['posts_per_page' => 10])->results();
Bridge\Bridge::render('pages/index.html.twig', $context);
?> 