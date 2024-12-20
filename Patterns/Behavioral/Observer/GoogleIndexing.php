<?php

class GoogleIndexing implements PostPublishListener
{

    public function postPublished(int $postId): void
    {
        // send information to Google Indexing API about new post
    }
}