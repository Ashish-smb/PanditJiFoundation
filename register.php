<?php include_once('inc/header.php'); 
$title = 'Register For Marriage';
$subtitle = 'Register For Marriage';
include_once('banner.php');

?>

<section class="px-6 lg:px-16 mb-6">
    <div class="text-center mb-6">
        <h2 class="text-3xl font-semibold" >
            Marriage Register Form
        </h2>
        <span class="text-slate-500" >Pandit Ji Foundation</span>
    </div>
        <form action="#">
            <div class="grid lg:grid-cols-2 gap-4">
                <div class="mb-2">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" id="first_name" placeholder="Enter Your First Name" class="border outline-none block w-full p-2 border-slate-300" required>
                </div>

                <div class="mb-2">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" id="last_name" placeholder="Enter Your Last Name" class="border outline-none block w-full p-2 border-slate-300" required>
                </div>

                <div class="mb-2">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter Your Email Address" class="border outline-none block w-full p-2 border-slate-300" required>
                </div>

                <div class="mb-2">
                    <label for="number">Phone Number</label>
                    <input type="text" name="number" id="number" placeholder="00000 00000" class="border outline-none block w-full p-2 border-slate-300" required>
                </div>

                <div class="mb-2">
                    <label for="education">Education</label>
                    <input type="text" name="education" id="education" placeholder="Enter Your Last Equcation" class="border outline-none block w-full p-2 border-slate-300" required>
                </div>

                <div class="mb-2">
                    <label for="salary">Salary</label>
                    <input type="text" name="salary" id="salary" placeholder="Enter Your Monthly Salary" class="border outline-none block w-full p-2 border-slate-300" required>
                </div>

                <div class="mb-2">
                    <label for="occupation">Occupation</label>
                    <input type="text" name="occupation" id="occupation" placeholder="Enter Your Occupation" class="border outline-none block w-full p-2 border-slate-300" required>
                </div>

                <div class="mb-2">
                    <label for="dob">Date Of Birth</label>
                    <input type="date" name="dob" id="dob"  class="border outline-none block w-full p-2 border-slate-300" required>
                </div>

                <div class="mb-2">
                    <label for="time">Birth Time</label>
                    <input type="time" name="time" id="time" class="border outline-none block w-full p-2 border-slate-300" required>
                </div>

                <div class="mb-2">
                    <label for="birth_place">Birth Place</label>
                    <input type="text" name="birth_place" id="birth_place" placeholder="Enter Your Birth Place" class="border outline-none block w-full p-2 border-slate-300" required>
                </div>

                <div class="mb-2">
                    <label for="height">Height</label>
                    <input type="text" name="height" id="height" placeholder="Enter Your Height in CM" class="border outline-none block w-full p-2 border-slate-300" required>
                </div>

                <div class="mb-2">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" placeholder="Enter Your Occupation" class="border outline-none block w-full p-2 border-slate-300" required>
                </div>

            </div>

            <button type="submit"
            class="block border bg-orange-500 text-white px-6 py-2 hover:bg-orange-700 duration-500" >
                Submit
            </button>
            
           
        </form>
    
</section>

<?php include_once('inc/footer.php'); ?>