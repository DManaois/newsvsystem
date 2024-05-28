<!-- resources/views/student_view_incident_report.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Student View Incident Report</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/svlogo.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/student_view_incident_report.css') }}">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                    <a href="{{ route('student_dashboard') }}">
                    <img src="{{ asset('images/svlogo.png') }}" alt="Logo">
                </div>
            <ul>    
                <li><a href="https://webframeworksproject.online/">Home</a></li>
                <li><a href="{{ route('student_about') }}">About</a></li>
                <li><a href="{{ route('profile', ['id' => Auth::user()->id]) }}">My Profile</a></li>
                <li><a href="{{ route('student_violations') }}">Violations</a></li>
                <li><a href="{{ route('student_policy') }}">Policy</a></li>
                <li><a href="{{ route('student_interventions') }}">Intervention Programs</a></li>
                <li><a href="{{ route('logout') }}">Logout</a></li>
            </ul>
        </nav>       
    </header>
    <h2>Incident Report Details</h2>

    @if ($incident)
        <p>Date: {{ $incident->date }}</p>
        <p>Details: {{ $incident->details }}</p>
        <p>Level of Violation: {{ $incident->level_of_violation }}</p>
        <p>Type of Violation: {{ $violationType->name }}</p>
    @else
        <p>Incident report not found</p>
    @endif

    <button onclick="goBack()">Go Back</button>

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
