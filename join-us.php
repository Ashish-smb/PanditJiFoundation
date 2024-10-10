<?php include_once('inc/header.php');
$title = 'मिलकर बदलाव लाएं |';
$subtitle = 'Join Us';
include_once('banner.php');
?>

<!-- Join us -->
<section class="px-6 lg:px-16">
    <div>
        <div class="text-center mb-6">
            <h2 class="text-4xl font-bold">Be A Volunteer with us</h2>   
            <div class="w-32 h-1 bg-orange-400 mx-auto my-4"></div>
            <div class="text-sm text-slate-500">
                Help today because tomorrow you may be the one who
                needs more helping
            </div>
        </div>

        <div class="p-6">
            <div class="grid lg:grid-cols-2">
                <div>
                    <img src="assets/imgs/donate.jpeg" alt="" class="mx-auto h-[600px] mb-4 lg:mb-0">

                </div>
                   
                <div>
                    <form action="#">
                        <div class="mb-3">
                            <input type="text" placeholder="Enter Your Name" name="name" id="name" class="border-slate-400 outline-none px-3 py-2 border w-full" >
                        </div>
                        <div class="mb-3">
                            <input type="text" placeholder="Enter Your Phone Number" name="number" id="number" class="border-slate-400 outline-none px-3 py-2 border w-full" >
                        </div>
                        <div class="mb-3">
                            <input type="email" placeholder="Enter Your Email Address" name="email" id="email" class="border-slate-400 outline-none px-3 py-2 border w-full" >
                        </div>
                        
                        <textarea
                        name="description"
                        id="description"
                        class="block w-full h-[200px] border border-slate-400 outline-none py-2 px-3 mb-3"
                        placeholder="Enter Your Description"
                        ></textarea>
                        <button class="bg-red-600 hover:bg-red-700 btn btn-md text-white font-semibold" >
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>

<?php include_once('inc/footer.php'); ?>