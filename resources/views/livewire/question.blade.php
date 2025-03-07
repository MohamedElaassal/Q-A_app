<div>
    @php
        $questions = [
            [
                'id' => 1,
                'question' => 'Question : Lorem, ipsum dolor sit amet consectetur add?',
                'content' => 'content: Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore cumque ex enim rerum temporibus asperiores animi ipsa, veritatis ratione minus consectetur doloremque, similique eaque optio perferendis provident accusantium dolor iusto.',
            ],
            [
                'id' => 2,
                'question' => 'Question : Lorem, ipsum dolor sit amet consectetur add?',
                'content' => 'content: Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore cumque ex enim rerum temporibus asperiores animi ipsa, veritatis ratione minus consectetur doloremque, similique eaque optio perferendis provident accusantium dolor iusto.',
            ],
        ];
    @endphp

    @foreach ($questions as $question)
        <section id="{{ $question['id'] }}" class="border-1 border-slate-400 p-4 m-3">
            <p class="text-xl font-medium">{{ $question['question'] }}</p>
            <img src="#" alt="">
            <p>{{ $question['content'] }}</p>
            <livewire:answer>

        </section>
    @endforeach

</div>
