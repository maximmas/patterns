<?php

interface PostPublishListener
{
    public function postPublished(int $postId): void;
}