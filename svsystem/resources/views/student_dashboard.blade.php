<!DOCTYPE html>
<html>
<head>
    <title>Student Dashboard</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/svlogo.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/student_dashboard.css') }}">
</head>
<body>
<div class="svg-container">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="100%" viewBox="0 0 1600 900" preserveAspectRatio="xMidYMax slice">
            <defs>
                <linearGradient id="bg">
                    <stop offset="0%" style="stop-color:rgba(130, 158, 249, 0.06)"></stop>
                    <stop offset="50%" style="stop-color:rgba(76, 190, 255, 0.6)"></stop>
                    <stop offset="100%" style="stop-color:rgba(115, 209, 72, 0.2)"></stop>
                </linearGradient>
                <path id="wave" fill="url(#bg)" d="M-363.852,502.589c0,0,236.988-41.997,505.475,0
                s371.981,38.998,575.971,0s293.985-39.278,505.474,5.859s493.475,48.368,716.963-4.995v560.106H-363.852V502.589z" />
            </defs>
            <g>
                <use xlink:href='#wave' opacity=".3">
                    <animateTransform
                        attributeName="transform"
                        attributeType="XML"
                        type="translate"
                        dur="10s"
                        calcMode="spline"
                        values="270 230; -334 180; 270 230"
                        keyTimes="0; .5; 1"
                        keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
                        repeatCount="indefinite" />
                </use>
                <use xlink:href='#wave' opacity=".6">
                    <animateTransform
                        attributeName="transform"
                        attributeType="XML"
                        type="translate"
                        dur="8s"
                        calcMode="spline"
                        values="-270 230;243 220;-270 230"
                        keyTimes="0; .6; 1"
                        keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
                        repeatCount="indefinite" />
                </use>
                <use xlink:href='#wave' opacty=".9">
                    <animateTransform
                        attributeName="transform"
                        attributeType="XML"
                        type="translate"
                        dur="6s"
                        calcMode="spline"
                        values="0 230;-140 200;0 230"
                        keyTimes="0; .4; 1"
                        keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
                        repeatCount="indefinite" />
                </use>
            </g>
        </svg>
    </div>
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
                <li><a href="{{ route('login') }}">Logout</a></li>
            </ul>
        </nav>       
    </header>
    <h1 style="color: white; margin-top:20px;">Welcome, Student!</h1>


    <!-- Content sections for each navigation link -->
    <div class="card-container">
    <div class="card">
        <img src="{{ asset('images/about.png') }}" alt="Logo">
            <div class="card-content">
                <h2 class="card-title">ABOUT</h2>
                <p class="card-description">Violation Management System (VMS) handles the management and tracing of student misconducts in schools. The system is provided as a whole array of violation-related types such as academic cheating, student misbehavior, poor attendance records, substance abuse and violation of dress codes and other as well. Different levels are designed to categorize violations according to their intensity so that they are subject to appropriate... <a href="{{ route('student_about') }}">READ MORE</a></p>
            
                
            </div>
    </div>

    <div class="card">
        <img src="{{ asset('images/violations.png') }}" alt="Logo">
            <div class="card-content">
                <h2 class="card-title">Violations</h2>
                <p class="card-description">Any acts or behaviors that depart from the set rules and policies of the school are considered violations. These might be anything from transgressions of the dress code to more serious crimes like bullying or drug misuse. Every infraction is classified and entered into the system to guarantee that an exhaustive record is kept up to date. This classification aids in evaluating the frequency and seriousness of the infractions, which is essential for choosing... <a href="{{ route('student_violations') }}">READ MORE</a></p>
            </div>
    </div>

    <div class="card">
        <img src="{{ asset('images/policy.png') }}" alt="Logo">
            <div class="card-content">
                <h2 class="card-title">Privacy Policy</h2>
                <p class="card-description">Rules and policies established by the school must be followed, deviations from these guidelines are considered violations. These can include less serious transgressions like dressing code violations or more significant ones like bullying or drug addiction. To guarantee that an exhaustive record is kept, every infraction is classified and entered into the system. In order to choose the best interventions and penalties, it is essential to evaluate the... <a href="{{ route('student_policy') }}">READ MORE</a></p>
            </div>
    </div>

    <div class="card">
        <img src="{{ asset('images/intervention.png') }}" alt="Logo">
            <div class="card-content">
                <h2 class="card-title">Intervention</h2>
                <p class="card-description">The policies and plans put in place to deal with and rectify student infractions are known as interventions. Based on the type and seriousness of the infraction, the Violation Management System includes a number of intervention options. A few of these might be restorative justice initiatives, behavioral training, counseling services, and parental involvement campaigns. The purpose of interventions is to help the student acquire... <a href="{{ route('student_interventions') }}">READ MORE</a></p>
                </p>
            </div>
    </div>
</div>
    <!-- Add more content sections for other links -->
    <footer>
        <p>&copy; {{ date('Y') }} Adamson University. All Rights Reserved.</p>
    </footer>
</body>
</html>
