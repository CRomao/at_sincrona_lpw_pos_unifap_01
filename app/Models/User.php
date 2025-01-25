<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class User extends Model{

    protected $fillable = ['name', 'email'];

    // Função para pegar os usuários com suas postagens
    public static function getUsersWithPosts(){

        // Obter os usuários com suas postagens
        $users = self::with('posts')->get();

        // Preparar o resultado
        $result = [];

        // Loop para processar cada usuário
        foreach ($users as $user) {
            // Verificar se o usuário tem postagens
            if ($user->posts->isEmpty()) {
                $result[] = [
                    'user' => $user->name,
                    'posts' => 'Nenhuma postagem'
                ];
            } else {
                // Obter os títulos das postagens
                $postTitles = $user->posts->pluck('title')->map(function ($title) {
                    return "- $title"; // Adicionar hífen no início de cada título
                })->toArray();

                $result[] = [
                    'user' => $user->name,
                    'posts' => $postTitles
                ];
            }
        }
        return $result;
    }

    public static function addUser($name, $email){

        $UserExist = self::where('email', $email)->first();
        
        //Verifica se já existe esse email.
        if ($UserExist) {
            return "O e-mail '$email' já está cadastrado.";
        }

        //Inserir o novo usuário.
        $user = self::create([
            'name' => $name,
            'email' => $email,
        ]);

        if ($user) {
            return "Usuário '$name' cadastrado com sucesso.";
        } else {
            return "Erro ao cadastrar o usuário.";
        }
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }

    //Deletar usuário por ID
    public static function deleteUser($userId){
        $user = self::find($userId);

        if (!$user) {
            return "Erro: Usuário com ID '$userId' não encontrado.";
        }

        $userName = $user->name;

        // Excluir postagens associadas ao usuário
        $user->posts()->delete();

        // Excluir o usuário
        $user->delete();

        return "Usuário '$userName' e todas as suas postagens foram excluídos com sucesso.";
    }
}

