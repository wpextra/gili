<?php
$context = Bridge\Bridge::context();
$context['post'] = Bridge\Query::model('post')->find(get_the_ID())->results();
Bridge\Bridge::render('pages/single.html.twig', $context);
?> 