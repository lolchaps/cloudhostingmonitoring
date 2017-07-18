@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
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
            <form>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Name</th>
                            <td>
                                {{ $user->name }}
                                {{-- <input type="tex" name="name" value="{{ $user->name }}" class="form-control input-sm"> --}}
                            </td>
                        </tr>

                        <tr>
                            <th>Surname</th>
                            <td>
                                {{ $user->surname }}
                                {{-- <input type="text" name="surname" value="{{ $user->surname }}" class="form-control input-sm"> --}}
                            </td>
                        </tr>

                        <tr>
                            <th>Email</th>
                            <td>
                                {{ $user->email }}
                                {{-- <input type="email" name="email" value="{{ $user->email }}" class="form-control input-sm"> --}}
                            </td>
                        </tr>

                        <tr>
                            <th>Username</th>
                            <td>
                                {{ $user->username }}
                                {{-- <input type="text" name="username" value="{{ $user->username }}" class="form-control input-sm"> --}}
                            </td>
                        </tr>

                        <tr>
                            <th>Password</th>
                            <td>
                                {{ str_limit($user->password, 15) }}
                                {{-- <input type="password" name="password" value="{{ $user->password }}" class="form-control input-sm"> --}}
                            </td>
                        </tr>

                        <tr>
                            <th>Company</th>
                            <td>
                                {{ $user->department->company->name }}
                                {{-- <input type="text" name="company" value="{{ $user->department->company->name }}" class="form-control input-sm"> --}}
                            </td>
                        </tr>

                        <tr>
                            <th>Department</th>
                            <td>
                                {{ $user->department->description }}
                                {{-- <input type="text" name="department" value="{{ $user->department->description }}" class="form-control input-sm"> --}}
                            </td>
                        </tr>

                        <tr>
                            <th>Mobile</th>
                            <td>
                                {{ $user->mobile }}
                                {{-- <input type="text" name="mobile" value="{{ $user->mobile }}" class="form-control input-sm"> --}}
                            </td>
                        </tr>

                        <tr>
                            <th>Signature</th>
                            <td>
                                {{ $user->signature }}
                                {{-- <input type="text" name="signature" value="{{ $user->signature }}" class="form-control input-sm"> --}}
                            </td>
                        </tr>

                        <tr>
                            <th>MobileID</th>
                            <td>
                                {{ $user->mobile_id }}
                                {{-- <input type="text" name="mobile_id" value="{{ $user->mobile_id }}" class="form-control input-sm"> --}}
                            </td>
                        </tr>
                    </tbody>
                </table>
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
