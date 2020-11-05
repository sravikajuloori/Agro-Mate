
<html>
<head>
<title>HOME PAGE</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* Full height */
  height: 50%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Images used */
.img1 { background-image: url("../images/far6.jpg"); }
.img2 { background-image: url("../images/far4.jpg"); }
.img3 { background-image: url("../images/far5.jpg"); }
.img4 { background-image: url("../images/far2.jpg"); }

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  font-size: 80px;
  border: 10px solid #f1f1f1;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 700px;
  padding: 20px;
  text-align: center;
}


.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  /*border: none;
  outline :none;
  background: transparent;*/
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #e4e3e3;
}

</style>

</head>

<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand">
    <img src="../images/logo.jpg" alt="logo" style="width:40px;">
  </a>
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link active" href="#">HOME</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="../user/login.php">USER</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="../admin/admin_login.php">ADMIN</a>
    </li>
    <!-- Dropdown -->
    
     <li class="nav-item">
        <a class="nav-link" href="../faqs/faqs.html">FAQs</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        ABOUT
      </a>
      <div class="dropdown">
        <div class="dropdown-content">
        <a  href="../about us/project/project.html">Project</a>
        <a  href="../about us/team/team.php">Team</a>
        </div>
      </div>
    </li>
  </ul>
</nav>
<div class="bg-image img1"></div>
<div class="bg-image img2"></div>
<div class="bg-image img3"></div>
<div class="bg-image img4"></div>
<div class="bg-text">AGRO-MATE</div>

</body>
</html>