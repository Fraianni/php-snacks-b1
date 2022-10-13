<!-- Snack 3
Creare un array di array. 
Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 
e come valore un array di post associati a quella data. 
Stampare ogni data con i relativi post. -->
<style>
    .bg-blue {
        background-color: lightblue;
        padding: 10px;
        height: 150px;
        margin: 10px;

    }
</style>

<?php
$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];


$keys = array_keys($posts);

for ($i = 0; $i < count($keys); $i++) {
    $date = $keys[$i];
?>
    <div class="bg-blue">
        <?php
        $datePosts = $posts[$date];
        for ($j = 0; $j < count($datePosts); $j++) {
            $post = $datePosts[$j];
        ?>
            <p><?= $post['title'] ?> <?= $post['author'] ?> <?= $post['text'] ?></p>
        <?php
        }
        ?>
    </div>
<?php
}
?>