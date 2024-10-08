<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PanditJiFoundation</title>
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- Font Awesome 6.6.0 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    
    <!-- Animate.css -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<!-- Header -->
<header class="hidden lg:block px-6 lg:px-16 bg-orange-600 py-3 z-50">
    <div class="flex justify-between">

        <div class="flex items-center gap-4 text-white ">
            <div class="flex items-center gap-2">
                <i class="fa-solid fa-envelope"></i>
                <div class="text-sm">
                    tirathprakash308@gmail.com
                </div>
            </div>

            <div class="border-l px-4 flex items-center gap-2 border-slate-300">
                <i class="fa-solid fa-location-dot"></i>
                <div class="text-sm">
                    डीडीए फ्लैट 136 ह टावर गेवरा दिल्ली 110081
                </div>
            </div>
        </div>

        <div class="text-white flex gap-4 text-sm items-center">
            हमारे साथ जुड़े:
            <a href="https://www.facebook.com/renu.sharma.12720">
                <i
                    class="fa-brands fa-facebook-f 
                border w-8 h-8 flex justify-center items-center text-sm hover:bg-white hover:text-orange-500 duration-500 p-2 rounded-full "></i>
            </a>
            <a href="https://www.youtube.com/@poonamkataria7530">
                <i
                    class="fa-brands fa-youtube 
                border w-8 h-8 flex justify-center items-center text-sm hover:bg-white hover:text-orange-500 duration-500 p-2 rounded-full "></i>
            </a>
            <a href="https://wa.me/919868105060">
                <i
                    class="fa-brands fa-whatsapp 
                border w-8 h-8 flex justify-center items-center text-sm hover:bg-white hover:text-orange-500 duration-500 p-2 rounded-full "></i>
            </a>
            <a href="https://kutumbapp.page.link/N1buG9zKf6G8GkK6A">
                <i
                    class="fa-brands fa-google-play 
                border w-8 h-8 flex justify-center items-center text-sm hover:bg-white hover:text-orange-500 duration-500 p-2 rounded-full "></i>
            </a>
        </div>
        
    </div>
</header>

<!-- navbar -->
<nav class="px-6 lg:px-16 hidden lg:block sticky top-0 left-0 bg-white shadow-md z-50">
    <div class="flex justify-between items-center ">
        <div class="flex items-center">
            <a href="index.php" class="block">
                <img src="assets/imgs/logo.png" class="w-20" alt="">
            </a>
            <ul class="flex uppercase text-sm font-bold ml-4 gap-2">
                <li>
                    <a href="index.php" class="px-4 py-2 block hover:text-orange-500 duration-300">Home</a>
                </li>
                <li>
                    <a href="about-us.php" class="px-4 py-2 block hover:text-orange-500 duration-300">About Us</a>
                </li>
                
                <li>
                    <a href="activity.php" class="px-4 py-2 block hover:text-orange-500 duration-300">Activity</a>
                </li>
                <li>
                    <a href="service.php" class="px-4 py-2 block hover:text-orange-500 duration-300">Services</a>
                </li>
                <li>
                    <a href="gallery.php" class="px-4 py-2 block hover:text-orange-500 duration-300">Gallery</a>
                </li>
                <li>
                    <a href="products.php" class="px-4 py-2 block hover:text-orange-500 duration-300">Products</a>
                </li>
                <li>
                    <a href="medicine.php" class="px-4 py-2 block hover:text-orange-500 duration-300">Medicine</a>
                </li>
                <li>
                    <a href="contact-us.php" class="px-4 py-2 block hover:text-orange-500 duration-300">Contact us</a>
                </li>
                <li>
                    <a href="join-us.php" class="px-4 py-2 block hover:text-orange-500 duration-300">Join us</a>
                </li>
            </ul>
        </div>

        
        <div>
            <a href="donate.php"
                class="text-sm font-bold uppercase text-black duration-500 border flex px-6 py-2 rounded-full  items-center border-orange-500 group">
                Donate
                <i
                    class="fa-solid fa-arrow-right ml-4 w-5 h-5 flex justify-center items-center p-5 rounded-full text-white bg-orange-500 group-hover:translate-x-1 duration-500"></i>
            </a>
        </div>
    </div>
</nav>

<!-- Mobile Navbar -->
<nav class="block lg:hidden px-6 lg:px-16" x-data="{showSidebar : false}">
    <!-- header -->
    <div class="flex justify-between items-center w-full">
        <a href="index.php" class="block">
            <img src="assets/imgs/logo.png" alt="" class="w-20">
        </a>
        <button @click="showSidebar = !showSidebar" class="text-xl md:text-2xl">
            <i class="fas " :class="showSidebar ? 'fa-xmark' : 'fa-bars'"></i>
        </button>
        

        <!-- nav -->
        <div class="fixed top-0 px-6 bg-slate-300 text-slate-800 h-screen w-full md:1/2 z-10 duration-300 overflow-y-auto"
            :class="showSidebar ? 'left-0' : '-left-full'">
            <button class="absolute right-4 top-4" @click="showSidebar = false">
                <i class="fas fa-xmark text-2xl hover:text-danger duration-300"></i>
            </button>
            <a href="index.php" class="block ">
                <img src="assets/imgs/logo.png" alt="" class="w-20 mt-6 mx-auto mb-4">
            </a>

            <ul class="capitalize font-semibold text-lg space-y-10 text-center">
                <li>
                    <a href="index.php" class="block hover:text-orange-600 duration-300">home</a>
                </li>
                <li>
                    <a href="about-us.php" class="block hover:text-orange-600 duration-300">About us</a>
                </li>
                <li>
                    <a href="activity.php" class="block hover:text-orange-600 duration-300">Activity</a>
                </li>
                <li>
                    <a href="service.php" class="block hover:text-orange-600 duration-300">Service</a>
                </li>
                <li>
                    <a href="gallery.php" class="block hover:text-orange-600 duration-300">Gallery</a>
                </li>
                <li>
                    <a href="products.php" class="block hover:text-orange-600 duration-300">Products</a>
                </li>
                <li>
                    <a href="medicine.php" class="block hover:text-orange-600 duration-300">Medicine</a>
                </li>
                <li>
                    <a href="contact-us.php" class="block hover:text-orange-600 duration-300">contact us</a>
                </li>
                <li>
                    <a href="donate.php" class="block hover:text-orange-600 duration-300">donate us</a>
                </li>
                <li>
                    <a href="join-us.php" class="block hover:text-orange-600 duration-300">join us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>