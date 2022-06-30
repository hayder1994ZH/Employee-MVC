@extends('layouts.app')
@section('content')
{{-- Table (1) --}}
<div class="table-section">
    <table>
        {{-- Head table --}}
        <thead>
            <th>
                First Name
            </th>
            <th>
                Last Name
            </th>
            <th>
                City
            </th>
            <th>
                Salary
            </th>
        </thead>
        {{-- End head table --}}
        {{-- Body table --}}
        <tbody>
            @foreach ($employees as $employee)
            <tr>
                <td>
                    <span class="">{{ $employee->first_name }}</span>
                </td>
                <td>
                    <span class="">{{ $employee->last_name }}</span>
                </td>
                <td>
                    <span class="">{{ $employee->city }}</span>
                </td>
                <td>
                    <span class="">{{ $employee->salary }}</span>
                </td>
            </tr>
            @endforeach
        </tbody>
        {{-- End body table --}}
    </table>
</div>
{{-- End table (1) --}}
{{-- Hr line --}}
<hr class="hr-table">
{{-- Table (2) --}}
<div class="table-section">
    <table>
        {{-- Head table --}}
        <thead>
            <th>
                Full Name
            </th>
            <th>
                City
            </th>
            <th>
                Total Salary
            </th>
        </thead>
        {{-- End head table --}}
        {{-- Body table --}}
        <tbody>
            @foreach ($getSumSalariesGroupByCity as $employee)
            <tr>
                <td>
                    <span class="">{{ $employee->full_name }}</span>
                </td>
                <td>
                    <span class="">{{ $employee->city }}</span>
                </td>
                <td>
                    <span class="">{{ $employee->total_salary }}</span>
                </td>
            </tr>
            @endforeach
        </tbody>
        {{-- End body table --}}
    </table>
</div>
{{-- End table --}}
@stop