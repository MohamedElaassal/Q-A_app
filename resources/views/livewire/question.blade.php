<div class="flex flex-col min-h-screen">
    <div class="flex-grow">

    <livewire:add-question>



    <main class="flex flex-wrap gap-2">

        @foreach ($questions as $question)
        <section class="border border-slate-400 p-4 m-2 flex flex-col w-full sm:w-1/2 sm:w-1/3">
            <div class="flex justify-between">
                <p class="text-xl font-medium">{{ $question->title}}</p>
               <button type="button" x-data x-on:click="if(confirm('Are you sure you want to delete this item?')) $wire.call('deleteItem')">
                   <img class="w-[24px] h-[24px] cursor-pointer hover:opacity-80" src="{{ asset('storage/trash.png') }}" alt="trash">
               </button>
            </div>

            <p>{{ $question->content }}</p>
            <livewire:answer :question="$question">
        </section>

        @endforeach
    </main>
</div>

    <x-footer />
</div>
