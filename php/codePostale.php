<!-- <?php

include 'php/verif_script.php';

?> -->

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Departement</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/style.css">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/x-icon" href="../images/favicon.svg">
  <!-- <script src="script.js"></script> -->
  <script src="https://kit.fontawesome.com/7eb76eff39.js" crossorigin="anonymous"></script>
</head>
<body>

<header>
    <p id="logoTypo">LaVieDuVillage.fr</p>
    <div id="searchBarre"><p>Rechercher un villwage...</p><a href="departement.php"><div id="research"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M236 176c0 15.46-12.54 28-28 28S180 191.5 180 176S192.5 148 208 148S236 160.5 236 176zM500.3 500.3c-15.62 15.62-40.95 15.62-56.57 0l-119.7-119.7c-40.41 27.22-90.9 40.65-144.7 33.46c-91.55-12.23-166-87.28-177.6-178.9c-17.24-136.2 97.29-250.7 233.4-233.4c91.64 11.6 166.7 86.07 178.9 177.6c7.19 53.8-6.236 104.3-33.46 144.7l119.7 119.7C515.9 459.3 515.9 484.7 500.3 500.3zM294.1 182.2C294.1 134.5 255.6 96 207.1 96C160.4 96 121.9 134.5 121.9 182.2c0 38.35 56.29 108.5 77.87 134C201.8 318.5 204.7 320 207.1 320c3.207 0 6.26-1.459 8.303-3.791C237.8 290.7 294.1 220.5 294.1 182.2z"/></svg></div></a></div>
    <div id="banner"><img src="../images/banniere.jpg"/></div>
</header>

<div id="apparitionMenu">
        <div id="toggle"></div>
        
        
    <div id="menuToggleDiv">
            <p><a class="menuToggle" href="#prenom">Accueil</a></p>
            <p><a class="menuToggle" href="#presentation">Présentation</a></p>
            <p><a class="menuToggle" href="#services">Services</a></p>
            <p><a class="menuToggle" href="#creations">Créations</a></p>
            <p><a class="menuToggle" href="#contact">Contact</a></p>
    </div>
    </div>

    <script type="text/javascript" src="../js/menu.js"></script>


    <div id="fil-ariane"> 
        <ul id="fil-ariane-historique">
            <li class="element-fil-ariane"><a href="#">Elbeuf</a></li>
            <li class="element-fil-ariane"><span>></span></li>
            <li class="element-fil-ariane"><a href="#">76500</a></li>
            <li class="element-fil-ariane"><span>></span></li>
            <li class="element-fil-ariane"><a href="#"><svg width="135" height="45" viewBox="0 0 135 45" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect x="1.5" y="1.5" width="132" height="42" fill="#4062BB" stroke="white" stroke-width="3"/>
