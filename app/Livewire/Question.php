<?php

namespace App\Livewire;

use App\Models\Question as QuestionModel;
use Livewire\Component;

class Question extends Component
{
    public $questions = [];

    public function mount()
    {
        $this->questions = QuestionModel::all();
    }

    public function render()
    {
        return view('livewire.question');
    }
}
