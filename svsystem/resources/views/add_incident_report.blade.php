<!-- resources/views/admin/add_incident_report.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Add Incident Report</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/svlogo.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/add_incident_report.css') }}">
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
            <li><a href="{{ route('logout') }}">Logout</a></li>
        </ul>
        </nav>
    </header>   
    <h2>Add Incident Report for {{ $student->name }}</h2>
    
    <form action="{{ route('store_incident_report') }}" method="post">
    @csrf
    <label>Date:</label><br>
    <input type="date" name="date" required><br><br>
    <label>Details:</label><br>
    <textarea name="details" required></textarea><br><br>
    <label>Level of Violation/ Disciplinary Actions:</label><br>
    <select name="level_of_violation" required>
        <option value="Detention">Detention</option>
        <option value="Sending a student to the principal's office">Sending a student to the principal's office</option>
        <option value="Reprimand">Reprimand</option>
        <option value="Warnings">Warning</option>
        <option value="Suspensions">Suspension</option>
        <option value="Interim suspension">Interim suspension</option>
        <option value="Expulsions">Expulsion</option>
    </select><br><br>
    <label>Intervention Programs:</label><br>
    <select name="intervention_program" required>
        <option value="Counseling Sessions">Counseling Sessions</option>
        <option value="Behavior Modification Workshops">Behavior Modification Workshops</option>
        <option value="Academic Support Programs">Academic Support Programs</option>
        <option value="Peer Mediation Programs">Peer Mediation Programs</option>
        <option value="Restorative Justice Practices">Restorative Justice Practices</option>
        <option value="Community Service Assignments">Community Service Assignments</option>
        <option value="Parent-Teacher Conferences">Parent-Teacher Conferences</option>
        <option value="Anger Management Training">Anger Management Training</option>
        <option value="Substance Abuse Counseling">Substance Abuse Counseling</option>
        <option value="Conflict Resolution Training">Conflict Resolution Training</option>
    </select><br><br>
    <label>Type of Violation:</label><br>
    <select name="violation_type_id" required>
        @foreach($violationTypes as $violationType)
            <option value="{{ $violationType->id }}">{{ $violationType->name }}</option>
        @endforeach
    </select><br><br>
    <input type="hidden" name="student_id" value="{{ $student->id }}">
    <input type="hidden" name="reported_by" value="{{ Auth::user()->id }}">
    <input type="submit" value="Add">
    </form>

    
    <button id="goback" onclick="goBack()">Go Back</button>

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
