<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- <link rel="stylesheet" href="./club.css"> -->
    <link rel="stylesheet" href="static/css/index.css">
    <title>Home</title>
</head>

<body>
    <div class="p-12 text-center h-screen text-white align-middle relative overflow-hidden bg-no-repeat bg-cover" style="background-image: url('static/images/academic-building.jpg')">
        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed" style="background-color: rgba(0, 0, 0, 0.6)">
            <nav id="mynav" class="flex flex-col md:flex-row w-full fixed z-90 md:items-center justify-start md:justify-between md:flex-wrap p-4">
                <div class="flex flex-row justify-between">
                    <div class="flex items-center flex-shrink-0 mr-6">
                        <a href="#"><span class="font-bold text-2xl md:text-2xl tracking-tight">SAC MNNIT</span></a>
                    </div>

                    <div class="md:hidden flex justify-start">
                        <button class="outline-none mobile-menu-button">
                            <svg class="w-6 h-6 text-white hover:font-bold" x-show="!showMenu" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="mobile-menu block hidden text-left h-screen md:h-auto content-center text-xl md:text-sm text-center md:flex-grow lg:flex lg:items-center lg:w-auto">
                    <div class="lg:flex-grow">
                        <a href="./index.html" class="block mt-4 lg:inline-block lg:mt-0 hover:font-bold hover:animate-pulse mr-4 font-medium">
                            Home
                        </a>
                        <a href="./clubs.html" class="block mt-4 lg:inline-block lg:mt-0 hover:font-bold hover:animate-pulse mr-4 font-medium">
                            Clubs
                        </a>
                        <a href="./events.html" class="block mt-4 lg:inline-block lg:mt-0 hover:font-bold hover:animate-pulse mr-4 font-medium">
                            Events
                        </a>
                        <a href="./achievement.html" class="block mt-4 lg:inline-block lg:mt-0 hover:font-bold hover:animate-pulse mr-4 font-medium">
                            Achievement
                        </a>
                        <a href="./timeline.html" class="block mt-4 lg:inline-block lg:mt-0 hover:font-bold hover:animate-pulse mr-4 font-medium">
                            Timeline
                        </a>
                        <a href="./team.html" class="block mt-4 lg:inline-block lg:mt-0 hover:font-bold hover:animate-pulse mr-4 font-medium">
                            Team
                        </a>
                    </div>

                    <!-- login button here -->
                    <div>
                        <a href="./login.html" class="inline-block text-sm px-4 py-2 leading-none font-medium border border-white rounded hover:border-transparent hover:bg-white hover:text-black mt-4 lg:mt-0 hover:animate-pulse">Login</a>
                    </div>
                </div>
            </nav>

            <div class="maintitle flex justify-center items-center h-full">
                <div class="text-white">
                    <h2 class="font-semibold text-6xl mb-6">Student Activity Club</h2>
                    <h4 class="font-semibold text-4xl mb-6">MNNIT Allahabad</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- Below Image - SAC description -->
    <div class="font-sans m-1 mt-8 transition-all">
        <div class="maincontent1 rounded overflow-hidden p-8 mx-8 mt-8 bg-gray-100 shadow-lg hover:shadow-2xl hover:scale-105 duration-500">
            <div class="text-center">
                <div class="row">
                    <div class="col">
                        <h2 class="font-bold text-2xl">
                            What is Student Activity Center(SAC)?
                        </h2>
                    </div>
                </div>
            </div>
            <div class="text-justify">
                <div class="row">
                    <p class="p-6">
                        Motilal Nehru National Institute of Technology Allahabad has been
                        known for its academic excellence. The students of this institute
                        keep raising the bar for themselves by proving to be a step ahead
                        of the crowd, time and again in all activities. The institute has
                        records of achievements in curricular as well as in
                        extra-curricular activities. An extremely crucial role is played
                        by the Student Activity Centre (SAC) of the institute in
                        facilitating the activities and reaching out to the students under
                        the supervision of the President SAC. The prime locations of the
                        SAC are Students' Clubs, Boys' SAC and Girls' SAC, Multipurpose
                        Hall, Athletics Ground, Gymkhana and other locations. The student
                        activity center hires pool of part-time coaches/Trainers for
                        various events on yearly basis to groom the talents of the
                        students. At present about ten numbers of coaches are working and
                        extending their services two-hour every day.
                    </p>
                </div>
            </div>
        </div>

        <div class="maincontent2 rounded overflow-hidden p-8 m-8 bg-gray-100 shadow-lg hover:shadow-2xl hover:scale-105 duration-500">
            <div class="text-center">
                <div class="row">
                    <div class="col">
                        <h2 class="font-bold text-2xl">Curricular Activities</h2>
                    </div>
                </div>
            </div>
            <div class="text-justify">
                <div class="row">
                    <p class="p-6">
                        The Institute provides ample avenues for the development and
                        nurturing of creative and other talents in the students through
                        the Student Activity Centre (SAC). All the activities are managed
                        by students under the guidance of President, SAC and a team of
                        Faculty In-Charges, Faculty Coordinators and Committees for
                        various events. The SAC provide plateform to arrange Cultural,
                        Technical and Managerial events, Personality development,
                        Athletics, Indoor and Outdoor games, Yoga and other activities.
                        The SAC also facilitate and encourage the students to take part in
                        similar events in other institutions.
                    </p>
                </div>
            </div>
        </div>
    </div>

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

    <script src="static/js/index.js"></script>
</body>

</html>