<div>

    <div x-data="{isOpen : false}">
        <button
           x-on:click="isOpen = true"
           class="text-slate-700 cursor-pointer hover:shadow-xs hover:font-medium hover:text-slate-900 italic text-sm cursor-pointe"
        >
            Show answers
        </button>

        <div
            x-show="isOpen"
            style="background-color: rgba(0, 0, 0, .5)"
            class="fixed top-0 left-0 w-full h-screen flex items-center justify-center shadow-lg overflow-y-auto z-50"
        >
            <div class="container mx-auto rounded p-4 mt-2 overflow-y-auto">
                <div class="bg-white rounded px-8 py-8 relative">
                    <h1 class="font-medium text-2xl mb-3 text-slate-400">List of answers</h1>
                    <div class="modal-body">
                        <p class="text-sm italic"> autor : {{ $question->user->name }}</p>
                        <p class="text-lg "> content : {{ $question->answer }}</p>

                    </div>
                    <div class="mt-4">
                        <button x-on:click="isOpen = false" class="cursor-pointer absolute -top-4 right-0 bg-red-500 text-2xl text-white px-3 py-1 mt-4 rounded">X</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
