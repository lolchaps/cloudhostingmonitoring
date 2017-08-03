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
            <h3>Reports</h3>
            
            <table class="table table-bordered table-condensed">
                <thead>
                    <tr>
                        <th>From Address</th>
                        <th>To Address</th>
                        <th>Subject</th>
                        <th>Email Header</th>
                        <th>Email Body</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($reports as $report)
                        <tr>
                            <td>{{ $report->from }}</td>
                            <td>{{ $report->to }}</td>
                            <td>{{ $report->subject }}</td>
                            <td>{{ $report->headers }}</td>
                            <td>{{ $report->text }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
