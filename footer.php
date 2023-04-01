<button id="to-top-button" onclick="goToTop()" title="Go To Top" class="hidden fixed z-90 bottom-8 right-8 border-0 w-12 h-12 animate-bounce rounded-full drop-shadow-md bg-zinc-900 text-white text-2xl font-bold">
    &uarr;
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