<?php
$tittle = "My Blog";
$numPosts = '2';
$hasPosts = "$numPosts + 0";
$numPostDisplay = "\"$numPosts\" posts";
?>

<h1><?= $tittle ?> </h1>
<h2> <?= $numPostDisplay ?> </h2>

<?php
if ($numPosts) {
    echo "There are exactly $hasPosts";
} elseif ($numPosts === 3) {
    echo 'Posts exist';
} elseif ($numPosts === 2) {
    echo 'There 2 posts';
} else {
    echo "There are no posts";
}

?>
