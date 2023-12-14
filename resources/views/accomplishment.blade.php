<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Accomplishment') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900">
        {{ __("Accomplishment Done!") }}
    </div>
</div>
</div>
</div>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left text-black">
                    <thead class="text-xs uppercase bg-white border-b">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Done
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                2023-12-14, Thursday
                            </th>
                            <td class="px-6 py-4">
                                Created visually appealing and responsive user interfaces.
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                2023-12-14, Thursday
                            </th>
                            <td class="px-6 py-4">
                                Implemented designs using HTML, CSS, and JavaScript.
                            </td>
                        </tr>
                        <tr class="bg-white">
                            <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                2023-12-14, Thursday
                            </th>
                            <td class="px-6 py-4">
                                Used CSS frameworks like Bootstrap or Tailwind CSS for styling.
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

    
</x-app-layout>
