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
  <form action="/user" method="POST" id="addUserForm">
  @csrf
  <div class="form-group">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" name="name" required>
  </div>
  <div class="form-group" class="form-label">
    <label for="email">Email address</label>
    <input type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter name" name="email" required>
  </div>
  <div class="form-group" class="form-label">
    <label for="email">Password</label>
    <input type="text" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Enter name" name="password" required>
  </div>
  <div class="form-check">
    <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->
    <!-- <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
  </div>
  <a class="text-black btn btn-primary btn-m" onclick="submitForm()">Submit</a>
  <a class="text-black btn btn-primary btn-m" href="/users">Back</a>
  <!-- <a class="btn btn-primary btn-m danger" role="button">Submit</a>
  <a class="btn btn-primary btn-m" href="/users" role="button">Back</a> -->
</form>
<script>
  function submitForm(){
    if (confirm("Confirm adding this user?")){
      document.getElementById('addUserForm').submit();
    }
    
  }
</script>
            </div>
        </div>
    </div>
</div>


                        </div>
                        </div>
                        </div>

</x-app-layout>