<path d="M31.9628 9.2L27.6228 19H26.6008L22.2608 9.2H23.3808L27.1328 17.712L30.9128 9.2H31.9628ZM33.134 11.636H34.128V19H33.134V11.636ZM33.638 10.026C33.4327 10.026 33.26 9.956 33.12 9.816C32.98 9.676 32.91 9.508 32.91 9.312C32.91 9.12533 32.98 8.962 33.12 8.822C33.26 8.682 33.4327 8.612 33.638 8.612C33.8434 8.612 34.016 8.682 34.156 8.822C34.296 8.95267 34.366 9.11133 34.366 9.298C34.366 9.50333 34.296 9.676 34.156 9.816C34.016 9.956 33.8434 10.026 33.638 10.026ZM36.8938 8.612H37.8878V19H36.8938V8.612ZM40.6536 8.612H41.6476V19H40.6536V8.612ZM46.9893 11.58C47.9507 11.58 48.688 11.8227 49.2013 12.308C49.7147 12.784 49.9713 13.4933 49.9713 14.436V19H49.0193V17.852C48.7953 18.2347 48.464 18.5333 48.0253 18.748C47.596 18.9627 47.0827 19.07 46.4853 19.07C45.664 19.07 45.0107 18.874 44.5253 18.482C44.04 18.09 43.7973 17.572 43.7973 16.928C43.7973 16.3027 44.0213 15.7987 44.4693 15.416C44.9267 15.0333 45.65 14.842 46.6393 14.842H48.9773V14.394C48.9773 13.7593 48.8 13.2787 48.4453 12.952C48.0907 12.616 47.5727 12.448 46.8913 12.448C46.4247 12.448 45.9767 12.5273 45.5473 12.686C45.118 12.8353 44.7493 13.0453 44.4413 13.316L43.9933 12.574C44.3667 12.2567 44.8147 12.014 45.3373 11.846C45.86 11.6687 46.4107 11.58 46.9893 11.58ZM46.6393 18.286C47.1993 18.286 47.68 18.16 48.0813 17.908C48.4827 17.6467 48.7813 17.2733 48.9773 16.788V15.584H46.6673C45.4073 15.584 44.7773 16.0227 44.7773 16.9C44.7773 17.3293 44.9407 17.67 45.2673 17.922C45.594 18.1647 46.0513 18.286 46.6393 18.286ZM59.5165 11.636V18.104C59.5165 19.3547 59.2085 20.2787 58.5925 20.876C57.9858 21.4827 57.0665 21.786 55.8345 21.786C55.1532 21.786 54.5045 21.6833 53.8885 21.478C53.2818 21.282 52.7872 21.0067 52.4045 20.652L52.9085 19.896C53.2632 20.2133 53.6925 20.4607 54.1965 20.638C54.7098 20.8153 55.2465 20.904 55.8065 20.904C56.7398 20.904 57.4258 20.6847 57.8645 20.246C58.3032 19.8167 58.5225 19.1447 58.5225 18.23V17.292C58.2145 17.7587 57.8085 18.1133 57.3045 18.356C56.8098 18.5987 56.2592 18.72 55.6525 18.72C54.9618 18.72 54.3318 18.5707 53.7625 18.272C53.2025 17.964 52.7592 17.5393 52.4325 16.998C52.1152 16.4473 51.9565 15.8267 51.9565 15.136C51.9565 14.4453 52.1152 13.8293 52.4325 13.288C52.7592 12.7467 53.2025 12.3267 53.7625 12.028C54.3225 11.7293 54.9525 11.58 55.6525 11.58C56.2778 11.58 56.8425 11.706 57.3465 11.958C57.8505 12.21 58.2565 12.574 58.5645 13.05V11.636H59.5165ZM55.7505 17.838C56.2825 17.838 56.7632 17.726 57.1925 17.502C57.6218 17.2687 57.9532 16.9467 58.1865 16.536C58.4292 16.1253 58.5505 15.6587 58.5505 15.136C58.5505 14.6133 58.4292 14.1513 58.1865 13.75C57.9532 13.3393 57.6218 13.022 57.1925 12.798C56.7725 12.5647 56.2918 12.448 55.7505 12.448C55.2185 12.448 54.7378 12.56 54.3085 12.784C53.8885 13.008 53.5572 13.3253 53.3145 13.736C53.0812 14.1467 52.9645 14.6133 52.9645 15.136C52.9645 15.6587 53.0812 16.1253 53.3145 16.536C53.5572 16.9467 53.8885 17.2687 54.3085 17.502C54.7378 17.726 55.2185 17.838 55.7505 17.838ZM68.7082 15.626H62.5482C62.6042 16.3913 62.8982 17.012 63.4302 17.488C63.9622 17.9547 64.6342 18.188 65.4462 18.188C65.9035 18.188 66.3235 18.1087 66.7062 17.95C67.0888 17.782 67.4202 17.5393 67.7002 17.222L68.2602 17.866C67.9335 18.258 67.5228 18.5567 67.0282 18.762C66.5428 18.9673 66.0062 19.07 65.4182 19.07C64.6622 19.07 63.9902 18.9113 63.4022 18.594C62.8235 18.2673 62.3708 17.8193 62.0442 17.25C61.7175 16.6807 61.5542 16.0367 61.5542 15.318C61.5542 14.5993 61.7082 13.9553 62.0162 13.386C62.3335 12.8167 62.7628 12.3733 63.3042 12.056C63.8548 11.7387 64.4708 11.58 65.1522 11.58C65.8335 11.58 66.4448 11.7387 66.9862 12.056C67.5275 12.3733 67.9522 12.8167 68.2602 13.386C68.5682 13.946 68.7222 14.59 68.7222 15.318L68.7082 15.626ZM65.1522 12.434C64.4428 12.434 63.8455 12.6627 63.3602 13.12C62.8842 13.568 62.6135 14.156 62.5482 14.884H67.7702C67.7048 14.156 67.4295 13.568 66.9442 13.12C66.4682 12.6627 65.8708 12.434 65.1522 12.434ZM75.6554 10.096V13.946H80.7234V14.842H75.6554V19H74.6194V9.2H81.3394V10.096H75.6554ZM83.2688 8.612H84.2628V19H83.2688V8.612ZM93.4406 15.626H87.2806C87.3366 16.3913 87.6306 17.012 88.1626 17.488C88.6946 17.9547 89.3666 18.188 90.1786 18.188C90.6359 18.188 91.0559 18.1087 91.4386 17.95C91.8212 17.782 92.1526 17.5393 92.4326 17.222L92.9926 17.866C92.6659 18.258 92.2552 18.5567 91.7606 18.762C91.2752 18.9673 90.7386 19.07 90.1506 19.07C89.3946 19.07 88.7226 18.9113 88.1346 18.594C87.5559 18.2673 87.1032 17.8193 86.7766 17.25C86.4499 16.6807 86.2866 16.0367 86.2866 15.318C86.2866 14.5993 86.4406 13.9553 86.7486 13.386C87.0659 12.8167 87.4952 12.3733 88.0366 12.056C88.5872 11.7387 89.2032 11.58 89.8846 11.58C90.5659 11.58 91.1772 11.7387 91.7186 12.056C92.2599 12.3733 92.6846 12.8167 92.9926 13.386C93.3006 13.946 93.4546 14.59 93.4546 15.318L93.4406 15.626ZM89.8846 12.434C89.1752 12.434 88.5779 12.6627 88.0926 13.12C87.6166 13.568 87.3459 14.156 87.2806 14.884H92.5026C92.4372 14.156 92.1619 13.568 91.6766 13.12C91.2006 12.6627 90.6032 12.434 89.8846 12.434ZM102.114 11.636V19H101.162V17.656C100.9 18.104 100.541 18.454 100.084 18.706C99.6265 18.9487 99.1038 19.07 98.5158 19.07C97.5545 19.07 96.7938 18.804 96.2338 18.272C95.6831 17.7307 95.4078 16.942 95.4078 15.906V11.636H96.4018V15.808C96.4018 16.5827 96.5931 17.1707 96.9758 17.572C97.3585 17.9733 97.9045 18.174 98.6138 18.174C99.3885 18.174 99.9998 17.9407 100.448 17.474C100.896 16.998 101.12 16.34 101.12 15.5V11.636H102.114ZM105.85 13.078C106.083 12.5833 106.428 12.21 106.886 11.958C107.352 11.706 107.926 11.58 108.608 11.58V12.546L108.37 12.532C107.595 12.532 106.988 12.77 106.55 13.246C106.111 13.722 105.892 14.3893 105.892 15.248V19H104.898V11.636H105.85V13.078ZM110.407 11.636H111.401V19H110.407V11.636ZM110.911 10.026C110.706 10.026 110.533 9.956 110.393 9.816C110.253 9.676 110.183 9.508 110.183 9.312C110.183 9.12533 110.253 8.962 110.393 8.822C110.533 8.682 110.706 8.612 110.911 8.612C111.117 8.612 111.289 8.682 111.429 8.822C111.569 8.95267 111.639 9.11133 111.639 9.298C111.639 9.50333 111.569 9.676 111.429 9.816C111.289 9.956 111.117 10.026 110.911 10.026Z" fill="white"/>
<g clip-path="url(#clip0_1_2555)">
<path fill-rule="evenodd" clip-rule="evenodd" d="M49.3731 32.303C49.2448 32.2325 48.9816 32.1253 48.6366 32.0008C48.9816 31.8763 49.2441 31.7698 49.3723 31.6993C50.1343 31.2875 50.2131 30.0793 49.5486 29.0008C48.8833 27.923 47.7268 27.383 46.9656 27.794C46.8358 27.8653 46.6056 28.0235 46.3168 28.2418C46.3753 27.8983 46.4061 27.6313 46.4061 27.4918C46.4061 26.6668 45.3283 25.9993 44.0001 25.9993C42.6718 25.9993 41.5926 26.6668 41.5926 27.4918C41.5926 27.6313 41.6248 27.8975 41.6833 28.2403C41.4769 28.0782 41.2608 27.9289 41.0361 27.7933C40.2741 27.3815 39.1161 27.9215 38.4523 29C37.7886 30.0778 37.8681 31.286 38.6286 31.6978C38.7583 31.769 39.0201 31.8763 39.3673 32.0008C39.0201 32.126 38.7568 32.2333 38.6278 32.3038C37.8658 32.7155 37.7871 33.9223 38.4516 35.0015C39.1161 36.0793 40.2733 36.6193 41.0346 36.2075C41.1643 36.1378 41.3938 35.9795 41.6833 35.7613C41.6248 36.104 41.5926 36.3688 41.5926 36.509C41.5926 37.3333 42.6696 38.0008 44.0001 38.0008C45.3283 38.0008 46.4061 37.3333 46.4061 36.509C46.4061 36.3688 46.3753 36.1025 46.3168 35.7583C46.6056 35.978 46.8366 36.137 46.9663 36.2068C47.7283 36.6185 48.8848 36.0793 49.5486 35.0015C50.2138 33.9223 50.1343 32.7148 49.3731 32.303ZM44.0001 34.2853C43.6951 34.2931 43.3917 34.2398 43.1077 34.1285C42.8237 34.0172 42.5649 33.8502 42.3464 33.6373C42.128 33.4243 41.9544 33.1699 41.8359 32.8888C41.7173 32.6077 41.6563 32.3058 41.6563 32.0008C41.6563 31.6957 41.7173 31.3938 41.8359 31.1127C41.9544 30.8317 42.128 30.5772 42.3464 30.3643C42.5649 30.1514 42.8237 29.9844 43.1077 29.8731C43.3917 29.7618 43.6951 29.7085 44.0001 29.7163C44.6062 29.7161 45.1876 29.9566 45.6165 30.385C46.0453 30.8134 46.2864 31.3946 46.2868 32.0008C46.286 32.6068 46.0448 33.1878 45.616 33.6161C45.1873 34.0444 44.6061 34.2851 44.0001 34.2853Z" fill="#FFD166"/>
</g>
<g clip-path="url(#clip1_1_2555)">
<path fill-rule="evenodd" clip-rule="evenodd" d="M72.3731 32.303C72.2448 32.2325 71.9816 32.1253 71.6366 32.0008C71.9816 31.8763 72.2441 31.7698 72.3723 31.6993C73.1343 31.2875 73.2131 30.0793 72.5486 29.0008C71.8833 27.923 70.7268 27.383 69.9656 27.794C69.8358 27.8653 69.6056 28.0235 69.3168 28.2418C69.3753 27.8983 69.4061 27.6313 69.4061 27.4918C69.4061 26.6668 68.3283 25.9993 67.0001 25.9993C65.6718 25.9993 64.5926 26.6668 64.5926 27.4918C64.5926 27.6313 64.6248 27.8975 64.6833 28.2403C64.4769 28.0782 64.2608 27.9289 64.0361 27.7933C63.2741 27.3815 62.1161 27.9215 61.4523 29C60.7886 30.0778 60.8681 31.286 61.6286 31.6978C61.7583 31.769 62.0201 31.8763 62.3673 32.0008C62.0201 32.126 61.7568 32.2333 61.6278 32.3038C60.8658 32.7155 60.7871 33.9223 61.4516 35.0015C62.1161 36.0793 63.2733 36.6193 64.0346 36.2075C64.1643 36.1378 64.3938 35.9795 64.6833 35.7613C64.6248 36.104 64.5926 36.3688 64.5926 36.509C64.5926 37.3333 65.6696 38.0008 67.0001 38.0008C68.3283 38.0008 69.4061 37.3333 69.4061 36.509C69.4061 36.3688 69.3753 36.1025 69.3168 35.7583C69.6056 35.978 69.8366 36.137 69.9663 36.2068C70.7283 36.6185 71.8848 36.0793 72.5486 35.0015C73.2138 33.9223 73.1343 32.7148 72.3731 32.303ZM67.0001 34.2853C66.6951 34.2931 66.3917 34.2398 66.1077 34.1285C65.8237 34.0172 65.5649 33.8502 65.3464 33.6373C65.128 33.4243 64.9544 33.1699 64.8359 32.8888C64.7173 32.6077 64.6563 32.3058 64.6563 32.0008C64.6563 31.6957 64.7173 31.3938 64.8359 31.1127C64.9544 30.8317 65.128 30.5772 65.3464 30.3643C65.5649 30.1514 65.8237 29.9844 66.1077 29.8731C66.3917 29.7618 66.6951 29.7085 67.0001 29.7163C67.6062 29.7161 68.1876 29.9566 68.6165 30.385C69.0453 30.8134 69.2864 31.3946 69.2868 32.0008C69.286 32.6068 69.0448 33.1878 68.616 33.6161C68.1873 34.0444 67.6061 34.2851 67.0001 34.2853Z" fill="#FFD166"/>
</g>
<g clip-path="url(#clip2_1_2555)">
<path fill-rule="evenodd" clip-rule="evenodd" d="M95.3731 32.303C95.2448 32.2325 94.9816 32.1253 94.6366 32.0008C94.9816 31.8763 95.2441 31.7698 95.3723 31.6993C96.1343 31.2875 96.2131 30.0793 95.5486 29.0008C94.8833 27.923 93.7268 27.383 92.9656 27.794C92.8358 27.8653 92.6056 28.0235 92.3168 28.2418C92.3753 27.8983 92.4061 27.6313 92.4061 27.4918C92.4061 26.6668 91.3283 25.9993 90.0001 25.9993C88.6718 25.9993 87.5926 26.6668 87.5926 27.4918C87.5926 27.6313 87.6248 27.8975 87.6833 28.2403C87.4769 28.0782 87.2608 27.9289 87.0361 27.7933C86.2741 27.3815 85.1161 27.9215 84.4523 29C83.7886 30.0778 83.8681 31.286 84.6286 31.6978C84.7583 31.769 85.0201 31.8763 85.3673 32.0008C85.0201 32.126 84.7568 32.2333 84.6278 32.3038C83.8658 32.7155 83.7871 33.9223 84.4516 35.0015C85.1161 36.0793 86.2733 36.6193 87.0346 36.2075C87.1643 36.1378 87.3938 35.9795 87.6833 35.7613C87.6248 36.104 87.5926 36.3688 87.5926 36.509C87.5926 37.3333 88.6696 38.0008 90.0001 38.0008C91.3283 38.0008 92.4061 37.3333 92.4061 36.509C92.4061 36.3688 92.3753 36.1025 92.3168 35.7583C92.6056 35.978 92.8366 36.137 92.9663 36.2068C93.7283 36.6185 94.8848 36.0793 95.5486 35.0015C96.2138 33.9223 96.1343 32.7148 95.3731 32.303ZM90.0001 34.2853C89.6951 34.2931 89.3917 34.2398 89.1077 34.1285C88.8237 34.0172 88.5649 33.8502 88.3464 33.6373C88.128 33.4243 87.9544 33.1699 87.8359 32.8888C87.7173 32.6077 87.6563 32.3058 87.6563 32.0008C87.6563 31.6957 87.7173 31.3938 87.8359 31.1127C87.9544 30.8317 88.128 30.5772 88.3464 30.3643C88.5649 30.1514 88.8237 29.9844 89.1077 29.8731C89.3917 29.7618 89.6951 29.7085 90.0001 29.7163C90.6062 29.7161 91.1876 29.9566 91.6165 30.385C92.0453 30.8134 92.2864 31.3946 92.2868 32.0008C92.286 32.6068 92.0448 33.1878 91.616 33.6161C91.1873 34.0444 90.6061 34.2851 90.0001 34.2853Z" fill="#FFD166"/>
</g>
<defs>
<clipPath id="clip0_1_2555">
<rect width="12" height="12" fill="white" transform="translate(38 26)"/>
</clipPath>
<clipPath id="clip1_1_2555">
<rect width="12" height="12" fill="white" transform="translate(61 26)"/>
</clipPath>
<clipPath id="clip2_1_2555">
<rect width="12" height="12" fill="white" transform="translate(84 26)"/>
</clipPath>
</defs>
</svg>
</a></li>
        </ul>
    </div>

    <nav id="trier">
    <p>trier par</p>
    <svg width="18" height="10" viewBox="0 0 18 10" fill="none" xmlns="http://www.w3.org/2000/svg">
