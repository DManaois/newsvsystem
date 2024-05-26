<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/svlogo.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/edit_student_account.css') }}">
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

    <h2>Edit Student Details</h2>
    <form method="POST" action="{{ route('admin.updatestudent', ['id' => $student->id]) }}">
        @csrf
        @method('PUT')
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="{{ $student->name }}" required><br><br>
        <label for="student_no">Student Number:</label><br>
        <input type="text" id="student_no" name="student_no" value="{{ $student->student_no }}" required><br><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="{{ $student->email }}" required><br><br>
        <input type="submit" value="Update">
    </form>

    <div class="buttons-container">
        <button ><a href="{{ route('add_incident_report', ['id' => $student->id]) }}">Add Incident Report</a></button>
        <button><a href="{{ route('admin.liststudents') }}">Back to Student List</a></button>
    </div>

    
    
    <footer>
        <p>&copy; {{ date('Y') }} Adamson University. All Rights Reserved.</p>
    </footer>
</body>
</html>
