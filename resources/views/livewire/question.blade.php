<div class="flex flex-col min-h-screen" x-data>
    <div class="flex-grow">
        <livewire:add-question />

        <!-- Question Container -->
        <main class="ml-8 flex flex-wrap gap-4">
            @foreach ($questions as $question)
            <section
                wire:key="{{ $question->id }}"
                class="border border-slate-400 p-4 hover:shadow-lg flex flex-col w-[90%] sm:w-[40%] lg:w-[30%]"
            >
                <div class="flex justify-between">
                    <p class="text-xl font-medium">{{ $question->title }}</p>
                    <button type="button" wire:click="delete({{ $question->id }})" wire:confirm="Are you sure that you wanna delete this item?">
                        <img class="w-[24px] h-[24px] cursor-pointer hover:opacity-40" src="{{ asset('storage/trash.png') }}" alt="trash">
                    </button>
                </div>
                <p>{{ $question->content }}</p>
                <livewire:answer :question="$question" :key="$question->id"/>
            </section>
            @endforeach
        </main>
    </div>

    <x-footer />
</div>
