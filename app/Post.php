<?php

#namespace App\Models;
namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // use HasFactory;
    // quais os campos que podem ser inseridos pelo usuário do sistema no Banco
    protected $fillable = ['title', 'description'];
    // protege os campos de inserções
    protected $guarded = ['id', 'created_at', 'update_at'];
    // tabela
    protected $table = 'posts';

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
        return $this;
    }

    public function getTitle(){
        return $this->title;
    } 
    public function setTitle($title){
        $this->title = $title;
        return $this;
    }

    public function getDescription(){
        return $this->description;
    } 
    public function setDescription($description){
        $this->description = $description;
        return $this;
    }

}