<line x1="0.353553" y1="0.646447" x2="8.35355" y2="8.64645" stroke="white"/>
<line x1="17.3536" y1="0.353553" x2="8.35355" y2="9.35355" stroke="white"/>
</svg>

</nav>

<section id="codePostaux">

<div class="76000">
<h2>Code Postal 76000</h2>
<a>Rouen</a>
</div>

<div class="76110">
<h2>Code Postal 76110</h2>
<a>Angerville-Bailleul 
|  Annouville-Vilmesnil
|  Auberville-la-Renault
Bec-de-Mortagne  |  Bénarville  |  Bornambusc  |  Bréaut Bretteville-du-Grand-Caux  |  Daubeuf-Serville  |  Écrainville
Goderville  |  Gonfreville-Caillot  |  Grainville-Ymauville   Houquetot  |  Manneville-la-Goupil  |  Mentheville  |  Saint-Maclou-la-Brière  |  Saint-Sauveur-d'Émalleville  |  Sausseuzemare-en-Caux  |  Tocqueville-les-Murs  |  Vattetot-sous-Beaumont  |  Virville</a>
</div>

<div class="76111">
<h2>Code Postal 76111</h2>
<a>Criquebeuf-en-Caux  |  Vattetot-sur-Mer  |  Yport</a>
</div>

