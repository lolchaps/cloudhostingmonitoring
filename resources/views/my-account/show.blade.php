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

        <div class="col-md-6">
            <form action="{{ route('my-account.update') }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}

                <table class="table table-bordered table-condensed">
                    <tbody>
                        <tr>
                            <th>Name</th>
                            <td>
                                <input type="tex" name="name" value="{{ $user->name }}" class="form-control input-sm">
                            </td>
                        </tr>

                        <tr>
                            <th>Surname</th>
                            <td>
                                <input type="text" name="surname" value="{{ $user->surname }}" class="form-control input-sm">
                            </td>
                        </tr>

                        <tr>
                            <th>Email</th>
                            <td>
                                <input type="email" name="email" value="{{ $user->email }}" class="form-control input-sm">
                            </td>
                        </tr>

                        <tr>
                            <th>Username</th>
                            <td>
                                <input type="text" name="username" value="{{ $user->username }}" class="form-control input-sm">
                            </td>
                        </tr>

                        <tr>
                            <th>Password</th>
                            <td>
                                <input type="password" name="password" value="{{ $user->password }}" class="form-control input-sm">
                            </td>
                        </tr>

                        <tr>
                            <th>Company</th>
                            <td>
                                <input type="text" name="company" value="{{ $user->department->company->name }}" class="form-control input-sm" disabled>
                            </td>
                        </tr>

                        <tr>
                            <th>Department</th>
                            <td>
                                <input type="text" name="department" value="{{ $user->department->description }}" class="form-control input-sm" disabled>
                            </td>
                        </tr>

                        <tr>
                            <th>Mobile</th>
                            <td>
                                <input type="text" name="mobile_no" value="{{ $user->mobile }}" class="form-control input-sm">
                            </td>
                        </tr>

                        <tr>
                            <th>Signature</th>
                            <td>
                                <input type="text" name="signature" value="{{ $user->signature }}" class="form-control input-sm">
                            </td>
                        </tr>

                        <tr>
                            <th>MobileID</th>
                            <td>
                                <input type="text" name="mobile_id" value="{{ $user->mobile_id }}" class="form-control input-sm">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-primary btn-sm">Update Info</button>
                @foreach ($errors->all() as $message)
                    {{ $message }}
                @endforeach
            </form>
        </div>

        <div class="col-md-6">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Admin</th>
                        <td>
                            @if ($user->permissions->contains('name', 'admin'))
                                <span class="text-primary">On</span>
                                {{-- {{ $user->permissions->contains('name', 'admin') ? 'On' : 'Off' }} --}}
                            @else
                                <span class="text-danger">Off</span>
                            @endif
                        </td>
                    </tr>

                    <tr>
                        <th>My Account</th>
                        <td>
                            @if ($user->permissions->contains('name', 'my_account'))
                                <span class="text-primary">On</span>
                            @else
                                <span class="text-danger">Off</span>
                            @endif
                        </td>
                    </tr>

                    <tr>
                        <th>Projects</th>
                        <td>
                            @if ($user->permissions->contains('name', 'projects'))
                                <span class="text-primary">On</span>
                            @else
                                <span class="text-danger">Off</span>
                            @endif
                        </td>
                    </tr>

                    <tr>
                        <th>Monitoring</th>
                        <td>
                            @if ($user->permissions->contains('name', 'monitoring'))
                                <span class="text-primary">On</span>
                            @else
                                <span class="text-danger">Off</span>
                            @endif
                        </td>
                    </tr>

                    <tr>
                        <th>Knowledgebase</th>
                        <td>
                            @if ($user->permissions->contains('name', 'knowledgebase'))
                                <span class="text-primary">On</span>
                            @else
                                <span class="text-danger">Off</span>
                            @endif
                        </td>
                    </tr>

                    <tr>
                        <th>Password Manager</th>
                        <td>
                            @if ($user->permissions->contains('name', 'password_manager'))
                                <span class="text-primary">On</span>
                            @else
                                <span class="text-danger">Off</span>
                            @endif
                        </td>
                    </tr>

                    <tr>
                        <th>Purchases</th>
                        <td>
                            @if ($user->permissions->contains('name', 'purchases'))
                                <span class="text-primary">On</span>
                            @else
                                <span class="text-danger">Off</span>
                            @endif
                        </td>
                    </tr>

                    <tr>
                        <th>Projects</th>
                        <td>
                            @if ($user->permissions->contains('name', 'projects'))
                                <span class="text-primary">On</span>
                            @else
                                <span class="text-danger">Off</span>
                            @endif
                        </td>
                    </tr>

                    <tr>
                        <th>Tickets</th>
                        <td>
                            @if ($user->permissions->contains('name', 'tickets'))
                                <span class="text-primary">On</span>
                            @else
                                <span class="text-danger">Off</span>
                            @endif
                        </td>
                    </tr>

                    <tr>
                        <th>Reports</th>
                        <td>
                            @if ($user->permissions->contains('name', 'reports'))
                                <span class="text-primary">On</span>
                            @else
                                <span class="text-danger">Off</span>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
