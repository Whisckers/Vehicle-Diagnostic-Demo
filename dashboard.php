<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="watermark">
	<a href="about Us.html"><img src="icon/piston-engine-illu.png" alt="piston-engine-illu" width = 750 height = 750 /></a>
   </div>
        <img id="profile" src="icon/pimage.png" alt="menu" onclick="toggleMenu()">   

        <div class="sub-menu-wrap" id="subMenu">
            <div class="sub-menu">
                <div class="user-info">
                    <img id="p" src="icon/pimage.png">
                </div>
                <hr>        
              
			  <a href="edit profile.html" class="sub-menu-link">
			   <img id="p1" src="icon/pimage.png" alt="Edit Profile Icon">  <p>Edit Profile</p>
				<span>></span>
			</a>

            <a href="settings.html" class="sub-menu-link">
			<img src="icon/settings.png" alt="Settings Icon">  <p>Settings</p>
			<span>></span>
			</a>

				
			<a href="help and support.html" class="sub-menu-link">  <img src="icon/help.png" alt="Help and Support Icon">
			<p>Help and Support</p>
			<span>></span>
			</a>	
              
                <a href="Welcome.html" class="sub-menu-link">
                    <img src="icon/log out (1).png">
                    <p>Log out</p>
                    <span>></span>
                </a>    
            </div>
        </div>   
        <h2 id="welcome">Welcome to Engine-dig</h2>
        <form action="Report fault.php"method="post">
            <input type="submit" name="report" value="Report a fault" id="report">
            
        </form>
		<a href="history.html"><button id="history">History</button></a>
        <a href="locate mechanic.html"><button id="locate">Locate Mechanic</button></a>
       
    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu(){
            subMenu.classList.toggle("open-menu");
        }
    </script> 
    <footer>
    <p>&copy; 2024 Engine-Dig. All rights reserved.</p>
  </footer>
</body>

</html>