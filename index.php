<?php

require "config.php";

use App\Models\User;
use App\Models\Post;
use App\Migrations\MGUser;
use App\Migrations\MGPost;


//Parte 1
/*
$user = new MGUser;
$user->up();

$post = new MGPost;
$post->up();
*/


//Parte 2.2
/*
echo User::addUser('João', 'joao@example.com');
echo User::addUser('Maria', 'maria@example.com');
echo User::addUser('Romão', 'romao@example.com');
*/


//Parte 2.3
/*
echo Post::addPost(3, 'Aula de Banco de dados', 'Começando os estudos em banco de dados!');
echo Post::addPost(2, 'Estudando Eloquent', 'Aprendendo Eloquent!');
echo Post::addPost(2, 'Estudando Eloquent 2', 'Aprendendo Eloquent 2!');
*/

//Parte 2.4
//echo User::deleteUser(1);

//Parte 2.1
/*
$usersPosts = User::getUsersWithPosts();

foreach ($usersPosts as $userData) {
    echo "Usuário: " . $userData['user'] . "\n";
    echo "Postagens: " . "\n";
    
    if (is_array($userData['posts'])) {
        foreach ($userData['posts'] as $postTitle) {
            echo $postTitle . "\n"; 
        }
    } else {
        echo $userData['posts'] . "\n";
    }

    echo "\n";
}
*/