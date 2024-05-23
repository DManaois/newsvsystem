<!DOCTYPE html>
<html>
<head>
    <title>View Student</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/view_student.css') }}">
</head>
<body>
    <header>        
        <nav>
            <div class="logo">
                <a href="{{ route('admin_dashboard') }}">
                <img src="{{ asset('images/svlogo.png') }}" alt="Logo">
            </div>
        <ul>
            <li><a href="#about">About</a></li>
            <li><a href="{{ route('admin.liststudents') }}">Students</a></li>
            <li><a href="#violations">Violations</a></li>
            <li><a href="#policy">Policy</a></li>
            <li><a href="#intervention">Intervention Programs</a></li>
            <li><a href="#incident">Incident Report</a></li>
            <li><a href="{{ route('login') }}">Logout</a></li>
        </ul>
        </nav>
    </header>
    <h2>Student Details</h2>

    @if($student)
    
        <h3>Name: {{ $student->name }}</h3>
        <p>Student Number: {{ $student->student_no }}</p>   
        <p>Email: {{ $student->email }}</p>
        <div class="buttons-container">
            <button><a href="{{ route('admin.editstudent', ['id' => $student->id]) }}">Edit</a></button>
        <form method="POST" action="{{ route('admin.deletestudent', ['id' => $student->id]) }}" onsubmit="return confirm('Are you sure you want to delete this student?');">
            @csrf
            @method('DELETE')
            <button type="submit">Delete Student</button>
        </form>
        </div>

        @if($incident_reports->count() > 0)
            <h4>Incident Reports:</h4>
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Type of Violation</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($incident_reports as $incident)
                        <tr>
                            <td>{{ $incident->date }}</td>
                            <td>{{ $incident->violationType->name }}</td>
                            <td><a href="{{ route('view_incident_report', ['id' => $incident->id]) }}">View Details</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No incident reports found</p>
        @endif
    @else
        <p>Student not found</p>
    @endif
    <div class="buttons-container">
        <button ><a href="{{ route('add_incident_report', ['id' => $student->id]) }}">Add Incident Report</a></button>
        <button><a href="{{ route('admin.liststudents') }}">Back to Student List</a></button>
    </div>

    
    
    <footer>
        <p>&copy; {{ date('Y') }} Your School Name. All Rights Reserved.</p>
    </footer>
</body>
</html>
