<x-app-layout>
    <div class="row justify-content-center py-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Your profile</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('web.profile.update', $user->id) }}">
                        <table class="table table-borderless">
                            @csrf
                            @method('PUT')
                            <tr>
                                <th scope="row">Name</th>
                                <td class="px-3">{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Nickname</th>
                                <td>
                                    <input id="nickname" type="text" class="form-control @error('nickname') is-invalid @enderror" name="nickname" value="{{ old('nickname', $user->nickname) }}" required autocomplete="nickname">

                                        @error('nickname')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        @enderror
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">level</th>
                                <td>{{ $user->level }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Credits</th>
                                <td>{{ $user->credits }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Email</th>
                                <td>{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Current password</th>
                                <td>
                                    <input id="current_password" type="password" class="form-control @error('current_password', ) is-invalid @enderror" name="current_password" required autocomplete="current_password">

                                    @error('current_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    @enderror
                            </td>
                            </tr>
                            <tr>
                                <th scope="row">New password</th>
                                <td>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                    <th scope="row">Confirm password</th>
                                    <td>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                                    </td>
                            </tr>
                        </table>
                        <br>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-danger btn-w-50 pull-right" > Update </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
