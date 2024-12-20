<?php

namespace Observer;

use MongoDB\Driver\Monitoring\Subscriber;

class Post
{
    protected array $subscribers;
    protected string $postContent;
    protected string $postTitle;

    protected int $postId;

    public function __construct()
    {
        $this->subscribers = [];
        $this->postContent = '';
        $this->postTitle = '';
        $this->postId = 12345;
    }

    public function addSubscriber(PostPublishListener $subscriber): void
    {
        $this->subscribers[] = $subscriber;
    }

    public function publish(): void
    {
        $this->postTitle = 'Lorem ipsum dolor sit amet';
        $this->postContent = 'Lorem ipsum dolor sit amet';
        $this->notifySubscribers();
    }

    public function notifySubscribers(): void
    {
        foreach ($this->subscribers as $subscriber) {
            $subscriber->postPublished($this->postId);
        }
    }
}