<x-app-layout>
    <div class="row">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container bg-white">
                <div class="form-check form-check-inline">
                    <h2>{{ __('Create user') }}</h2>
                </div>
            </div>
        </nav>
    </div>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.users.store') }}" method="post">
    @csrf
<div class="min-h-screen bg-gray-100 py-4">
    <div class="container py-6 bg-white">
        <div class="row gx-5">
            <div class="col">
                <div class="form-group">
                    <label for="name">User's name</label>
                    <input type="text" name="name" placeholder="User's name" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nickname">User's nickname</label>
                    <input type="text" name="nickname" placeholder="User's nickname" id="nickname" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="User's password" id="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="User's email" id="email" value="{{ old('name') }} " class="form-control">
                </div>
                <div class="form-group">
                    <label for="role">Role</label>
                    <select class="form-select" id="role" name="role">
                        <option selected>Assign role for user</option>
                        @foreach($availableRoles as $id => $name)
                        <option value="{{ $id }}"> {{ $name }} </option>
                        @endforeach
                    </select>
                </div>

                <div class="pt-4" name="btn" style="text-align: right;" >
                            <button class="btn btn-outline-primary" type="submit">Create</button>
                </div>
            </div>
        </div>
  </div>
</div>
</form>
</x-app-layout>
