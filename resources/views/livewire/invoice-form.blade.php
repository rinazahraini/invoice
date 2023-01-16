<div>
    <div class="py-10 bg-white md:py-16">
        <div class="px-10 mx-auto max-w-7xl md:px-16">
            <div class="max-w-3xl mx-auto mb-10 md:mb-16">
                <p class="text-xs font-bold text-blue-500 uppercase">Contact Us</p>
                <h2 class="mt-1 text-2xl font-bold text-left text-gray-800 lg:text-3xl md:mt-2">Need to ask us a question?</h2>
                <p class="max-w-screen-md mx-auto mt-4 text-left text-gray-500 md:text-lg md:mt-6">
                    Fill out the form below and we'll do some research on our end and get back to you within 24-48 hours. For specific technical issues, please visit our <a href="#_" class="font-medium text-blue-500 underline">developer help center</a>.
                </p>
            </div>
            <form class="grid max-w-3xl gap-4 mx-auto sm:grid-cols-2"  wire:submit.prevent="save">
                <div>
                    <label for="issue-date" class="inline-block mb-2 text-sm font-medium text-gray-500 sm:text-base">Issue Date</label>
                    <input wire:model="issue_date" type="date" class="w-full px-3 py-2 text-gray-800 transition duration-100 border rounded-md outline-none bg-gray-50 focus:ring ring-blue-300">
                </div>

                <div>
                    <label for="due-date" class="inline-block mb-2 text-sm font-medium text-gray-500 sm:text-base">Due Date</label>
                    <input wire:model="due_date" type="date" class="w-full px-3 py-2 text-gray-800 transition duration-100 border rounded-md outline-none bg-gray-50 focus:ring ring-blue-300">
                </div>

                <div>
                    <label for="origin" class="inline-block mb-2 text-sm font-medium text-gray-500 sm:text-base">Origin</label>
                    <input wire:model="origin" class="w-full px-3 py-2 text-gray-800 transition duration-100 border rounded-md outline-none bg-gray-50 focus:ring ring-blue-300">
                </div>

                <div>
                    <label for="destination" class="inline-block mb-2 text-sm font-medium text-gray-500 sm:text-base">Destination</label>
                    <input wire:model="destination" class="w-full px-3 py-2 text-gray-800 transition duration-100 border rounded-md outline-none bg-gray-50 focus:ring ring-blue-300">
                </div>
    
                <div class="sm:col-span-2">
                    <label for="subject" class="inline-block mb-2 text-sm font-medium text-gray-500 sm:text-base">Subject</label>
                    <input wire:model="subject" class="w-full px-3 py-2 text-gray-800 transition duration-100 border rounded-md outline-none bg-gray-50 focus:ring ring-blue-300">
                </div>

                <div class="flex items-center justify-between sm:col-span-2">
                    <button wire:click.prevent="add({{$i}})" class="inline-block px-8 py-3 text-sm font-semibold text-center text-white transition duration-100 bg-green-600 rounded-md outline-none hover:bg-green-500 active:bg-green-700 ring-green-300 md:text-base">Add</button>
                </div>

                <div>
                    <label for="item_type" class="inline-block mb-2 text-sm font-medium text-gray-500 sm:text-base">Item Type</label>
                    <input wire:model="item_type.0" class="w-full px-3 py-2 text-gray-800 transition duration-100 border rounded-md outline-none bg-gray-50 focus:ring ring-blue-300">
                </div>
    
                <div>
                    <label for="description" class="inline-block mb-2 text-sm font-medium text-gray-500 sm:text-base">Description</label>
                    <textarea wire:model="description.0" class="w-full h-28 px-3 py-2 text-gray-800 transition duration-100 border rounded-md outline-none bg-gray-50 focus:ring ring-blue-300"></textarea>
                </div>

                <div>
                    <label for="quantity" class="inline-block mb-2 text-sm font-medium text-gray-500 sm:text-base">Quantity</label>
                    <input wire:model="quantity.0" class="w-full px-3 py-2 text-gray-800 transition duration-100 border rounded-md outline-none bg-gray-50 focus:ring ring-blue-300">
                </div>

                <div>
                    <label for="unit_price" class="inline-block mb-2 text-sm font-medium text-gray-500 sm:text-base">Unit Price</label>
                    <input wire:model="unit_price.0" class="w-full px-3 py-2 text-gray-800 transition duration-100 border rounded-md outline-none bg-gray-50 focus:ring ring-blue-300">
                </div>

                @foreach ($inputs as $key => $value)
                <div>
                    <label for="item_type" class="inline-block mb-2 text-sm font-medium text-gray-500 sm:text-base">Item Type</label>
                    <input wire:model.defer="item_type.{{ $value }}" class="w-full px-3 py-2 text-gray-800 transition duration-100 border rounded-md outline-none bg-gray-50 focus:ring ring-blue-300">
                </div>
    
                <div>
                    <label for="description" class="inline-block mb-2 text-sm font-medium text-gray-500 sm:text-base">Description</label>
                    <textarea wire:model.defer="description.{{ $value }}" class="w-full h-28 px-3 py-2 text-gray-800 transition duration-100 border rounded-md outline-none bg-gray-50 focus:ring ring-blue-300"></textarea>
                </div>

                <div>
                    <label for="quantity" class="inline-block mb-2 text-sm font-medium text-gray-500 sm:text-base">Quantity</label>
                    <input wire:model.defer="quantity.{{ $value }}" class="w-full px-3 py-2 text-gray-800 transition duration-100 border rounded-md outline-none bg-gray-50 focus:ring ring-blue-300">
                </div>

                <div>
                    <label for="unit_price" class="inline-block mb-2 text-sm font-medium text-gray-500 sm:text-base">Unit Price</label>
                    <input wire:model.defer="unit_price.{{ $value }}" class="w-full px-3 py-2 text-gray-800 transition duration-100 border rounded-md outline-none bg-gray-50 focus:ring ring-blue-300">
                </div>

                <div class="flex items-center justify-between sm:col-span-2">
                    <button wire:click.prevent="remove({{$key}})" class="inline-block px-8 py-3 text-sm font-semibold text-center text-white transition duration-100 bg-red-600 rounded-md outline-none hover:bg-red-500 active:bg-red-700 ring-red-300 md:text-base">Delete</button>
                </div>
                @endforeach
    
                <div class="flex items-center justify-between sm:col-span-2">
                    <button type="submit" class="inline-block px-8 py-3 text-sm font-semibold text-center text-white transition duration-100 bg-blue-600 rounded-md outline-none hover:bg-blue-500 active:bg-blue-700 ring-blue-300 md:text-base">Save</button>
                </div>
            </form>
            <p class="max-w-3xl mx-auto mt-5 text-xs text-gray-400">
                Please allow up to 24-48 hour response during the weekdays.
            </p>
        </div>
    </div>
</div>
