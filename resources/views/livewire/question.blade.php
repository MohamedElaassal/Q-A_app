<div class="flex flex-col min-h-screen">
    <div class="flex-grow">
        <livewire:add-question />

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
            <section id="{{ $question['id'] }}" class="border border-slate-400 p-4 m-3 flex flex-col">
                <div class="flex justify-between">
                    <p class="text-xl font-medium">{{ $question['question'] }}</p>
                    <img class="w-[24px] h-[24px] cursor-pointer hover:opacity-80" src="{{ asset('storage/trash.png') }}" alt="trash">
                </div>

                <p>{{ $question['content'] }}</p>
                <livewire:answer>
            </section>
        @endforeach
    </div>

    <x-footer />
</div>
