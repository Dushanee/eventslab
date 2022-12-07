<?php

session_start();

if (isset($_SESSION['username'])) {
  // echo $_SESSION['username'];

} else {
  echo '<br>You are not logged in';
}
?>


<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/style.css">




<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>



<body>
  <section id="menu">
    <div class="logo">
      <img src="images/logo.png" alt="">
      <h2>EVENT LABS</h2>
    </div>
    <div class="items">
      <li><i class='bx  bx-right-arrow'></i><a href="#">Dashboard</a></li>
      <li><i class='bx  bx-right-arrow'></i><a href="#">Dashboard</a></li>
      <li><i class='bx  bx-right-arrow'></i><a href="#">Dashboard</a></li>
      <li><i class='bx  bx-right-arrow'></i><a href="welcome/signout">Log Out</a></li>


    </div>



  </section>


  <section id="interface">
    <div class="navigation">
      <div class="n1">
        <div class="search">
          <i class='bx bx-search-alt'></i>
          <input type="text" placeholder="search">


        </div>
      </div>

      <div class="profile">
        <i class='bx bx-search-alt'></i>
        <img src="images/1.jpg" alt="">

      </div>
    </div>
    <h3 class="i-name">Dashboard</h3>

    <div class="values">
      <div class="val-box">
        <i class='bx bx-search-alt'></i>
        <div>
          <h3>2812</h3>
          <span>new users</span>
        </div>

      </div>
      <div class="val-box">
        <i class='bx bx-search-alt'></i>
        <div>
          <h3>2812</h3>
          <span>new users</span>
        </div>

      </div>
      <div class="val-box">
        <i class='bx bx-search-alt'></i>
        <div>
          <h3>2812</h3>
          <span>new users</span>
        </div>

      </div>
      <div class="val-box">
        <i class='bx bx-search-alt'></i>
        <div>
          <h3>2812</h3>
          <span>new users</span>
        </div>

      </div>
    </div>

    <div class="board">
      <table width="100%">
        <thead>
          <tr>
            <td>Name</td>
            <td>Title</td>
            <td>Status</td>
            <td>Role</td>
            <td></td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="people">
              <img src="images/2.jpg" alt="">
              <div class="people-de">
                <h5>Jhon Doe</h5>
                <p>Jhon@emwdw.com</p>
              </div>
            </td>

            <td class="people-des">
              <h5>Software engineer</h5>
              <p>Web dev</p>
            </td>


            <td class="active">
              <p>active</p>
            </td>

            <td class="role">
              <p>owner</p>
            </td>

            <td class="edit"><a href="#">Edit</a></td>
          </tr>
          <tr>
            <td class="people">
              <img src="images/2.jpg" alt="">
              <div class="people-de">
                <h5>Jhon Doe</h5>
                <p>Jhon@emwdw.com</p>
              </div>
            </td>

            <td class="people-des">
              <h5>Software engineer</h5>
              <p>Web dev</p>
            </td>


            <td class="active">
              <p>active</p>
            </td>

            <td class="role">
              <p>owner</p>
            </td>

            <td class="edit"><a href="#">Edit</a></td>
          </tr>
          <tr>
            <td class="people">
              <img src="images/2.jpg" alt="">
              <div class="people-de">
                <h5>Jhon Doe</h5>
                <p>Jhon@emwdw.com</p>
              </div>
            </td>

            <td class="people-des">
              <h5>Software engineer</h5>
              <p>Web dev</p>
            </td>


            <td class="active">
              <p>active</p>
            </td>

            <td class="role">
              <p>owner</p>
            </td>

            <td class="edit"><a href="#">Edit</a></td>
          </tr>
          <tr>
            <td class="people">
              <img src="images/2.jpg" alt="">
              <div class="people-de">
                <h5>Jhon Doe</h5>
                <p>Jhon@emwdw.com</p>
              </div>
            </td>

            <td class="people-des">
              <h5>Software engineer</h5>
              <p>Web dev</p>
            </td>


            <td class="active">
              <p>active</p>
            </td>

            <td class="role">
              <p>owner</p>
            </td>

            <td class="edit"><a href="#">Edit</a></td>
          </tr>
          <tr>
            <td class="people">
              <img src="images/2.jpg" alt="">
              <div class="people-de">
                <h5>Jhon Doe</h5>
                <p>Jhon@emwdw.com</p>
              </div>
            </td>

            <td class="people-des">
              <h5>Software engineer</h5>
              <p>Web dev</p>
            </td>


            <td class="active">
              <p>active</p>
            </td>

            <td class="role">
              <p>owner</p>
            </td>

            <td class="edit"><a href="#">Edit</a></td>
          </tr>
          <tr>
            <td class="people">
              <img src="images/2.jpg" alt="">
              <div class="people-de">
                <h5>Jhon Doe</h5>
                <p>Jhon@emwdw.com</p>
              </div>
            </td>

            <td class="people-des">
              <h5>Software engineer</h5>
              <p>Web dev</p>
            </td>


            <td class="active">
              <p>active</p>
            </td>

            <td class="role">
              <p>owner</p>
            </td>

            <td class="edit"><a href="#">Edit</a></td>
          </tr>
          <tr>
            <td class="people">
              <img src="images/2.jpg" alt="">
              <div class="people-de">
                <h5>Jhon Doe</h5>
                <p>Jhon@emwdw.com</p>
              </div>
            </td>

            <td class="people-des">
              <h5>Software engineer</h5>
              <p>Web dev</p>
            </td>


            <td class="active">
              <p>active</p>
            </td>

            <td class="role">
              <p>owner</p>
            </td>

            <td class="edit"><a href="#">Edit</a></td>
          </tr>
          <tr>
            <td class="people">
              <img src="images/2.jpg" alt="">
              <div class="people-de">
                <h5>Jhon Doe</h5>
                <p>Jhon@emwdw.com</p>
              </div>
            </td>

            <td class="people-des">
              <h5>Software engineer</h5>
              <p>Web dev</p>
            </td>


            <td class="active">
              <p>active</p>
            </td>

            <td class="role">
              <p>owner</p>
            </td>

            <td class="edit"><a href="#">Edit</a></td>
          </tr>
        </tbody>
      </table>

    </div>

  </section>


</body>



























   