<?php
include_once('inc/header.php');
$title = 'Shaadhi';
$subtitle = 'Shaadhi';
include_once('banner.php');
?>

<!-- shaadhi -->
<section class="px-6 lg:px-16">
    <div>
        <div class="text-center mb-6">
            <h2 class="text-4xl font-bold">विवाहिक संबंध सलाह |</h2>   
            <div class="w-32 h-1 bg-orange-400 mx-auto my-4"></div>
            <div class=" text-gray-600">
            आपकी शादी, हमारी खुशियाँ
            </div>
        </div>

        <div class="p-6">
            <div class="grid lg:grid-cols-2 gap-4">
                <div class="mb-6 lg:mb-0">
                    <img src="assets/imgs/vivah_pic.jpg" alt="" class="mx-auto w-full  object-fill">

                </div>
                   
                <div >
                    <h2 class="text-3xl font-bold text-red-700 mb-6">विवाह हेतु हम से जुड़े ।</h2>   
                    <form action="#">
                        <div class="mb-3">
                            <input type="text" placeholder="Enter Your Name" name="name" id="name" class="border-slate-400 outline-none px-3 py-2 border w-full" >
                        </div>

                        <div class="mb-3">
                            <input type="text" placeholder="Enter Your Contact Number" name="contact" id="contact" class="border-slate-400 outline-none px-3 py-2 border w-full" >
                        </div>

                        <div class="mb-6">
                            <input type="date" placeholder="Enter Your Phone Number" name="number" id="number" class="border-slate-400 outline-none px-3 py-2 border w-full" >
                        </div>
                        
                        <button class="bg-red-600 hover:bg-red-700 btn btn-md text-white font-semibold duration-300">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>
<?php include_once('inc/footer.php') ?>