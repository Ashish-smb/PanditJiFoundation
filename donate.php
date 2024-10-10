<?php
 include_once('inc/header.php'); 
 $title = 'सामर्थ्यदान';
 $subtitle = 'Donate Us';
 include_once('banner.php'); 
?>


<!-- Introducation Donation -->
<section class="px-6 lg:px-16 mb-8">
    <div class="text-orange-500 font-bold mb-6">पंडित जी फाउंडेशन में आपका स्वागत है |</div>
    <h2 class="text-5xl capitalize font-serif font-bold mb-6">
        हर योगदान से बदलता है भविष्य |
    </h2>
    <p class="text-slate-400 leading-8 mb-6">
        दुनिया में बदलाव लाने के लिए आपका छोटा सा योगदान भी महत्वपूर्ण हो सकता है। एक छोटी सी मदद से किसी की ज़िन्दगी बेहतर बनाई जा सकती है। हमारे एनजीओ के ज़रिये आप जरूरतमंदों तक अपनी मदद पहुंचा सकते हैं। दान का हर रुपया उन लोगों की जिंदगी में उम्मीद की एक किरण लाता है, जिनकी जिंदगी मुश्किलों में घिरी हुई है। आइए, साथ मिलकर एक बेहतर भविष्य का निर्माण करें। आपकी दया और उदारता ही किसी के लिए एक नई शुरुआत हो सकती है।
    </p>

    <div class=" mb-6">
        <div class="grid lg:grid-cols-3 gap-8">

            <div
                class="border rounded-lg border-danger bg-red-100 p-4 flex flex-col sm:flex-row items-center gap-6 hover:-translate-y-2 duration-500 group">
                <img src="assets/imgs/fonts/font1.png" alt=""
                    class="w-20 h-20 shrink-0 mx-auto group-hover:scale-95 duration-500">
                <div>
                    <h2 class="text-lg font-bold">
                        हमारे सदस्य
                    </h2>
                    <p class="text-gray-500">
                        हमारे सदस्य द्वारा जरूरत मंदो की मदद की जाती है
                    </p>
                </div>
            </div>

            <div
                class="border rounded-lg border-yellow-500 bg-orange-100 p-4 flex flex-col sm:flex-row items-center gap-6 hover:-translate-y-2 duration-500 group">
                <img src="assets/imgs/fonts/font2.png" alt=""
                    class="w-20 h-20 shrink-0 mx-auto group-hover:scale-95 duration-500">
                <div>
                    <h2 class="text-lg font-bold">
                        सामर्थ्यदान
                    </h2>
                    <p class="text-gray-500">
                        आपके द्वारा दी जाने वाली राशि से छोटे तबके के लोगो की मदत की जा सकती है
                    </p>
                </div>
            </div>

            <div
                class="border rounded-lg border-green-500 bg-green-200 p-4 flex flex-col sm:flex-row items-center gap-6 hover:-translate-y-2 duration-500 group">
                <img src="assets/imgs/fonts/font3.png" alt=""
                    class="w-20 h-20 shrink-0 mx-auto group-hover:scale-95 duration-500">
                <div>
                    <h2 class="text-lg font-bold">
                        सहयोग करें
                    </h2>
                    <p class="text-gray-500">
                        हमारी समाझ सेवा संस्था जल्द दूसरे लोगो की मदद कर पाएगी। आपके सहयोग दौरा।
                    </p>
                </div>
            </div>
            
        </div>
    </div>

</section>
    
    

<section class="px-6 lg:px-24 mb-6">
    <div class="text-center mb-6">
        <div class="flex justify-center lg:justify-between">
            <img src="assets/imgs/axe.jpeg" alt="" class="w-28" >
            <div>
                <h2 class="text-4xl font-semibold" >
                    फरसे के लिया पंजीकरण कीजिए।  
                </h2>
                <a href="tel:9868105060" class="text-lg block" >
                    Contact: <span class="text-gray-700">+91 9868105060</span>
                </a>
                <a href="mailto:tirathprakash308@gmail.com" class="text-lg block" >Email:
                    <span class="text-gray-700"> tirathprakash308@gmail.com</span>
                </a>
                <span class="text-gray-500 block" >Pandit Ji Foundation</span>

            </div>
            <img src="assets/imgs/founder.jpeg" alt=""  class="w-32">
        </div>
    </div>
    <form action="#">
        <div class="grid lg:grid-cols-2 gap-4">
            <div class="mb-2">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" id="first_name" placeholder="Enter Your First Name" class="border outline-none block w-full p-2 border-slate-400 " required autofocus>
            </div>

            <div class="mb-2">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" id="last_name" placeholder="Enter Your Last Name" class="border outline-none block w-full p-2 border-slate-400 " required>
            </div>

            <div class="mb-2">
                <label for="number">Phone Number</label>
                <input type="text" name="number" id="number" placeholder="00000 00000" class="border outline-none block w-full p-2 border-slate-400 " required>
            </div>

            <div class="mb-2">
                <label for="dob">Date Of Birth</label>
                <input type="date" name="dob" id="dob"  class="border outline-none block w-full p-2 border-slate-400 " required>
            </div>

            <div class="mb-2">
                <label for="payment">Payment Picture</label>
                <input type="file" name="payment" id="payment"  class="border outline-none block w-full p-2 border-slate-400 " required>
            </div>

            <div class="mb-2">
                <img src="assets/imgs/qr_code.jpg" alt="" class="mx-auto mb-2 h-[200px]" >
                <div class="text-center text-lg font-bold" >Farse Fee : 700/- </div>
            </div>

        </div>

        <button type="submit"
        class="block border bg-orange-500 text-white px-6 py-2 hover:bg-orange-700 duration-500" >
            Submit
        </button>
        
        
    </form>
    
</section>





<?php include_once('inc/footer.php'); ?>