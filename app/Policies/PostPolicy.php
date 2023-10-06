<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Post;

class PostPolicy
{
   public function author(User $user,Post $post)
   {
        if($post->user_id == auth()->user()->id){
            return true;
        }else{
            return false;
        }
   }

   public function published(?User $user, Post $post)
   {
        if($post->status == 2){
            return true;
        }else{
            return false;
        }
   }
}
