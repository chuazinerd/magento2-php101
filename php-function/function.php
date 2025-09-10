<?php declare(strict_types=1);

function getPosts(): array // Use type to more reliable
{
    return [
        [
            'title' => 'How to learn PHP',
            'content' => 'This is how you learn PHP.',
        ],
        [
            'title' => 'How to learn MySql.',
            'content' => 'This is how you learn MySql.',
        ],
        [
            'title' => 'How to learn Nginx',
            'content' => 'This is how you learn Nginx.',
        ],
    ];
} //

function getPostText(int $numPosts) : string // Use type to more reliable
{
    return $numPosts === 1 ? 'post' : 'posts';
}
