@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Client Name</th>
                        <td>John</td>
                        <td></td>
                        <th>Project:</th>
                        <td>Website Design</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <th>(5) Other Projects</th>
                        <td></td>
                        <td></td>
                        <th>Status:</th>
                        <td>on hold, waiting on content</td>
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

        <div class="col-md-6">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Name</th>
                        <td>{{ $user->name }}</td>
                    </tr>

                    <tr>
                        <th>Surname</th>
                        <td>{{ $user->surname }}</td>
                    </tr>

                    <tr>
                        <th>Email</th>
                        <td>{{ $user->email }}</td>
                    </tr>

                    <tr>
                        <th>Username</th>
                        <td>{{ $user->username }}</td>
                    </tr>

                    <tr>
                        <th>Password</th>
                        <td></td>
                    </tr>

                    <tr>
                        <th>Company</th>
                        <td>{{ $user->department->company->name }}</td>
                    </tr>

                    <tr>
                        <th>Department</th>
                        <td>{{ $user->department->description }}</td>
                    </tr>

                    <tr>
                        <th>Mobile</th>
                        <td>{{ $user->mobile }}</td>
                    </tr>

                    <tr>
                        <th>Signature</th>
                        <td>{{ $user->signature }}</td>
                    </tr>

                    <tr>
                        <th>MobileID</th>
                        <td>{{ $user->mobile_id }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="col-md-6">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Admin</th>
                        <td></td>
                    </tr>

                    <tr>
                        <th>My Account</th>
                        <td></td>
                    </tr>

                    <tr>
                        <th>Projects</th>
                        <td></td>
                    </tr>

                    <tr>
                        <th>Monitoring</th>
                        <td></td>
                    </tr>

                    <tr>
                        <th>Knowledgebase</th>
                        <td></td>
                    </tr>

                    <tr>
                        <th>Password Manager</th>
                        <td></td>
                    </tr>

                    <tr>
                        <th>Purchases</th>
                        <td></td>
                    </tr>

                    <tr>
                        <th>Projects</th>
                        <td></td>
                    </tr>

                    <tr>
                        <th>Tickets</th>
                        <td></td>
                    </tr>

                    <tr>
                        <th>Reports</th>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
