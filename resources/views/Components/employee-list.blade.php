@props(['employees'])
<div class="employee-list">
    <ul>
        @foreach ($employees as $employee)
            <li>
                <x-employee-card :employee="$employee" />
            </li>
        @endforeach
    </ul>
</div>
