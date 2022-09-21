<x-app-layout>
    <div class="row">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container bg-white">
                <div class="form-check form-check-inline">
                    <h2> {{ __('Update '.$user->name) }}</h2>
                </div>
            </div>
        </nav>
    </div>
    <br>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('admin.users.update', $user->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="min-h-screen bg-gray-100 py-6">
            <div class="container bg-white py-6">
                <div class="container py-2" style="text-align: right;">
                    <a class="btn btn-outline-primary" href="{{ route('admin.users.index') }}"> Back</a>
                </div>
                <div class="row gx-5">
                    <div class="col">
                        <div class="form-group">
                            <label for="name">User's name</label>
                            <input type="text" value="{{ old('name', $user->name) }}" name="name" placeholder="User's name" id="name"
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="name">User's nickname</label>
                            <input type="text" value="{{ old('name', $user->nickname) }}" name="nickname" placeholder="User's nickname" id="nickname"
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" value="{{ old('password') }}" placeholder="User's password"
                                   id="price" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="description">Email</label>
                            <input name="email" id="email" value="{{ old('email', $user->email) }}" placeholder="Input new password"
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="role">Role</label>
                            <select class="form-select" id="role" name="role">
                                <option> Assign role for user</option>
                                @foreach($availableRoles as $id => $name)
                                    <option @if($user->roles()->first()->id === $id) selected @endif
                                    value="{{ $id }}"> {{ $name }} </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="pt-4" name="btn" style="text-align: right;">
                            <button class="btn btn-outline-primary">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-app-layout>
