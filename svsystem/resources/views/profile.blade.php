<!-- resources/views/profile.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/svlogo.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/profile.css') }}">
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
                <li><a href="{{ route('student_dashboard') }}">About</a></li>
                <li><a href="{{ route('profile', ['id' => Auth::user()->id]) }}">My Profile</a></li>
                <li><a href="{{ route('student_violations') }}">Violations</a></li>
                <li><a href="{{ route('student_policy') }}">Policy</a></li>
                <li><a href="{{ route('student_interventions') }}">Intervention Programs</a></li>
                <li><a href="{{ route('login') }}">Logout</a></li>
            </ul>
        </nav>       
    </header>

    @if(Auth::check())
        <h1>Welcome, {{ $student->name }}</h1>
        <h2>Student Details</h2>
        <p>Email: {{ $student->email }}</p>
        <p>Student Number: {{ $student->student_no }}</p>   

        @if($incidentReports->isNotEmpty())
            <h3>Incident Reports:</h3>
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Type of Violation</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($incidentReports as $incident)
                        <tr>
                            <td>{{ $incident->date }}</td>
                            <td>{{ $incident->violationType->name }}</td>
                            <td><a href="{{ route('student.viewIncidentReport', ['id' => $incident->id]) }}">View Details</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No incident reports found</p>
        @endif
    @else
        <p>Unauthorized access</p>
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
