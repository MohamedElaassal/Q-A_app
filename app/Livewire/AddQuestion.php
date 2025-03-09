<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Question;

class AddQuestion extends Component
{
    public $title = "";
    public $content = "";

    protected $rules = [
        'title' => 'required|min:5',
        'content' => 'required|min:10',
    ];

    protected $messages = [
        'title.required' => 'Yo, the title is required !',
        'title.min' => 'Yo, the title must content 5 caraters at least !',
        'content.required' => 'Yo, the content is required !',
        'content.min' => 'Yo, the content must content 10 caraters at least !',
    ];

    public function save(){
        $this->validate();

        Question::create([
            'title' => $this->title,
            'content' => $this->content
        ]);

        $this->redirect('/', navigate:true);
    }

    public function render()
    {
        return view('livewire.add-question');
    }
}
