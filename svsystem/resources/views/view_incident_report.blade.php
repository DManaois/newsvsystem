<!DOCTYPE html>
<html>
<head>
    <title>View Incident Report</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/svlogo.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/view_incident_report.css') }}">
</head>
<body>
    <header>        
        <nav>
            <div class="logo">
                <a href="{{ route('admin_dashboard') }}">
                <img src="{{ asset('images/svlogo.png') }}" alt="Logo">
            </div>
        <ul>
            <li><a href="https://webframeworksproject.online/">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('admin.liststudents') }}">Students</a></li>
            <li><a href="{{ route('violations') }}">Violations</a></li>
            <li><a href="{{ route('policy') }}">Policy</a></li>
            <li><a href="{{ route('interventions') }}">Intervention Programs</a></li>
            <li><a href="{{ route('login') }}">Logout</a></li>  
        </ul>
        </nav>
    </header>
    <h2>Incident Report Details</h2>

    @if($incident)
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Details</th>
                    <th>Level of Violation</th>
                    <th>Type of Violation</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $incident->date }}</td>
                    <td>{{ $incident->details }}</td>
                    <td>{{ $incident->level_of_violation }}</td>
                    <td>{{ $violationType ? $violationType->name : 'Unknown' }}</td>
                </tr>
            </tbody>
        </table>
        <!-- Buttons container with flex layout -->
        <div class="buttons-container">
            <button><a href="{{ route('edit_incident_report', ['id' => $incident->id]) }}">Edit</a></button>

            <!-- Delete button -->
            <form method="POST" action="{{ route('delete_incident_report'   , ['id' => $incident->id]) }}" onsubmit="return confirm('Are you sure you want to delete this incident report?');">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @else
        <p>Incident report not found</p>
    @endif
    <div class="buttons-container">
        <button id="goback" onclick="goBack()">Go Back</button>
    </div>
    
    <script>
        function goBack() {
            window.history.back();
        }
    </script>

    <footer>
        <p>&copy; {{ date('Y') }} Adamson University. All Rights Reserved.</p>
    </footer>
</body>
</html>
