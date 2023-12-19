<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Accomplishment') }}
        </h2>

    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-7 lg:px-8" style="margin-top: 30px;">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

            <form class="max-w-s mx-auto" method="post" action="{{url('save-accomplishment')}}" style="padding:20px">
                <div class="mb-5">
                    <label for="form-label" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New
                        Task</label>
                    <input type="text" id="new_task" name="new_task" 
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="New Task" required>
                </div>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                <a href="{{url('dashboard')}}"><button type="button"
                        class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 
                        dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">Back</button></a>
            </form>
        </div>
    </div>

</x-app-layout>