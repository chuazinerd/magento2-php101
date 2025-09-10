<?php declare(strict_types=1);

namespace App;

require('classes/Pessoa.php');

use App\Pessoa;
class Post {
    public static function getAll(): array // Use type to more reliable
    {
        $man = new Pessoa('Felipe');
        $man2 = new Pessoa('Jarbas');
        $man3 = new Pessoa('Julieta');
        return [
            [
                'title' => 'How to learn PHP',
                'content' => 'This is how you learn PHP.',
                'man' => $man->getName(),
            ],
            [
                'title' => 'How to learn MySql.',
                'content' => 'This is how you learn MySql.',
                'man' => $man2->getName(),
            ],
            [
                'title' => 'How to learn Nginx',
                'content' => 'This is how you learn Nginx.',
                'man' => $man3->getName(),
            ],
        ];
    } //

    public  static function getText(int $numPosts) : string // Use type to more reliable
    {
        return $numPosts === 1 ? 'post' : 'posts';
    }

}
