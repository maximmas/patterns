<?php

class CacheCleaner implements PostPublishListener
{

    public function postPublished(int $postId): void
    {
        // Clear server cache
    }
}