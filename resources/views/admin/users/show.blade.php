<x-app-layout>
    <div class="row">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container bg-white">
                <div class="form-check form-check-inline">
                    <h2>{{ __('About user') }}</h2>
                </div>
            </div>
        </nav>
    </div>
    <br>
    <div class="container bg-white py-4">
        <div class="d-flex justify-content-between py-2">
                <div class="form-check form-check-inline">
                    <h2> More about {{ $user->name}} </h2>
                </div>
                <div class="form-check form-check-inline px-4">
                    <a class="btn btn-outline-primary" href="{{ route('admin.users.index') }}"> Back</a>
                </div>
        </div>

        <div class="row py-2 px-4">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    {{ $user->name }}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>User's role:</strong>
                    {{ $user->roles()->first()->name }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 d-flex justify-content-between">
                <div class="form-group">
                    <strong>Created at:</strong>
                    {{ $user->created_at }}
                </div>
                <div class="form-check form-check-inline">
                    <form action="{{ route('admin.users.destroy',$user->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-primary">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
