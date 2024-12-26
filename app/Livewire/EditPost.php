<?php

namespace App\Livewire;

use App\Livewire\Forms\PostForm;
use App\Models\Post;
use Livewire\Component;
use function Symfony\Component\Translation\t;

class EditPost extends Component
{

    public PostForm $form;
    public bool $success=false;

    

       public function mount (Post $post)
       {
           $this->form->setPost($post);
        
        }
      

     public function update(): void
     {
        $this->validate();
        $this->form->update();
        $this->success=true;
     }

    public function render()
    {
        return view('livewire.edit-post');
    }
}
