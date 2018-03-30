<!DOCTYPE html>

<html>

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Scrum Tool Admin</title>
    <link rel="stylesheet" href="style_admin.css">
    <style>
      
      .navbar{
        overflow: hidden;
        background-color: #333;
        font-family: Arial, Helvetica, sans-serif;
      }
      
      .navbar a {
        float: right;
        font-size: 16px;
        color: #0f0f0f;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
      }
     
      .dropdown{
        float: right;
        overflow: hidden;
      }
      
      .dropdown .dropbtn{
        background-color: #aec6f9;
        color: #0f0f0f;
        padding: 14px 16px;
        font-size: 16px;
        border: none;
        outline: none;
        margin: 0;
        font-family: inherit;
      }
      
      .dropdown-content{
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
      }
      
      .dropdown-content a {
        float: none;
        color: #0f0f0f;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
      }
      
      .dropdown-content a:hover {background-color: #9dbaf9;}
      
      .dropdown:hover .dropdown-content {
        display: block;
      }
      
      .navbar a:hover, .dropdown:hover .dropbtn {
        background-color: #89adf9;
      }
      
    </style>
      
        
  </head>
   
  <body>

  <div class="navbar">
    <div class="dropdown">
      <button class="dropbtn" style="color:blue">My Account<i class="fa fa-caret-down"></i></button>
      <div class="dropdown-content">
        <a href="#">Profile</a>
        <a href="#">Log Out</a>
      </div>
    </div>
     <a href="#" style="background-color:#aec6f9;font-size:16px;">Home</a>
  </div>
    
  <h2>TEAMS</h2>
  <ul>
    <li>Scrumbledore's Army</li>
    <li>Scrum Lords</li>
    <li>Scrum of the Earth</li>
  </ul>
  </body>
</html>
