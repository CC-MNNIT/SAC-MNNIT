<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div>
        <div class="bg-gray-100">
            <div class="mx-auto max-w-7xl py-12 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-4xl">
                    <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                        <div class="px-4 py-5 sm:px-6">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">
                                Applicant Information
                            </h3>
                            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                                Personal details and application.
                            </p>
                        </div>
                        <div class="border-t border-gray-200">
                            <dl>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Full name</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                        Margot Foster
                                    </dd>
                                </div>
                                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Semester</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                        6
                                    </dd>
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Email address
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                        margotfoster@example.com
                                    </dd>
                                </div>
                                <div class="bg-white-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">About</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                        Fugiat ipsum ipsum deserunt culpa aute sint do nostrud
                                        anim incididunt cillum culpa consequat. Excepteur qui
                                        ipsum aliquip consequat sint. Sit id mollit nulla mollit
                                        nostrud in ea officia proident. Irure nostrud pariatur
                                        mollit ad adipisicing reprehenderit deserunt qui eu.
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer  -->
    <button id="to-top-button" onclick="goToTop()" title="Go To Top" class="hidden fixed z-90 bottom-8 right-8 border-0 w-12 h-12 animate-bounce rounded-full drop-shadow-md bg-blue-900 text-white text-2xl font-bold">
        &uarr;
    </button>

    <footer class="text-white w-full lg:text-left bg-black p-8">
        <div class="flex flex-col md:flex-row md:justify-around p-4">
            <div class="w-28 h-28 items-center justify-between">
                <img class="mb-2 md:mb-4 object-contain" src="https://roboticsclub.mnnit.ac.in/static/img/New%20MNNIT%20Logo.png" alt="no img!!" />
                <h6 class="uppercase font-bold justify-center">&#169; SAC MNNIT</h6>
            </div>

            <div class="">
                <h6 class="uppercase font-bold mb-4 md:justify-start">Quick links</h6>
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
        // bottom to top button
        var toTopButton = document.getElementById("to-top-button");
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
    <script>
        const btn = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");

        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    </script>
</body>

</html>