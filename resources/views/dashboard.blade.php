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
                        class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                        style="margin-bottom: 20px;" onclick="punchIn()">Punch In
                    </button>
                    <form action="/attendance/punchIn" id="punchInForm" method="POST" style="display:none">
                        @csrf
                        <input type="submit" value="">
                    </form>
                    <form action="/attendance/punchOut" id="punchOutForm" method="POST" style="display:none">
                        @csrf
                        <input type="submit" value="">
                    </form>
                    <button type="button"
                        class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                        style="margin-bottom: 20px;" onclick="punchOut()">Punch Out</button>
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
                                    {{ date_format(date_create($attendances->time_in), 'l, F j, Y') }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $attendances->location }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ date_format( date_create($attendances->time_in), 'h:i A') }}
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
                    <h1 class="font-semibold text-xl tracking-tight mr-6 " style="margin-bottom: 20px;">Daily Time
                        Records</h1>
                    <a href="/newAccomplishment/"><button type="button"
                            class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                            style="margin-bottom: 20px;">Add</button>
                        <button type="button"
                            class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
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
                                    <td class="px-6 py-4 loink-underline-primary link-primary"><a
                                            href="/accomplishment/{{ $accomplishments ->id }}">
                                            {{ $accomplishments->accomplishment }}</a>
                                    </td>
                                    <td class="px-6 py-4">
                                    <a href="/accomplishment/{{ $accomplishments ->id }}"
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

    <script>
        function punchIn() {
            if (confirm('Punch in for today?')) {
                document.getElementById('punchInForm').submit();
            }

        }
        function punchOut() {
            if (confirm('Punch out for today?')) {
                document.getElementById('punchOutForm').submit();
            }

        }
    </script>

</x-app-layout>