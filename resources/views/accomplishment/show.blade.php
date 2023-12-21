<!-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Accomplishment') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:PX-12 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                @if(session('success'))
                <div class="alert alert-success">
                    {!! session('success') !!}
                </div>
                @endif
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
                                <div class="relative overflow-x-auto  mt-6"
                                    style="background-color: #fff; padding: 10px">
                                    <div class="jumbotron">
                                        <p class="lead">{{ $accomplishment->accomplishment }}</p>
                                        <hr class="my-4">
                                        <p>{{ $accomplishment->created_at }}</p>
                                        <p class="lead">
                                            <br>
                                            <a class="btn btn-danger btn-m" href="/dashboard"
                                                role="button" href="/dashboard">Back</a>
                                            <a class="btn btn-primary btn-m" href="/accomplishment/{{ $accomplishment ->id }}/edit"
                                                role="button">Edit</a>
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>

</x-app-layout> -->