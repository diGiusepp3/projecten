<?php
echo"
<!doctype html>
<html lang='nl'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport'
          content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Dashboard</title>
    <link rel='stylesheet' href='/assets/styles/projecten.min.css'>
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link rel='apple-touch-icon' sizes='180x180' href='/assets/images/favicons/apple-touch-icon.png'>
    <link rel='icon' type='image/png' sizes='32x32' href='/assets/images/favicons/favicon-32x32.png'>
    <link rel='icon' type='image/png' sizes='16x16' href='/assets/images/favicons/favicon-16x16.png'>
    <link rel='manifest' href='/assets/images/favicons/site.webmanifest'>
    <link rel='mask-icon' href='/assets/images/favicons/safari-pinned-tab.svg' color='#373737'>
    <link rel='shortcut icon' href='/assets/images/favicons/favicon.ico'>
    <meta name='msapplication-TileColor' content='#373737'>
    <meta name='msapplication-config' content='/assets/images/favicons/browserconfig.xml'>
    <meta name='theme-color' content='#373737'>
    <link href='https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
    <script src='https://kit.fontawesome.com/317092bc1a.js' crossorigin='anonymous'></script>
</head>
<body>
 

<header>
    <nav class='sideNav'>
    
        <div class='logo'>
            <img src='/assets/images/mgLogo.png' alt='logo' onclick='goToHomePage()'>
        </div>        

        <div class='sidebarIcons'>
        
            <span class='icon-container' onclick='handleAboutMeClick()'>
                <i class='fas fa-user'></i>
                <span class='icon-text'>Over mij</span>
            </span>
            
            <span class='icon-container'  onclick='handleProjectsClick()'>
                <i class='fas fa-laptop'></i>
                <span class='icon-text'>Projecten</span>
            </span>
            
            <span class='icon-container' onclick='handlePortfolioClick()'>
                <i class='fas fa-file-alt'></i>
                <span class='icon-text'>Portfolio</span>
            </span>
                
            <span class='icon-container' onclick='handleSkillsClick()'>
                <i class='fas fa-code'></i>
                <span class='icon-text'>Skills</span>
            </span>
    
            <span class='icon-container' onclick='handleContactClick'>
                <i class='fas fa-envelope'></i> 
                <span class='icon-text'>Contact</span>
            </span>
            
        </div> <!-- sidebar Icons -->
    </nav>    
</header>        
";
