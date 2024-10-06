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

    <div class="inline-block" >
        <a href="#"
            class="text-sm font-bold uppercase text-black duration-500 border flex px-6 py-2 rounded-full  items-center border-orange-500 group">
            सामर्थ्यदान
            <i
                class="fa-solid fa-arrow-right ml-4 w-5 h-5 flex justify-center items-center p-5 rounded-full text-white bg-orange-500 group-hover:translate-x-1 duration-500"></i>
        </a>
    </div>
</section>

<!-- Donation -->
<section class="px-6 lg:px-16 mb-8">
    <div class="grid md:grid-cols-2 lg:grid-cols-2">
        <div class="mb-4 ">
            <h2 class="text-2xl">
                अपना योगदान दें |
            </h2>
            
            <?php 
                $cards = [
                    [
                        'id' => 1,
                        'font' => 'assets/imgs/fonts/font4.jpg',
                        'title' => 'स्वस्थ भोजन |',
                        'content' => 'यह सुनिश्चित करना कि हर किसी के पास खाने के लिए पर्याप्त है |',
                    ],
                    [
                        'id' => 2,
                        'font' => 'assets/imgs/fonts/font5.jpg',
                        'title' => 'शिक्षा |',
                        'content' => 'गरीब बच्चों के लिए स्वास्थ्य और शिक्षा का महत्व |',
                    ],
                    [
                        'id' => 3,
                        'font' => 'assets/imgs/fonts/font6.png',
                        'title' => 'जलापूर्ति |',
                        'content' => 'स्वच्छ जल और बाल स्वास्थ्य के बीच संबंध |',
                    ],
                    [
                        'id' => 4,
                        'font' => 'assets/imgs/fonts/font7.png',
                        'title' => 'चिकित्सा |',
                        'content' => 'वंचित युवाओं के लिए स्वास्थ्य देखभाल पहुंच|',
                    ],
                    [
                        'id' => 5,
                        'font' => 'assets/imgs/fonts/font8.png',
                        'title' => 'पर्यावरण |',
                        'content' => 'अभी कार्य करें: बड़े प्रभाव के लिए छोटे परिवर्तन|',
                    ],
                    [
                        'id' => 6,
                        'font' => 'assets/imgs/fonts/font9.png',
                        'title' => 'आपदा राहत |',
                        'content' => 'एक साथ पुनर्निर्माण: एक आपदा के बाद का जीवन |',
                    ],
                ]
            ?>
            <div class="grid sm:grid-cols-2  gap-6 py-6">

                <?php foreach($cards as $card) : ?>
                    <div class="text-center group border-2 border-danger-light  p-2 border-dashed" >
                        <img src="<?= $card['font']; ?>" class="w-1/3 mx-auto group-hover:-translate-y-1 duration-500" alt="">
                        <h2 class="text-2xl font-bold mb-3" ><?= $card['title'] ?></h2>
                        <p class="text-gray-600">
                            <?= $card['content'] ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            
            </div>
        </div>
        <div>
            <img src="assets/imgs/qr_old.jpeg" alt="" class="mx-auto w-2/3">
        </div>

    </div>

</section>

<?php include_once('inc/footer.php'); ?>