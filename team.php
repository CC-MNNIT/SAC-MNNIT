<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <title>Team</title>
    <style>
        .title {
            font-family: verdana;
            font-weight: 700;
            text-shadow: 1px 1px 1px #666666, 1px 2px 1px #666666,
                1px 2px 1px #666666, 1px 2px 1px #666666, 1px 2px 1px #666666,
                1px 3px 1px #666666, 1px 3px 1px #666666, 1px 3px 1px #666666,
                1px 3px 1px #666666, 1px 3px 1px #666666,
                1px 3px 6px rgba(16, 16, 16, 0.4), 1px 4px 10px rgba(16, 16, 16, 0.2),
                1px 3px 35px rgba(16, 16, 16, 0.2), 1px 5px 60px rgba(16, 16, 16, 0.4);
        }
    </style>
    <style>
        .box {
            width: 1200px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            grid-gap: 15px;
            margin: 0 auto;
        }

        .card {
            position: relative;
            width: 300px;
            height: 350px;
            background: #fff;
            margin: 0 auto;
            border-radius: 4px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .card:before,
        .card:after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 4px;
            background: #fff;
            transition: 0.5s;
            z-index: -1;
        }

        .card:hover:before {
            transform: rotate(20deg);
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.2);
        }

        .card:hover:after {
            transform: rotate(10deg);
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.2);
        }

        .card .imgBx {
            position: absolute;
            top: 10px;
            left: 10px;
            bottom: 10px;
            right: 10px;
            background: #222;
            transition: 0.5s;
            z-index: 1;
        }

        .card:hover .imgBx {
            bottom: 80px;
        }

        .card .imgBx img {
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .card .details {
            position: absolute;
            left: 10px;
            right: 10px;
            bottom: 10px;
            height: 60px;
            text-align: center;
        }

        .card .details h2 {
            margin: 0;
            padding: 0;
            font-weight: 600;
            font-size: 20px;
            color: #777;
            text-transform: uppercase;
        }

        .card .details h2 span {
            font-weight: 500;
            font-size: 16px;
            color: #f38695;
            display: block;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <div class="text-center text-white relative overflow-hidden bg-no-repeat bg-cover">
        <nav class="nav flex flex-col md:flex-row w-full fixed z-90 bg-white md:items-center justify-start md:justify-between md:flex-wrap p-4 backdrop-filter backdrop-blur-lg bg-opacity-30">
            <div class="flex flex-row justify-between">
                <div class="title flex items-center flex-shrink-0 text-black mr-6">
                    <a href="./index.html"><span class="font-bold text-xl tracking-tight">SAC MNNIT</span></a>
                </div>

                <div class="lg:hidden flex justify-start">
                    <button class="outline-none mobile-menu-button">
                        <svg class="w-6 h-6 text-gray-500 hover:text-gray-800" x-show="!showMenu" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="mobile-menu block hidden text-left md:text-center md:flex-grow lg:flex lg:items-center lg:w-auto">
                <div class="text-sm lg:flex-grow">
                    <a href="./clubs.html" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:font-bold hover:animate-pulse mr-4 font-medium">
                        Clubs
                    </a>
                    <a href="./events.html" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:font-bold hover:animate-pulse mr-4 font-medium">
                        Events
                    </a>
                    <a href="./achievement.html" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:font-bold hover:animate-pulse mr-4 font-medium">
                        Achievement
                    </a>
                    <a href="./timeline.html" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:font-bold hover:animate-pulse mr-4 font-medium">
                        Timeline
                    </a>
                    <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-rose-800 hover:font-bold hover:animate-pulse mr-4 font-medium">
                        Team
                    </a>
                </div>
                <!-- login button here -->
                <div>
                    <a href="./login.html" class="inline-block text-sm px-4 py-2 leading-none font-medium border border-black rounded text-black hover:border-transparent hover:bg-white mt-4 lg:mt-0 hover:animate-pulse">Login</a>
                </div>
            </div>
        </nav>
    </div>

    <div class="container mx-auto mt-20">
        <div class="d-flex text-center justify-content-center pt-0 text-3xl font-weight-900">
            <h2 style="
            color: #333;
            font-weight: 600;
            font-family: 'Poppins', sans-serif;
            letter-spacing: 2px;
            line-height: 180%;
          ">
                TEAM
            </h2>
        </div>
        <hr class="w-20 h-1 mx-auto my-2 bg-red-700 border-0 rounded" />

        <div class="box flex-col md:flex-row">
            <div class="card m-12">
                <div class="imgBx">
                    <img src="https://images.unsplash.com/photo-1532123675048-773bd75df1b4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="images" />
                </div>
                <div class="details">
                    <h2>SomeOne Famous<br /><span>Director</span></h2>
                </div>
            </div>

            <div class="card m-12">
                <div class="imgBx">
                    <img src="https://images.unsplash.com/photo-1549417229-aa67d3263c09?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="images" />
                </div>
                <div class="details">
                    <h2>SomeOne Famous<br /><span>Producer</span></h2>
                </div>
            </div>

            <div class="card m-12">
                <div class="imgBx">
                    <img src="https://images.unsplash.com/photo-1548094878-84ced0f6896d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="images" />
                </div>
                <div class="details">
                    <h2>SomeOne Famous<br /><span>Actor</span></h2>
                </div>
            </div>
        </div>
    </div>

    <button id="to-top-button" onclick="goToTop()" title="Go To Top" class="hidden fixed z-90 bottom-8 right-8 border-0 w-12 h-12 animate-bounce rounded-full drop-shadow-md bg-blue-900 text-white text-2xl font-bold">
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