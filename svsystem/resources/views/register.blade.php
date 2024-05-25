<!DOCTYPE html>
<html>
<head>
    <title>Add New Student</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/svlogo.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/register.css') }}">
</head>
<body>

    <header>        
        <nav>
            <div class="logo">
                <a href="{{ route('admin_dashboard') }}">
                <img src="{{ asset('images/svlogo.png') }}" alt="Logo">
            </div>
        <ul>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('admin.liststudents') }}">Students</a></li>
            <li><a href="{{ route('violations') }}">Violations</a></li>
            <li><a href="{{ route('policy') }}">Policy</a></li>
            <li><a href="{{ route('interventions') }}">Intervention Programs</a></li>
            <li><a href="{{ route('login') }}">Logout</a></li>
        </ul>
        </nav>
    </header>

    
    <h2>Add new student</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf <!-- CSRF Protection -->
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        <label for="student_no">Student Number:</label><br>
        <input type="text" id="student_no" name="student_no" required><br><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Register">
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
