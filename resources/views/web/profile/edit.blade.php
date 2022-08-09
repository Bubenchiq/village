<x-app-layout>
    <div class="row justify-content-center py-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Your profile</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('web.profile.update') }}">
                            @csrf
                            @method('PUT')
                            <div class="row align-items-start">
                                <div class="col-2 py-2">
                                    Name
                                </div>
                                <div class="col-4 mx-2 py-2">
                                    {{ $user->name }}
                                </div>
                            </div>
                            <div class="row align-items-start">
                                <div class="col-2 py-2">
                                    Nickname
                                </div>
                                <div class="col-4 py-2">
                                    <input id="nickname" type="text" class="form-control @error('nickname') is-invalid @enderror" name="nickname" value="{{ old('nickname', $user->nickname) }}" required autocomplete="nickname">

                                    @error('nickname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="row align-items-start">
                                <div class="col-2 py-2">
                                    level
                                </div>
                                <div class="col-4 py-2 mx-2">
                                    {{ $user->level }}
                                </div>
                            </div>
                            <div class="row align-items-start">
                                <div class="col-2 py-2">
                                    Credits
                                </div>
                                <div class="col-4 py-2 mx-2">
                                    {{ $user->credits }}
                                </div>
                            </div>
                            <div class="row align-items-start">
                                <div class="col-2 py-2">
                                    Email
                                </div>
                                <div class="col-4 py-2 mx-2">
                                    {{ $user->email }}
                                </div>
                            </div>
                            <div class="row align-items-start">
                                <div class="col-2 py-2">
                                    Current password
                                </div>
                                <div class="col-4 py-2">
                                    <input id="current_password" type="password" class="form-control @error('current_password', ) is-invalid @enderror" name="current_password" required autocomplete="current_password">

                                    @error('current_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="row align-items-start">
                                <div class="col-2 py-2">
                                    New password
                                </div>
                                <div class="col-4 py-2">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="row align-items-start">
                                <div class="col-2 py-2">
                                    Confirm password
                                </div>
                                <div class="col-4 py-2">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                                </div>
                                <div class="col-4 py-2">
                                    <button class="btn btn-danger btn-w-50 pull-right" > Update </button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
