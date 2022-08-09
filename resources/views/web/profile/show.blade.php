<x-app-layout>
    <div class="row justify-content-center py-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Your profile</div>

                <div class="card-body">
                    <table class="table table-borderless">
                            <tr>
                                <th scope="row">Name</th>
                                <td class="px-3">{{ $user->name }}</td>
                            </tr>
                        <tr>
                            <th scope="row">Name</th>
                            <td class="px-3">{{ $user->nickname }}</td>
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
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
