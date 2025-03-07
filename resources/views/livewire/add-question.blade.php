<!-- filepath: c:\xampp\htdocs\laravel-12-app\resources\views\livewire\add-question.blade.php -->
<div>
    <div x-data="{isOpen : false}">
        <button
           x-on:click="isOpen = true"
           class="cursor-pointer ml-3 my-3 py-1 px-2 text-lg bg-slate-300  border-white hover:border-2 hover:border-slate-300 hover:bg-white hover:text-slate-600"
        >
            Add Question
        </button>

        <div
            x-show="isOpen"
            style="background-color: rgba(0, 0, 0, .5)"
            class=" mx-auto absolute top-0 left-0 sm:w-full h-full flex items-center shadow-lg overflow-y-auto"
        >
            <div class="container mx-auto rounded p-4 mt-2 overflow-y-auto">
                <div class="bg-white rounded px-8 py-8 relative">
                    <h1 class="font-bold text-2xl mb-3">Add New Question</h1>
                    <div class="modal-body">
                        <label class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Enter question title">

                        <label class="block text-sm font-medium text-gray-700 mt-4">Content</label>
                        <textarea class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" rows="4" placeholder="Enter question content"></textarea>
                    </div>
                    <div class="mt-4 flex justify-end">
                        <button class="cursor-pointer bg-slate-500 text-white px-4 py-2 rounded border-1 border-white hover:border-2 hover:border-slate-300 hover:bg-white hover:font-medium  hover:text-slate-600"
                      >
                          Add</button>
                    </div>
                    <button x-on:click="isOpen = false" class="opacity-90 hover:opacity-100 cursor-pointer absolute -top-4 right-0 bg-red-500 text-2xl text-white px-3 py-1 mt-4 rounded">X</button>
                </div>
            </div>
        </div>
    </div>
</div>
