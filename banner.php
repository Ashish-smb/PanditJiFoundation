<!-- banner -->
<div class="hidden lg:block">
    <section class="h-[320px] border w-full bg-cover flex justify-center items-center  bg-no-repeat  mb-8" style="background-image:url(assets/imgs/inner_banner.jpg);" >
        <div class="text-center mt-32 text-white" >
            <h2 class="text-3xl lg:text-6xl font-semibold mb-4">
                <?= $title ?>
            </h2>
            <div>
                <a href="index.php">Home</a> / <?= $subtitle ?>
            </div>
        </div>
    </section>
</div>

<!-- banner for Mobile -->
<section class="block lg:hidden mb-8">
    <img src="assets/imgs/member.jpeg" alt="" class="w-full">
</section>