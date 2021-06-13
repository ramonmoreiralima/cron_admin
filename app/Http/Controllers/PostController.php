<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $posts;
    
    public function __construct(Post $post){
        $this->posts = $post;
    }

    // Exibe todos os registros
    public function index(){
        $posts = $this->posts->all();
        return view('posts.index',["posts" => $posts]);
        // return view('index',["posts" => $posts])->with('success','Bem Vindo.');
    }
    
    // Exibe um unico registro
    public function show($id){
        $post = $this->posts->find($id);
        return view('posts.show',compact('post'));
    }

    // Rota Cadastrar
    public function create(){
        return view('posts.create');
    }
    // Metodo Cadastrar
    public function store(Request $request){
        //efetua a parte de validacao
        $request->validate([
            'title'=>'required|string|max:50|min:2',
            'description'=>'required|string|min:1|max:150'
            ]);
        
        //efetua parte de gravação
        $post = $request->all();//resgata web
        $this->posts->setTitle($request->title);
        $this->posts->setDescription($request->description);

        $this->posts->create($post);//grava

        return redirect('/index');
        // return redirect()->route('/index')->with('success','Registro cadastrado com sucesso!');
    }

    // Rota Editar
    public function edit($id){
        $post = $this->posts->find($id);
        return view('posts.edit',compact('post'));
    }
    // Metodo Editar
    public function update(Request $request){
        //efetua a parte de validacao
        $request->validate([
            'title'=>'required|string|max:50|min:2',
            'description'=>'required|string|min:1|max:150'
            ]);
        
            $id = $request->id;
            $post = Post::findOrFail($id);
            $post->title=$request->title;
            $post->description=$request->description;
            $post->save();

            return redirect('/index');
            return redirect()->route('/index')->with('success','Registro editado com sucesso!');
    }

    // Metodo Deletar
    public function destroy($id){
        $post = $this->posts->find($id);
        $post->delete();
        return redirect('/index');
        // return redirect()->route('/index')->with('success','Registro deletado com sucesso!');
    }
    
}