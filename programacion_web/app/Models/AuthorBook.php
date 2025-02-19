<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


 // Se coloca la cardinalidad
 class AuthorBook extends Model
 {
     use HasFactory;
 
     public function author()
     {
         return $this->hasMany(Author::class);
     }
 
     public function book()
     {
         return $this->hasMany(Book::class);
     }
 }
