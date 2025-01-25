<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model{
    protected $fillable = ['user_id', 'title', 'content'];

    public static function  addPost($userId, $title, $content){

        //Verificar se o usuário existe no banco
        $user = User::find($userId);
    
        if (!$user) {
            return "Erro: Usuário com ID '$userId' não encontrado.";
        }
    
        // Adicionar a postagem
        $post = Post::create([
            'user_id' => $userId,
            'title'   => $title,
            'content' => $content,
        ]);
    
        if ($post) {
            return "Postagem '$title' adicionada com sucesso para o usuário '$user->name'.";
        } else {
            return "Erro ao adicionar a postagem.";
        }
    }
}