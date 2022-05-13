<?php if (!isset($_POST["submit"]) || !isset($_POST["username"]) || !isset($_POST["password"])) {
  header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNIVERSITAS HASANUDDIN - SIKOLA</title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="icon" type="image/x-icon" href="../img/Logo-Unhas.png">
  </head>
  <body>
    <!-- Left Navigation Bar -->
    <div class="navbar">
      <a href="../index.php"><img src="../img/logo-sikola.png" alt="sikola"></a>

      <!-- Dashboard -->
      <div class="menu">
        <div class="allmenu" id="dashboard">
          <img src="../img/dashboard.png" alt="dashboard">
          <span>Dashboard</span>
        </div>
        <!-- My Class -->
        <div class="allmenu" id="myclass">
          <img src="../img/myclass.png" alt="myclass">
          <span>My Class</span>
        </div>
        <!-- All Courses -->
        <div class="allmenu" id="allcourse">
          <img src="../img/allcourse.png" alt="allcourse">
          <span>All Courses</span>
        </div>
        <!-- Calendar -->
        <div class="allmenu" id="calendar">
          <img src="../img/calendar.png" alt="calendar">
          <span>Calendar</span>
        </div>
      </div>

      <!-- Settings & Help -->
      <div class="menu2">
        <div class="allmenu" id="settings">
          <img src="../img/settings.png" alt="settings">
          <span>Settings</span>
        </div>
        <div class="allmenu" id="help">
          <img src="../img/help.png" alt="help">
          <span>Help Center</span>
        </div>
      </div>
    </div>

    <!-- Top Navigation Bar -->
    <div class="topbar">
      <div class="search">
        <label for="search"><img src="../img/search.png" alt="search"></label>
        <input type="text" id="search" placeholder="Search">
      </div>

      <!-- Profile -->
      <div class="profile">
        <img src="../img/notif.png" alt="notif">
        <div class="allmenuxtra" id="profile">
          <span><?= $_POST["username"] ?></span>
          <img src="../img/profile.png" alt="profil">
          <img class="arrow" src="../img/arrow.png" alt="arrow">
        </div>
      </div>
    </div>

    <!-- Display for Dashboard -->
    <div class="maincontent displaynone" id="dashboardmenu">
      <p class="greetings">Hey <?= $_POST["username"] ?>, Welcome to Sikola</p>
      <div class="information">
        <div class="infobox">
          <img src="../img/attendance.png" alt="attendance">
          <span class="infoTitle">Attendance</span>
          <p class="mainInfo">96%</p>
        </div>
        <div class="infobox">
          <img src="../img/zzz.png" alt="zzz">
          <span class="infoTitle">zzzzzzzzz</span>
          <p class="mainInfo">100%</p>
        </div>
        <div class="infobox">
          <img src="../img/quizotw.png" alt="quizotw">
          <span class="infoTitle">Quiz of the week</span>
          <p class="mainInfo">12</p>
        </div>
        <div class="infobox">
          <img src="../img/subject.png" alt="subjects">
          <span class="infoTitle">Subjects</span>
          <p class="mainInfo">8</p>
        </div>
      </div>

      <div class="recentfiles">
        <p>Recent Files</p>
        <p class="viewall">View All</p>

        <table style="width:45%;">
          <tr>
            <th style="width:80%;">Name</th>
            <th>Date</th>
          </tr>
        </table>
      </div>

      <div class="maincalendar">
        <span>January 2022</span>
        <div class="chevronarrow">
          <img src="../img/chevron_left.png" alt="chevron_left">
          <img src="../img/chevron_right.png" alt="chevron_right">
        </div>

      </div>
    </div>

    <!-- Display for My Class -->
    <div class="maincontent displaynone" id="myclassmenu">
      <p class="greetings">My Class</p>

      <div class="myclassinformation">
        <img src="../img/myclass/logo-matkul1.png" alt="matkul1">
        <div class="myclass-info">
          <span class="myclass-info-title">Dasar Pemrograman Komputer</span><br>
          <span class="myclass-info-desc">The Basic Computer Programming course discusses the procedures and concepts of programming in the C language which results in the ability to program using the C language with a load of 3 credits.</span><br>
          <span>16 lessons <li>&#x2022 Dosen 1</li></span>
        </div>
      </div>

      <div class="myclassinformation">
        <img src="../img/myclass/logo-matkul2.png" alt="matkul2">
        <div class="myclass-info">
          <span class="myclass-info-title">Sistem Digital</span><br>
          <span class="myclass-info-desc">This course discusses the concept of designing and manufacturing digital system devices with a load of 3 credits. Students are given an understanding of basic logic gates (AND, OR, NOT) and Boolean Algebra and their ....</span><br>
          <span>16 lessons <li>&#x2022 Dosen 2</li></span>
        </div>
      </div>

      <div class="myclassinformation">
        <img src="../img/myclass/logo-matkul3.png" alt="matkul3">
        <div class="myclass-info">
          <span class="myclass-info-title">Dasar Listrik dan Elektronika</span><br>
          <span class="myclass-info-desc">The Basic Computer Programming course discusses the procedures and concepts of programming in the C language which results in the ability to program using the C language with a load of 3 credits.</span><br>
          <span>16 lessons <li>&#x2022 Dosen 3</li></span>
        </div>
      </div>

      <div class="myclassinformation">
        <img src="../img/myclass/logo-matkul1.png" alt="matkul1">
        <div class="myclass-info">
          <span class="myclass-info-title">Pengantar Teknologi Informasi</span><br>
          <span class="myclass-info-desc">The Basic Computer Programming course discusses the procedures and concepts of programming in the C language which results in the ability to program using the C language with a load of 3 credits.</span><br>
          <span>16 lessons <li>&#x2022 Dosen 4</li></span>
        </div>
      </div>

      <div class="myclassinformation">
        <img src="../img/myclass/logo-matkul2.png" alt="matkul2">
        <div class="myclass-info">
          <span class="myclass-info-title">Matkul 5</span><br>
          <span class="myclass-info-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero asperiores pariatur aperiam voluptate vel nisi nostrum deserunt sit, enim cum quibusdam unde dicta minus similique quae quasi corporis excepturi? Provident.</span><br>
          <span>16 lessons <li>&#x2022 Dosen 5</li></span>
        </div>
      </div>

      <div class="myclassinformation">
        <img src="../img/myclass/logo-matkul3.png" alt="matkul3">
        <div class="myclass-info">
          <span class="myclass-info-title">Matkul 6</span><br>
          <span class="myclass-info-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero asperiores pariatur aperiam voluptate vel nisi nostrum deserunt sit, enim cum quibusdam unde dicta minus similique quae quasi corporis excepturi? Provident.</span><br>
          <span>16 lessons <li>&#x2022 Dosen 6</li></span>
        </div>
      </div>

      <div class="myclassinformation">
        <img src="../img/myclass/logo-matkul1.png" alt="matkul1">
        <div class="myclass-info">
          <span class="myclass-info-title">Matkul 7</span><br>
          <span class="myclass-info-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero asperiores pariatur aperiam voluptate vel nisi nostrum deserunt sit, enim cum quibusdam unde dicta minus similique quae quasi corporis excepturi? Provident.</span><br>
          <span>16 lessons <li>&#x2022 Dosen 7</li></span>
        </div>
      </div>
      
      <div class="myclassinformation">
        <img src="../img/myclass/logo-matkul2.png" alt="matkul2">
        <div class="myclass-info">
          <span class="myclass-info-title">Matkul 8</span><br>
          <span class="myclass-info-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero asperiores pariatur aperiam voluptate vel nisi nostrum deserunt sit, enim cum quibusdam unde dicta minus similique quae quasi corporis excepturi? Provident.</span><br>
          <span>16 lessons <li>&#x2022 Dosen 8</li></span>
        </div>
      </div>
    </div>

    <!--  Display for All Courses-->
    <div class="maincontent displaynone" id="allcoursemenu">
      <p class="greetings">Filter by: </p>
      <div class="filterby-container">
        <div class="filterby"></div>
        <div class="filterby"></div>
        <div class="filterby"></div>
      </div>

      <div class="myclassinformation">
        <img src="../img/allcourses/matkul1.png" alt="matkul1">
        <div class="myclass-info">
          <span class="myclass-info-title">Mata Kuliah 1</span><br>
          <span class="myclass-info-desc">The Basic Computer Programming course discusses the procedures and concepts of programming in the C language which results in the ability to program using the C language with a load of 3 credits.</span><br>
          <span>16 lessons <li>&#x2022 Lecturer</li></span>
        </div>
      </div>

      <div class="myclassinformation">
        <img src="../img/allcourses/matkul2.png" alt="matkul2">
        <div class="myclass-info">
          <span class="myclass-info-title">Mata Kuliah 2</span><br>
          <span class="myclass-info-desc">This course discusses the concept of designing and manufacturing digital system devices with a load of 3 credits. Students are given an understanding of basic logic gates (AND, OR, NOT) and Boolean Algebra and their ....</span><br>
          <span>16 lessons <li>&#x2022 Lecturer</li></span>
        </div>
      </div>

      <div class="myclassinformation">
        <img src="../img/allcourses/matkul3.png" alt="matkul3">
        <div class="myclass-info">
          <span class="myclass-info-title">Mata Kuliah 3</span><br>
          <span class="myclass-info-desc">The Basic Computer Programming course discusses the procedures and concepts of programming in the C language which results in the ability to program using the C language with a load of 3 credits.</span><br>
          <span>16 lessons <li>&#x2022 Lecturer</li></span>
        </div>
      </div>

      <div class="myclassinformation">
        <img src="../img/allcourses/matkul1.png" alt="matkul1">
        <div class="myclass-info">
          <span class="myclass-info-title">PMata Kuliah 4</span><br>
          <span class="myclass-info-desc">The Basic Computer Programming course discusses the procedures and concepts of programming in the C language which results in the ability to program using the C language with a load of 3 credits.</span><br>
          <span>16 lessons <li>&#x2022 Lecturer</li></span>
        </div>
      </div>

      <div class="myclassinformation">
        <img src="../img/allcourses/matkul2.png" alt="matkul2">
        <div class="myclass-info">
          <span class="myclass-info-title">Mata Kuliah 5</span><br>
          <span class="myclass-info-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero asperiores pariatur aperiam voluptate vel nisi nostrum deserunt sit, enim cum quibusdam unde dicta minus similique quae quasi corporis excepturi? Provident.</span><br>
          <span>16 lessons <li>&#x2022 Lecturer</li></span>
        </div>
      </div>

      <div class="myclassinformation">
        <img src="../img/allcourses/matkul3.png" alt="matkul3">
        <div class="myclass-info">
          <span class="myclass-info-title">Mata Kuliah 6</span><br>
          <span class="myclass-info-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero asperiores pariatur aperiam voluptate vel nisi nostrum deserunt sit, enim cum quibusdam unde dicta minus similique quae quasi corporis excepturi? Provident.</span><br>
          <span>16 lessons <li>&#x2022 Lecturer</li></span>
        </div>
      </div>

      <div class="myclassinformation">
        <img src="../img/allcourses/matkul1.png" alt="matkul1">
        <div class="myclass-info">
          <span class="myclass-info-title">Mata Kuliah 7</span><br>
          <span class="myclass-info-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero asperiores pariatur aperiam voluptate vel nisi nostrum deserunt sit, enim cum quibusdam unde dicta minus similique quae quasi corporis excepturi? Provident.</span><br>
          <span>16 lessons <li>&#x2022 Lecturer</li></span>
        </div>
      </div>
      
      <div class="myclassinformation">
        <img src="../img/allcourses/matkul2.png" alt="matkul2">
        <div class="myclass-info">
          <span class="myclass-info-title">Mata Kuliah 8</span><br>
          <span class="myclass-info-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero asperiores pariatur aperiam voluptate vel nisi nostrum deserunt sit, enim cum quibusdam unde dicta minus similique quae quasi corporis excepturi? Provident.</span><br>
          <span>16 lessons <li>&#x2022 Lecturer</li></span>
        </div>
      </div>


    </div>

    <!-- Display for Calendar -->
    <div class="maincontent displaynone" id="calendarmenu">

    </div>

    <!-- Display for Settings -->
    <div class="maincontent displaynone" id="settingsmenu">

    </div>

    <!-- Display for Help Center -->
    <div class="maincontent displaynone" id="helpmenu">

    </div>

    <!-- Display for Profile -->
    <div class="maincontent displaynone" id="profilemenu">
      <div class="profile-page">
        <p>Profil <a style="color:red;"><?= $_POST["username"] ?></a></p>
        <table>
          <tr>
            <td>Nama</td>
            <th><?= $_POST["username"] ?></th>
          </tr>
          <tr>
            <td>Nama User</td>
            <th>D121211103</th>
          </tr>
          <tr>
            <td>Program Studi</td>
            <th>TEKNIK INFORMATIKA-S1</th>
          </tr>
          <tr>
            <td>Semester</td>
            <th>SEMESTER AKHIR TAHUN AKADEMIK 2021/2022</th>
          </tr>
          <tr>
            <td>Code</td>
            <th>S1-2021-XXXXX-D121211103</th>
          </tr>
          <tr>
            <td>e-mail</td>
            <th>D121211103</th>
          </tr>
          <tr>
            <td>Phone</td>
            <th>08123456789</th>
          </tr>
          <tr>
            <td>Bahasa</td>
            <th></th>
          </tr>
          <tr>
            <td>Password</td>
            <th></th>
          </tr>
        </table>

        <img src="../img/profilepic.png" alt="profilepic">
      </div>
    </div>
    <script src="../js/script2.js"></script>
  </body>
</html>