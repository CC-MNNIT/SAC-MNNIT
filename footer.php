<button id="to-top-button" onclick="goToTop()" title="Go To Top" style="justify-content: center; align-items: center" class="hidden fixed z-50 bottom-8 right-8 border-0 w-12 h-12 animate-bounce rounded-full drop-shadow-md bg-zinc-900 text-white text-2xl font-bold">
    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="24px" width="24px" viewBox="0 0 384 512">
        <path class="" d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z" />
    </svg>
</button>

<footer class="text-white w-full lg:text-left bg-black p-8">
    <div class="flex flex-col md:flex-row md:justify-around p-4">
        <div class="mb-4 md:mb-0 items-center justify-between">
            <img class="mb-2 h-40 md:mb-4 object-cover" src="https://roboticsclub.mnnit.ac.in/static/img/New%20MNNIT%20Logo.png" alt="no img!!" />
            <h6 class="uppercase font-bold justify-center">&#169; SAC MNNIT</h6>
        </div>

        <div class="">
            <h6 class="uppercase font-bold mb-2 md:mb-4 md:justify-start">
                Quick links
            </h6>
            <p class="mb-1 md:mb-4 content-center items-center">
                <span class="text-white font-bold">></span>
                <a href="http://www.mnnit.ac.in/" target="_blank">MNNIT Website</a>
            </p>
            <p class="mb-1 md:mb-4 content-center items-center">
                <span class="text-white font-bold">></span>
                <a href="https://roboticsclub.mnnit.ac.in/" target="_blank">
                    Robotics Club</a>
            </p>
            <p class="mb-1 md:mb-4 content-center items-center">
                <span class="text-white font-bold">></span>
                <a href="http://aeroclub.mnnit.ac.in/" target="_blank">AeroCLub</a>
            </p>
            <p class="mb-1 md:mb-4 content-center items-center">
                <span class="text-white font-bold">></span>
                <a href="http://www.mnnit.ac.in/" target="_blank">AstroClub</a>
            </p>
        </div>

        <div class="md:hidden mt-4">
            <h6 class="uppercase font-bold md:justify-start">SAC MNNIT</h6>
            <p class="content-center items-center">
                Near Student Housing Center,<br />
                MNNIT Allahabad Campus,<br />Prayagraj, Uttar Pradesh, India
            </p>
        </div>

        <div class="hidden md:flex map-responsive">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d900.3285423472487!2d81.86731215016955!3d25.49456675427422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399ab587ea5f59a1%3A0xf557387c8067a655!2sStudent%20Activity%20Centre%2C%20MNNIT!5e0!3m2!1sen!2sin!4v1675755137728!5m2!1sen!2sin" width="550" height="200" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</footer>

<script>
    var toTopButton = document.getElementById("to-top-button");
    console.log(window.getComputedStyle(toTopButton).display);

    window.onscroll = function() {
        if (
            document.body.scrollTop > 200 ||
            document.documentElement.scrollTop > 200
        ) {
            toTopButton.classList.remove("hidden");
        } else {
            toTopButton.classList.add("hidden");
        }
    };

    function goToTop() {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    }
</script>