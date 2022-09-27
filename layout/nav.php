<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/Courses-Center/index.php">Courses Center</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <?php if (!empty($_SESSION['admin'])) { ?>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/Courses-Center/index.php"> Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        Students
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/Courses-Center/student/create-student.php">Create New Student</a>
                        <a class="dropdown-item" href="/Courses-Center/student/show-student.php">List All Students</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        Courses
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/Courses-Center/courses/addCourse.php">Create New Course</a>
                        <a class="dropdown-item" href="/Courses-Center/courses/displayCourses.php">List All Courses</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        Governements
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/Courses-Center/government/createGov.php">Create New Governement</a>
                        <a class="dropdown-item" href="/Courses-Center/government/showGov.php">List All Governements</a>
                    </div>
                </li>
            </ul>
    <a href="" class="btn btn-danger" onclick="window.open('http://localhost/Courses-center/logout.php')">Logout</a>
        </div>
    <?php } ?>

</nav>