<div>
    <livewire:add-question>

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
            [
                'id' => 3,
                'question' => 'Question : Lorem, ipsum dolor sit amet consectetur add?',
                'content' => 'content: Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore cumque ex enim rerum temporibus asperiores animi ipsa, veritatis ratione minus consectetur doloremque, similique eaque optio perferendis provident accusantium dolor iusto.',
            ],
            [
                'id' => 4,
                'question' => 'Question : Lorem, ipsum dolor sit amet consectetur add?',
                'content' => 'content: Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore cumque ex enim rerum temporibus asperiores animi ipsa, veritatis ratione minus consectetur doloremque, similique eaque optio perferendis provident accusantium dolor iusto.',
            ],
            [
                'id' => 5,
                'question' => 'Question : Lorem, ipsum dolor sit amet consectetur add?',
                'content' => 'content: Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore cumque ex enim rerum temporibus asperiores animi ipsa, veritatis ratione minus consectetur doloremque, similique eaque optio perferendis provident accusantium dolor iusto.',
            ],
        ];
    @endphp

    <main class="flex flex-wrap gap-2">

        @foreach ($questions as $question)
        <section id="{{ $question['id'] }}" class="border border-slate-400 p-4 m-2 flex flex-col w-full sm:w-1/2 sm:w-1/3">
            <div class="flex justify-between">
                <p class="text-xl font-medium">{{ $question['question'] }}</p>
               <button type="button" x-data x-on:click="if(confirm('Are you sure you want to delete this item?')) $wire.call('deleteItem')">
                   <img class="w-[24px] h-[24px] cursor-pointer hover:opacity-80" src="{{ asset('storage/trash.png') }}" alt="trash">
               </button>
            </div>

            <p>{{ $question['content'] }}</p>
            <livewire:answer>
        </section>

        @endforeach
    </main>

    <x-footer />
</div>
