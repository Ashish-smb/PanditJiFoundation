<?php include_once('inc/header.php'); 
$title = 'संपर्क करे |';
$subtitle = 'Contact Us';
include_once('banner.php');
?>

<!-- contact us -->
<section class="px-6 lg:px-14 mt-6 lg:mt-0 mb-5">
    <div class="grid lg:grid-cols-2 gap-4 flex-wrap">
        <div class="mb-4 lg:mb-0" >
            <div class="flex relative bg-slate-200 items-center gap-2 w-36 rounded-full px-8 py-2">
                <span class="block absolute -left-4 bg-orange-600 h-2 w-8 rounded-full"></span>
                <h1 class="font-bold text-orange-600">संपर्क करे |</h1>
            </div>

            <div>
                <h1 class="font-bold mt-5 text-3xl mb-3 text-gray-600">
                    अपने विचार साझा करें |
                </h1>
                <form action="#">
                    <div class="grid grid-cols-2 gap-3">
                        <div class="mb-2">
                            <input type="text" class="px-4 py-2 w-full border border-gray-400 rounded-sm focus:outline-none" placeholder="Your Name">
                        </div>

                        <div class="mb-2">
                            <input type="text" class="px-4 py-2 w-full border border-gray-400 rounded-sm focus:outline-none" placeholder="Your E-mail">
                        </div>
                        
                    </div>
                    <div>
                        <textarea name="" id="" placeholder="your message" class="rounded-xl mb-4 px-4 py-4 border border-gray-400 w-full focus:outline-none"></textarea>
                    </div>
                    <button class="px-6 py-4 rounded-full group hover:bg-orange-900 bg-orange-600 duration-300 text-white font-bold">
                        SEND NOW
                    </button>
                </form>
        
            </div>
        </div>
        
        <div>
            <div>
                <img src="assets/imgs/about_us.jpg" alt="" class="w-full h-full object-fill">
            </div>
           
        </div>
    </div>
</section>

<!-- contact info -->
<section class="py-10 px-6 lg:px-14">
<div class="grid lg:grid-cols-2">
    <div class="col-span-1">
        <h5 class="bg-orange-600 text-lg px-2 font-bold text-white inline-block mb-4">
            संपर्क की
        </h5>
        <span class=" text-lg px-2 font-bold">जानकारी |</span>
        <h1 class="text-5xl  font-bold ">आपके समर्थन के लिए एक आभारी अनुरोध |</h1>
    </div>
    <div class="col-span-1">
        <p class="my-10 text-gray-600 leading-7">
            पंडित जी फाउंडेशन से संपर्क करने के लिए आपका बहुत-बहुत धन्यवाद। आपके द्वारा की गई हर बात और सुझाव हमारे लिए महत्वपूर्ण हैं। हमारी टीम जल्द ही आपसे संपर्क करेगी। हम साथ मिलकर समाज में बदलाव लाने की दिशा में काम कर रहे हैं, और आपकी सहभागिता हमारे इस मिशन को और मजबूत बनाती है।
        </p>
    </div>
</div>

<div class="grid lg:grid-cols-4 md:grid-cols-2 gap-5 my-10">
    <div class="col-span-1 ">
        <div class="bg-gray-100  justify-center text-center py-8 rounded-3xl border-dashed border-2 border-purple-300">
            <i class="fa-solid fa-phone bg-orange-600 w-14 h-14 flex justify-center items-center mx-auto px-4 py-4 text-2xl text-white rounded-full"></i>
            <p class="text-amber-950 font-bold text-lg py-5 ">फ़ोन नंबर |</p>
            <a href="tel:9868105060" class="text-gray-800">(+91)9868105060</a>
        </div>
    </div>
    <div class="col-span-1">
        <div class="bg-gray-200  justify-center text-center py-8 rounded-3xl border-dashed border-2 border-purple-300">
            <i class="fa-solid fa-envelope bg-orange-600 w-14 h-14 flex justify-center items-center mx-auto text-white px-4 py-4 text-2xl  rounded-full"></i>
            <p class="text-amber-950 font-bold text-lg py-5">E-mail Address</p>
            <a href="mailto:tirathprakash308@gmail.com" class="text-gray-800">
                tirathprakash308@gmail.com
            </a>
        </div>
    </div>
    <div class="col-span-1">
        <div class="bg-gray-300  justify-center text-center py-8 rounded-3xl border-dashed border-2 border-purple-300">
            <i class="fa-regular fa-clock bg-orange-600 w-14 h-14 flex justify-center items-center mx-auto px-4 py-4 text-2xl text-white rounded-full"></i>
            <p class="text-amber-950 font-bold text-lg py-5 ">कार्य समय |</p>
            <span class="text-gray-800">8AM – 6PM On Weekday</span>
        </div>
    </div>
    <div class="col-span-1">
        <div class="bg-gray-400/80  justify-center text-center py-8 rounded-3xl border-dashed border-2 border-purple-300">
            <i class="fa-solid fa-location-dot bg-orange-600 w-14 h-14 flex justify-center items-center mx-auto px-4 py-4 text-2xl text-white rounded-full"></i>
            <p class="text-amber-950 font-bold text-lg py-2 ">संपर्क केंद्र |</p>
            <span class="text-gray-800"> डीडीए फ्लैट 136 ह टावर गेवरा दिल्ली 110081</span>
        </div>
    </div>
</div>
</section>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13999.316126802456!2d76.99956818678311!3d28.69476047589044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d08ad4fffffff%3A0x94f0078552ceb4a4!2sPandit%20Ji%20Foundation%20(Bharat)!5e0!3m2!1sen!2sin!4v1728205485219!5m2!1sen!2sin"  class="border-0 w-full h-[400px]"
allowfullscreen=""
loading="lazy"
referrerpolicy="no-referrer-when-downgrade">
</iframe>

<?php include_once('inc/footer.php'); ?>