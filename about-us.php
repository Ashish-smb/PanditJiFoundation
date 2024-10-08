<?php include_once('inc/header.php');
$title = 'हमारे विषय में। ';
$subtitle = 'About Us';
include_once('banner.php');
?>

<!-- About Us -->
<section class="px-6 lg:px-16 mb-24">
        <div class="grid lg:grid-cols-2">
            <div class=" " >
                <img src="assets/imgs/about_us.jpg" alt="" class="w-full h-full">
            </div>

            <div class="px-6 py-2  animate__fadeInRight">
                <span class="text-orange-500 font-bold"> हमारे विषय में </span>
                <h1 class="text-5xl font-bold mb-6 leading-snug">
                    हमारी दुनिया को बेहतर बनाने में मदद करे
                </h1>
                <p class="mb-6 text-slate-500">
                    Pandit Ji Foundation एक ऐसा संगठन है जो धार्मिक मूल्यों और आस्था को फैलाने का काम करता है। हम भगवान परशुराम के उपदेशों को अपने जीवन में अपनाते हैं और उनके सिद्धांतों का सम्मान करते हैं। हमारी मान्यता है कि सच्चाई, साहस और धर्म की रक्षा करना ही जीवन का सही मार्ग है। हम समाज में एकता, सहयोग और ज्ञान का प्रचार करते हैं, ताकि सभी लोग मिलकर एक बेहतर भविष्य की दिशा में बढ़ सकें। हमारा उद्देश्य न केवल धार्मिक शिक्षा देना है, बल्कि एक सकारात्मक और समर्पित समुदाय का निर्माण करना भी है।
                </p>
                <div class="flex justify-around flex-col text-center sm:flex-row">
                    <div>
                        <div
                            class="p-3 mx-auto border border-danger rounded-full w-20 h-20 flex items-center justify-center group">
                            <img src="assets/imgs/fonts/font1.png" alt=""
                                class="object-fill rounded-full mx-auto group-hover:scale-90 duration-300">
                        </div>
                        <span class="font-bold text-red-500">हमारे सदस्य</span>
                    </div>
                    <div>
                        <div
                            class="p-3 mx-auto border border-yellow-500 rounded-full w-20 h-20 flex items-center justify-center group">
                            <img src="assets/imgs/fonts/font2.png" alt=""
                                class="object-fill rounded-full mx-auto group-hover:scale-90 duration-300">
                        </div>
                        <span class="font-bold text-yellow-500">सामर्थ्यदान</span>
                    </div>
                    <div >
                        <div
                            class="p-3 mx-auto border border-green-600 rounded-full w-20 h-20 flex items-center justify-center group">
                            <img src="assets/imgs/fonts/font3.png" alt=""
                                class="object-fill rounded-full mx-auto group-hover:scale-90 duration-300">
                        </div>
                        <span class="font-bold text-green-600">सहयोग करें</span>
                    </div>


                </div>
            </div>
        </div>
    </section>


<?php include_once('inc/footer.php'); ?>