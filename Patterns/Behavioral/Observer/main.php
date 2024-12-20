<?php

use Observer\Post;

$post = new Post();
$post->addSubscriber(new CacheCleaner);
$post->addSubscriber(new EmailNewsletter);
$post->addSubscriber(new GoogleIndexing);

$post->publish();