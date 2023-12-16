<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                You're logged in, {{ $user->name}}!
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="grid grid-cols-2 gap-4 mb-4">
    <div class="py-4">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-5">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="relative overflow-x-auto  mt-6" style="background-color: #fff; padding: 10px">
                <h1 class="font-semibold text-xl tracking-tight mr-6 ml-7" style="margin-bottom: 20px;">Daily Time Records</h1>
                <button type="button" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                    style="margin-bottom: 20px;" onclick="punchIn()">Punch In</button>
                <button type="button" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                    style="margin-bottom: 20px;" onclick>Punch Out</button>
                <table class="w-full text-sm text-left text-black">
                    <thead class="text-xs uppercase bg-white border-b">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Where
                            </th>
                            <th scope="col" class="px-6 py-3">
                                In
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Out
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach($attendances as $attendances)
                            <tr>
                                <td scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                    {{ $attendances->created_at }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $attendances->location }}
                                </td>
                                <td class="px-6 py-4">
                                {{ $attendances->time_in }}
                                </td>
                                <td class="px-6 py-4">
                                {{ $attendances->time_out }}
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Accomplishments -->
<div class="relative overflow-x-auto mt-6" style="background-color: #fff; padding: 10px;">
    <h1 class="font-semibold text-xl tracking-tight mr-6 ml-7" style="margin-bottom: 20px;">Accomplishments</h1>
    <button type="button" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
        style="margin-bottom: 20px;">Add</button>
    <button type="button" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
        style="margin-bottom: 20px;">Print</button>
    <table class="w-full text-sm text-left text-black">
        <thead class="text-xs uppercase bg-white border-b">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Date
                </th>
                <th scope="col" class="px-6 py-3">
                    Tasks Done
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
                            @foreach($accomplishments as $accomplishments)
                            <tr>
                                <td scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                    {{ $accomplishments->created_at }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $accomplishments->accomplishment }}
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
    </table>
</div>
                        </div>
                        </div>
                        </div>

</x-app-layout>