<div class="76113">
<h2>Code Postal 76113</h2>
<a>Hautot-sur-Seine  |  Sahurs  |  Saint-Pierre-de-Manneville</a>
</div>

<div class="76117">
<h2>Code Postal 76117</h2>
<a>Auzouville-sur-Ry  |  Blainville-Crevon  |  Catenay  |  Grainville-sur-Ry  |  Martainville-Épreville  |  Ry  |  Saint-Aignan-sur-Ry  |  Saint-Denis-le-Thiboult  |  Servaville-Salmonville</a>
</div>

<div class="76116">
<h2>Code Postal 76116</h2>
<a>Incheville
Code Postal 76119
Sainte-Marguerite-sur-Mer  |  Varengeville-sur-Mer
Code Postal 76120
Le Grand-Quevilly
Code Postal 76130
	Mont-Saint-Aignan
Code Postal 76133
Épouville  |  Manéglise  |  Notre-Dame-du-Bec  |  Rolleville  |  Saint-Martin-du-Bec</a>
</div>
</section>

<?php

try
    {
        $bdd=new PDO('mysql:host=localhost;dbname=ptut','root','');
    }
    catch(Exception $e)
    {
        die('Erreur :'.$e->getMessage());
    }

    $reponse=$bdd->query('SELECT code_postal, nom_ville FROM code_postaux');

    while ($donnees=$reponse->fetch())
    {
      $codePostal = $donnees['code_postal'];
      $ville = $donnees['nom_ville'];
       echo '<script>
  // je crée un nouvelle élément div
  var newDiv = document.createElement("div");
  // je lui donne les valeurs de la BDD
  var newH3 = document.createElement("h3");
  var newContentCodePostale = document.createTextNode(codePostal);
  var newA = document.createElement("a");
  var newContentVille = document.createTextNode("ville");
  // ajoute le nœud texte au nouveau div créé
  newDiv.appendChild(newH3);
  newDiv.appendChild(newContentCodePostale);
  newDiv.appendChild(newA);
  newDiv.appendChild(newContentVille);

  // ajoute le nouvel élément créé et son contenu dans le DOM
  var codePostaux = document.getElementById("codePostaux");
  document.body.appendChild(newDiv);
</script>';

        echo $donnees['code_postal'].'/'.$donnees['nom_ville'];
        
    }
    
    $reponse->closeCursor();

    ?>
    <script>



</script>

<footer>Mentions légales</footer>
</body>

</html>