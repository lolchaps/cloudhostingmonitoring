@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-condensed">
                <tbody>
                    <tr>
                        <th>Client Name</th>
                        <td></td>
                        <td></td>
                        <th>Project:</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <th>(0) Other Projects</th>
                        <td></td>
                        <td></td>
                        <th>Status:</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <th></th>
                        <td></td>
                        <td></td>
                        <th>Start Date:</th>
                        <td></td>
                        <td></td>
                        <td>Completion Date:</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="col-md-12">
            <table class="table table-bordered table-condensed">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Company</th>
                        <th>Last Login</th>
                        <th>Edit</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td></td>
                            <td></td>
                            <td>
                                <a href="{{ route('users.edit', $user) }}" class="btn btn-default btn-xs">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
