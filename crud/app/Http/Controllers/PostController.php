<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create(Request $req) {

      // array de new posts
      $new_post = [
        'title' => 'post 1',
        'description' => 'lorem ipsum',
        'author' => 'john'
      ];

      // instanciando uma variavel $post = new Post(); da model, não esqueça de importar o model
      $post = new Post();
      
      // os campos que vao ser cadastrado de acordo com o model - no fillable
      $post->title = 'segundo post';
      $post->description = 'aleatorias blabla..';
      $post->author = 'EU';
      $post->save();
    }

    public function postId(Request $req) {
      
      // variavel post = uma nova instancia do model Post
      $post = new Post();

      // variavel = post::find(1) busca pelo id 1
      $post = $post::find(2);

      // retorna o post
      return $post;
    }

    public function allposts(Request $req) {
      // variavel $posts = Post::all(); retorna todos os posts
      $posts = Post::all();

      // retorna todos os posts
      return $posts;
    }

    public function update(Request $req) {
      
      // peguei o id do post
      $post = Post::find(1);
      
      // atualiza o post mudando o title, description, author.
      $post->title = 'Novo Post atualizado';
      $post->description = 'Conteudo novo atualizado';
      $post->author = 'fulaninho';

      // salva a mudança
      $post->save();

      //retorna o resultado
      return $post;
    }

    public function delete(Request $req) {

      // caputura o post pelo id
      $post = Post::find(5);


      // condicional para deletar
      if($post) {
        return $post->delete();
      }

      // caso nao encontre o id.
      return "Nenhum post encontrado pelo id";

      // retorna o resultado. 
      return $post;
    }
}
