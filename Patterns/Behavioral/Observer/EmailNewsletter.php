<?php

class EmailNewsletter implements PostPublishListener
{

    public function postPublished(int $postId): void
    {
        // add information about new post to email newsletters
    }
}