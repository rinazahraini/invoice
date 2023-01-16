<div>
    <div class="py-10 bg-white md:py-16">
        <div class="px-10 mx-auto max-w-7xl md:px-16">
            <div class="max-w-3xl mx-auto mb-10 md:mb-16">
                <p class="text-xs font-bold text-blue-500 uppercase">Contact Us</p>
                <h2 class="mt-1 text-2xl font-bold text-left text-gray-800 lg:text-3xl md:mt-2">Need to ask us a
                    question?</h2>
                <p class="max-w-screen-md mx-auto mt-4 text-left text-gray-500 md:text-lg md:mt-6">
                    Fill out the form below and we'll do some research on our end and get back to you within 24-48
                    hours. For specific technical issues, please visit our <a href="#_"
                        class="font-medium text-blue-500 underline">developer help center</a>.
                </p>
            </div>
            <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 pr-10 lg:px-8">
                <div
                    class="align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg">
                    <a href="{{url('form-invoice')}}" class="px-5 py-2 border-green-500 border text-green-500 rounded transition duration-300 hover:bg-green-700 hover:text-white focus:outline-none">Add</a>
                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th
                                    class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">
                                    Invoice ID</th>
                                <th
                                    class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                    Subject</th>
                                <th
                                    class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                    Due Date</th>
                                <th
                                    class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                    Issue Date</th>
                                <th
                                    class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                    View</th>
                                <th
                                    class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                    Option</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @forelse ($getInvoice as $item)
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                    <div class="flex items-center">
                                        <div>
                                            <div class="text-sm leading-5 text-gray-800">{{$item->invoice_id}}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                    <div class="text-sm leading-5 text-blue-900">{{$item->subject}}</div>
                                </td>
                                <td
                                    class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                                    <span
                                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <span aria-hidden
                                            class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                        <span
                                            class="relative text-xs">{{Date::parse($item->due_date)->format('d F Y')}}</span>
                                    </span>
                                </td>
                                <td
                                    class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                                    <span
                                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <span aria-hidden
                                            class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                        <span
                                            class="relative text-xs">{{Date::parse($item->issue_date)->format('d F Y')}}</span>
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">
                                    <div x-data="{ modelOpen: false }">
                                        <button wire:click="detail({{ $item->id }})" @click="modelOpen =!modelOpen"
                                            class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">View
                                            Details</button>
                                        @include('frontend.invoice-detail')
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">
                                    <button wire:click="delete({{ $item->id }})" class="px-5 py-2 border-red-500 border text-red-500 rounded transition duration-300 hover:bg-red-700 hover:text-white focus:outline-none">Delete</button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td>data no available</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <p class="max-w-3xl mx-auto mt-5 text-xs text-gray-400">
                Please allow up to 24-48 hour response during the weekdays.
            </p>
        </div>
    </div>
</div>
