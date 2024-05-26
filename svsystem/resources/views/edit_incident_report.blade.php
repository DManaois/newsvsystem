<!-- resources/views/edit_incident_report.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit Incident Report</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/svlogo.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/edit_incident_report.css') }}">
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
    <h2>Edit Incident Report</h2>

    <form action="{{ route('update_incident_report') }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $incident->id }}">
        <label>Date:</label><br>
        <input type="date" name="date" value="{{ $incident->date }}" required><br><br>
        <label>Details:</label><br>
        <textarea name="details" required>{{ $incident->details }}</textarea><br><br>
        <label>Level of Violation/ Disciplinary Actions:</label><br>
        <select name="level_of_violation" required>
            <!-- Add options for violation levels here -->
            <option value="Detention" {{ $incident->level_of_violation == "Detention" ? 'selected' : '' }}>Detention</option>
            <option value="Sending a student to the principal's office" {{ $incident->level_of_violation == "Sending a student to the principal's office" ? 'selected' : '' }}>Sending a student to the principal's office</option>
            <option value="Reprimand" {{ $incident->level_of_violation == "Reprimand" ? 'selected' : '' }}>Reprimand</option>
            <option value="Warnings" {{ $incident->level_of_violation == "Warnings" ? 'selected' : '' }}>Warning</option>
            <option value="Suspensions" {{ $incident->level_of_violation == "Suspensions" ? 'selected' : '' }}>Suspension</option>
            <option value="Interim suspension" {{ $incident->level_of_violation == "Interim suspension" ? 'selected' : '' }}>Interim suspension</option>
            <option value="Expulsions" {{ $incident->level_of_violation == "Expulsions" ? 'selected' : '' }}>Expulsions</option>
            <!-- Add more options if needed -->
        </select><br><br>
        <label>Intervention Programs:</label><br>
        <select name="intervention_program" required>
            <option value="Counseling Sessions" {{ $incident->intervention_program == "Counseling Sessions" ? 'selected' : '' }}>Counseling Sessions</option>
            <option value="Behavior Modification Workshops" {{ $incident->intervention_program == "Behavior Modification Workshops" ? 'selected' : '' }}>Behavior Modification Workshops</option>
            <option value="Academic Support Programs" {{ $incident->intervention_program == "Academic Support Programs" ? 'selected' : '' }}>Academic Support Programs</option>
            <option value="Peer Mediation Programs" {{ $incident->intervention_program == "Peer Mediation Programs" ? 'selected' : '' }}>Peer Mediation Programs</option>
            <option value="Restorative Justice Practices" {{ $incident->intervention_program == "Restorative Justice Practices" ? 'selected' : '' }}>Restorative Justice Practices</option>
            <option value="Community Service Assignments" {{ $incident->intervention_program == "Community Service Assignments" ? 'selected' : '' }}>Community Service Assignments</option>
            <option value="Parent-Teacher Conferences" {{ $incident->intervention_program == "Parent-Teacher Conferences" ? 'selected' : '' }}>Parent-Teacher Conferences</option>
            <option value="Anger Management Training" {{ $incident->intervention_program == "Anger Management Training" ? 'selected' : '' }}>Anger Management Training</option>
            <option value="Substance Abuse Counseling" {{ $incident->intervention_program == "Substance Abuse Counseling" ? 'selected' : '' }}>Substance Abuse Counseling</option>
            <option value="Conflict Resolution Training" {{ $incident->intervention_program == "Conflict Resolution Training" ? 'selected' : '' }}>Conflict Resolution Training</option>
        </select><br><br>
        <label>Type of Violation:</label><br>
        <select name="violation_type_id" required>
            <!-- Add options for violation types here -->
            @foreach($violationTypes as $violationType)
                <option value="{{ $violationType->id }}" {{ $incident->violation_type_id == $violationType->id ? 'selected' : '' }}>{{ $violationType->name }}</option>
            @endforeach
        </select><br><br>
        <input type="submit" value="Update">
    </form>
    
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
