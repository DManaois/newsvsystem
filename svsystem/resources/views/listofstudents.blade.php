<!DOCTYPE html>
<html>
<head>
    <title>List of Students</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/svlogo.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/listofstudents.css') }}">
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
    <div class="card-container" style="margin-bottom: 20px;">
    <div class="card">
        <img src="{{ asset('images/students.png') }}" alt="Logo">
            <div class="card-content">
                <h2 class="card-title">Students</h2>
                <p class="card-description">Our Violation Management System is primarily used by students, and its design is centered around their growth and well-being. By giving them access to a disciplined atmosphere where they can study and develop responsibly, the system seeks to support pupils. It assists in monitoring their behavior and making sure that any departures from the expected behavior are dealt with appropriately and quickly. The approach helps to promote a safe and courteous school community and a great educational experience by helping students understand and manage their actions.</p>
            </div>
    </div>
</div>
    <h2 style="text-align: center;">Students List</h2>
    <div class="buttons-container">
        <button><a href="{{ route('register') }}">Add Student</a></button>
        <button id="goback" onclick="goBack()">Go Back</button>
    </div>
    <table border="1">
        <tr>
            <th>Student No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        @foreach($students as $student)
        <tr>
            <td>{{ $student->student_no }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td><a href="{{ route('admin.viewstudent', ['id' => $student->id]) }}">View Details</a></td>
        </tr>
        @endforeach
    </table>


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
