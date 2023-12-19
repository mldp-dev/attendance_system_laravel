<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>
    @if(session('success'))
    <div class="alert alert-success">
        { !! session('success') !!}
    </div>
    @endif
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
            <div class="jumbotron">
  <h1 class="display-6">{{ $user_data->name }}</h1>
  <p class="lead">{{ $user_data->email }}</p>
  <hr class="my-4">
  <p>{{ $user_data->created_at }}</p>
  <p class="lead">
    <br>
    <a class="btn btn-primary btn-m" href="/user/{{ $user->id }}/edit" role="button">Edit</a>
  </p>
</div>

                        </div>
                        </div>
                        </div>

</x-app-layout>
