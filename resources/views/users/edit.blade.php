<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:PX-12 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="grid  gap-4 mb-4">
    <div class="py-12">
    <div class="max-w-8xl mx-auto sm:px-12 lg:px-5">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="relative overflow-x-auto  mt-6" style="background-color: #fff; padding: 10px">
                <h1 class="font-semibold text-xl tracking-tight mr-6 ml-7" style="margin-bottom: 20px; text-align:center">Users</h1>
                <form>
  <div class="form-group">
    <label for="exampleInputName1">Name</label>
    <input type="name" class="form-control" id="exampleInputName1" aria-describedby="name" placeholder="Enter name" value="{{ $user->name }}">
    <small id="nameHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email address</label>
    <input type="emailHelp" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="{{ $user->email }}">
  </div>
  <div class="form-check">
    <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->
    <!-- <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
  </div>
  <a class="btn btn-primary btn-m" href="/user/{{ $user->id }}/edit" role="button">Submit</a>
  <a class="btn btn-primary btn-m" href="/users" role="button">Back</a>
</form>
            </div>
        </div>
    </div>
</div>


                        </div>
                        </div>
                        </div>

</x-app-layout>
