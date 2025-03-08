<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Question;


class Answer extends Component
{

    public $question;

    public function mount(Question $question)
    {
        $this->question = $question;
    }
    public function render()
    {
        return view('livewire.answer');
    }
}
