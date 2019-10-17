<!DOCTYPE html>
<html>
  <head>
    <title>Contact Support</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <style>
    body {
      padding: 0;
      margin: 0;
    }
    a {
      text-decoration: none;
      color: inherit;
    }
    
    .main-cont {
      font-family: 'Ubuntu', sans-serif;
      display: grid;
      grid-template-columns: repeat(5, 1fr);
      grid-template-rows: 85px auto;
      height: 100vh;
    }
    
    /*sidebar*/
    .sidebar {
      grid-column: 1 / 2;
      grid-row: 1 / -1;
      background-color: #091429;
      color: #ffffff;
      height: 100%;
    }
    .sidebar-content {
      margin: 55px 22px;
    }
    .logo-img {
      height: 30px;
    }
    .nav-table {
      margin: 50px 0px;
    }
    .icon {
      height: 25px;
      margin-right: 10px;
    }
    .nav-txt {
      font-size: 0.9rem;
      font-weight: 600;
    }
    
    /*header*/
    .header {
      grid-column: 2 / -1;
      display: flex;
      flex-flow: row nowrap;
      align-items: center;
      justify-content: space-between;
      background-color: #ffffff;
      box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.25);
    }
    .header>h3 { 
      margin: 0px 40px;
      font-size: 1.4rem;
    }
    .header p { 
      margin: 0 7px;
      align-self: center;
      font-weight: bold;
      font-size: 15px;
    }
    .header-items {
      display: flex;
      flex-flow: row nowrap;
      align-items: center;
    }
    .header-items>div {
      margin: 0 13px;
      display: flex;
      flex-flow: row nowrap;
      align-items: center;
    }
    .header-icon {
      height: 25px;
    }
    .avatar-sm {
      border-radius: 50%;
      height: 45px;
    }
    .dropdown {
      display: block;
      position: relative;
    }
    .dropdown-menu {
      opacity: 0;
      visibility: hidden;
      position: absolute;
      z-index: 1;
      width: auto;
      background-color: #091429;
      border-radius: 5px;
      color: #ffffff;
      margin-top: 100px;
      transition: opacity ease-in 500ms;
    }
    .dropdown-menu.active {
      visibility: visible;
      opacity: 1;
    }
    .menu-item {
      margin: 10px;
      display: block;
      text-align: center;
      border: none;
      border-bottom: 2px solid #091429;
      transition: border-bottom ease-in 400ms;
    }
    .menu-item:hover {
      border: none;
      border-bottom: 2px solid #ffffff;
    }
    .caret-down {
      align-self: center;
      cursor: pointer;
    }
    
    /*main body content*/
    .content {
      grid-column: 2 / -1;
      text-align: center;
    }
    .hero-img {
      height: 60vh;
      width: 45vw;
      align-self: center;
    }
    .content>h4 {
      font-weight: 700;
      font-size: 1.2rem;
    }
    .contact-form {
      display: flex;
      flex-flow: column nowrap;
      margin: 60px 15vw;
      font-family: inherit;
    }
    .form-label{
      font-size: 0.8rem;
      align-self: flex-start;
      font-weight: bold;
      color: #575757;
    }
    .inpt {
      height: 30px;
      margin: 10px 0 40px 0;
      font-size: 1rem;
      border: 1px solid #000000;
    }
    .txt-area {
      margin: 10px 0 40px 0;
      font-size: 1rem;
      font-family: 'Ubuntu', sans-serif;
      border: 1px solid #000000;
    }
    .contact-form-btn {
      width: 155px;
      padding: 10px 20px;
      font-size: 18px;
      align-self: center;
      color: #ffffff;
      background-color: #091429;
      border: 1px solid #091429;
      font-family: inherit;
    }
    .contact-form-btn:hover {
      background-color: #032566;
      border: 1px solid #032566;
      cursor: pointer;
      font-family: inherit;
    }
    
    /*media query*/
    @media(max-width: 600px){
      .main-cont {
         grid-template-columns: repeat(4, 1fr);
      }
      .header {
        grid-column: auto;
      }
      .header>h4 {
        margin: 0 10px;
      }
      .hero-img {
        width: 80vw;
      }
      .inpt, .txt-area {
        margin: 10px 0 40px 0;
      }
    }
  </style>
  </head>

  <body>
    <div class="main-cont">

      <div class="header">

        <h3>Contact Support</h3>
        <div class="header-items">
          <div>
            <a href="#"><img src="https://res.cloudinary.com/slarin/image/upload/v1570685957/contact-support/help_pvv3ie.svg" class="header-icon"></a>
            <a href="#"><p>Support</p></a>
          </div>
          <style type="text/css">
             .tbutton {
            float: left;
            width: 80px;
            background: #ffffff;
            border: none;
            height: 100%;
            border-right: 2px solid rgba(196, 196, 196, 0.4);
        }
             ul {
            display: inline-block;
            float: right;   
            width: fit-content;
            padding-inline-start: 10px;
            margin-top: 24px;
            
        }

        li {
            
            display: inline;
        }
          </style>
         <ul>
                <li class="login tbutton"><a  href="{{ url('/login') }}">Login</a></li>
                <li class = "signup .tbutton" ><a class = "signup" href="{{ url('/register') }}">Signup</a></li>
            </ul>
          
        </div>
      </div>

      <div class="sidebar">
        <div class="sidebar-content">
          <img class="logo-img" src="https://res.cloudinary.com/slarin/image/upload/v1570685957/contact-support/lancers_zump2v.svg">
          <table class="nav-table">
            <tr>
              <td><img src="https://res.cloudinary.com/slarin/image/upload/v1570685957/contact-support/home_ytnlm7.svg" class="icon"></td><td class="nav-txt"><a href="#">Dashboard</a></td>
            </tr>
            <tr>
              <td><img src="https://res.cloudinary.com/slarin/image/upload/v1570685955/contact-support/customer_bpnu4k.svg" class="icon"></td><td class="nav-txt"><a href="#">Clients</a></td>
            </tr>
            <tr>
              <td><img src="https://res.cloudinary.com/slarin/image/upload/v1570685955/contact-support/budget_1_bosmd2.svg" class="icon"></td><td class="nav-txt"><a href="#">Estimates</a></td>
            </tr>
            <tr>
              <td><img src="https://res.cloudinary.com/slarin/image/upload/v1570685955/contact-support/Group_khqbxt.svg" class="icon"></td><td class="nav-txt"><a href="#">Projects</a></td>
            </tr>
            <tr>
              <td><img src="https://res.cloudinary.com/slarin/image/upload/v1570685955/contact-support/Group-invoices_i80pqb.svg" class="icon"></td><td class="nav-txt"><a href="#">Invoices</a></td>
            </tr>
            <tr>
              <td><img src="https://res.cloudinary.com/slarin/image/upload/v1570685957/contact-support/policy_jn93r8.svg" class="icon"></td><td class="nav-txt"><a href="#">Contracts</a></td>
            </tr>
            <tr>
              <td><img src="https://res.cloudinary.com/slarin/image/upload/v1570685958/contact-support/approval_ylo1xp.svg" class="icon"></td><td class="nav-txt"><a href="#">Proposals</a></td>
            </tr>
          </table>
        </div>
      </div>

      <div class="content">
        <img src="https://res.cloudinary.com/slarin/image/upload/v1570685956/contact-support/Contact_us_1_rm3q98.png" alt="contact help" class="hero-img">
        <h4>Read the frequently asked questions<br>or send us a message</h4>

        <form class="contact-form">
          <label for="subject" class="form-label">Subject</label>
          <input type="text" class="inpt">
          <label for="message" class="form-label">Message</label>
          <textarea rows="15" class="txt-area"></textarea>
          <button class="contact-form-btn">Send</button>
        </form>
      </div>

    </div>

    <script>
      function drop() {
        let x = document.getElementById('dd-menu');
        x.classList.toggle('active');
      }
    </script>
  </body>

</html>