<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/G4-Tasks/index.php">Center</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/G4-Tasks/index.php"> Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    Students
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/G4-Tasks/student/create-student.php">Create New Student</a>
                    <a class="dropdown-item" href="/G4-Tasks/student/show-student.php">List All Students</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    Courses
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/G4-Tasks/courses/addCourse.php">Create New Course</a>
                    <a class="dropdown-item" href="/G4-Tasks/courses/displayCourses.php">List All Courses</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    Governements
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/G4-Tasks/government/createGov.php">Create New Governement</a>
                    <a class="dropdown-item" href="/G4-Tasks/government/showGov.php">List All Governements</a>
                </div>
            </li>
        </ul>
    </div>
</nav>