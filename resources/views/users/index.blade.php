<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:PX-12 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                You're logged in, {{ $user->name}}!
                </div>
            </div>
        </div>
    </div>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:PX-12 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="grid  gap-4 mb-4">
    <div class="py-12">
    <div class="max-w-8xl mx-auto sm:px-12 lg:px-5">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="relative overflow-x-auto  mt-6" style="background-color: #fff; padding: 10px">
                <h1 class="font-semibold text-xl tracking-tight mr-6 ml-7" style="margin-bottom: 20px; text-align:center">Users</h1>
                <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                    Add User
                    </button>
                <table class="w-full text-sm text-left text-black">
                    <thead class="text-xs uppercase bg-white border-b">
                        <tr>
                            <th scope="col" class="px-12 py-3">
                                id
                            </th>
                            <th scope="col" class="PX-12 py-3">
                                Name
                            </th>
                            <th scope="col" class="PX-12 py-3">
                                Email
                            </th>
                            <th scope="col" class="PX-12 py-3">
                                Created At
                            </th>
                            <th scope="col" class="PX-12 py-3">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td scope="row" class="PX-12 py-4 font-medium whitespace-nowrap">
                                    {{ $user->id }}
                                </td>
                                <td class="PX-12 py-4">
                                    {{ $user->name }}
                                </td>
                                <td class="PX-12 py-4">
                                {{ $user->email }}
                                </td>
                                <td class="PX-12 py-4">
                                {{ $user->created_at }}
                                </td>
                                <td>
                                    <a href="/users/edit/{{ $user->id }}" style="color:blue">Edit</a>&nbsp;&nbsp;
                                    <a href="#" style="color:red">Delete</a>

                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


                        </div>
                        </div>
                        </div>

</x-app-layout>
