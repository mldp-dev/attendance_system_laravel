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


    <!-- Users Table -->
    <div class="max-w-7xl mx-auto sm:px-7 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

            <!-- Table -->
            <div class="grid grid-cols-2 gap-4 mb-4">

                <!-- Attendance -->
                <div class="relative overflow-x-auto mt-6 overflow-y-auto"
                    style="background-color: #fff; padding: 10px 20px 10px 20px; height: 500px">
                    <h1 class="font-semibold text-xl tracking-tight mr-6 " style="margin-bottom: 20px;">Daily Time
                        Records</h1>
                    <button type="button"
                        class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 
                        dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 "
                        onclick="punchIn()"> Punch In</button>
                    <button type="button"
                        class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 
                        dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 "
                        onclick="punchOut()"> Punch Out</button>
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 "
                        style="margin-top: 20px">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
                            <tr class="border-b border-gray-200 dark:border-gray-700">
                                <td scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                    {{ $attendances->created_at }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $attendances->location }}
                                </td>
                                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
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


                <!-- Accomplishments -->
                <div class="relative overflow-x-auto mt-6 overflow-y-auto"
                    style="background-color: #fff; padding: 10px 20px 10px 20px; height: 500px">
                    <h1 class="font-semibold text-xl tracking-tight mr-6" style="margin-bottom: 20px;">Daily Time
                        Records</h1>
                    <button type="button"
                        class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 
                        dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 "
                        onclick="punchIn()"> Add Task</button>
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"
                        style="margin-top: 20px;">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
                            <tr class="border-b border-gray-200 dark:border-gray-700">
                                <td scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                    {{ $accomplishments->created_at }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $accomplishments->accomplishment }}
                                </td>
                                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    <a href="#"
                                        class="font-medium text-red-600 dark:text-red-500 hover:underline">Remove</a>
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