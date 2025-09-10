                                                <?php

                                                function getPosts() : array // Use type to more reliable
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
                                                }

                                                function getPostText($numPosts) : string // Use type to more reliable
                                                {
                                                    return $numPosts === 1 ? 'post' : 'posts';
                                                }

                                                $title = 'My Blog';
                                                $posts = getPosts();
                                                $numPosts = count($posts);
                                                $postText = getPostText($numPosts);
                                                $numPostsDisplay = "$numPosts $postText";
                                                ?>
                                                <h1><?= $title ?></h1>
                                                <h2><?= $numPostsDisplay ?></h2>
                                                <?php for ($i = 0; $i < $numPosts; $i++): ?>
                                                    <?php
                                                    if (str_contains($posts[$i]['title'], 'SQL')) :
                                                        continue;
                                                    endif
                                                    ?>
                                                    <h3><?= $posts[$i]['title'] ?></h3>
                                                    <p><?= $posts[$i]['content'] ?></p>
                                                <?php endfor ?>
