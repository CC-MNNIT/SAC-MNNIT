<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <title>Clubs</title>
</head>

<body>
    <div class="text-center text-white relative overflow-hidden bg-no-repeat bg-cover z-50">
        <?php
        include 'nav.php';
        ?>
    </div>

    <div class="py-12 mt-20">
        <div class="xl:container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
            <div class="mb-12 space-y-2 text-center">
                <h2 class="text-3xl font-bold text-gray-800 md:text-4xl">TECHNICAL CLUBS</h2>
                <hr class="w-28 h-1 mx-auto my-2 bg-red-700 border-0 rounded" />
            </div>
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                <?php
                $clubs_info = [
                    [
                        "Computer Coding Club",
                        "We host several events in the domain of Computer Science And
                        Engineering for which we also conduct classes on regular basis.
                        Students from various courses actively participate in these 
                        events and classes throughout the year.",
                        "./static/images/cc.jpg"
                    ],
                    [
                        "Robotics Club",
                        "Robotics Club MNNIT is a diverse group of robotics enthusiasts 
                        from all the college departments. We are mainly concerned with building robots for academic 
                        purposes, competing at national events, or even building just
                        out of imagination.",
                        "./static/images/roboclub.jpg"
                    ],
                    [
                        "Aeroclub",
                        "Aero Club MNNIT is a diverse group of aero-science enthusiasts
                        from all the college departments. We are mainly concerned with aeronautical studies for
                        academic purposes, competing at national events, or even building
                        just out of imagination.",
                        "./static/images/aeroclub.jpg"
                    ],
                    [
                        "Astro Club",
                        "Astro Club MNNIT is a diverse group of astronomy enthusiasts
                        from all the college departments. We are mainly concerned with astronomy for
                        academic purposes, competing at national events, or even building
                        just out of imagination.",
                        "./static/images/astroclub.jpg"
                    ]
                ];

                foreach ($clubs_info as $club) {
                    echo
                    "<div class='group p-6 sm:p-8 rounded-3xl bg-white border border-gray-100 bg-opacity-50 shadow-2xl shadow-gray-600/10'>
                        <div class='relative overflow-hidden rounded-xl'>
                            <img src='" . $club[2] . "' alt='art cover' loading='lazy' class='h-full w-full object-cover object-top transition duration-500 group-hover:scale-105' />
                        </div>
                        <div class='mt-6 relative'>
                            <h3 class='text-2xl font-semibold text-gray-800'>"
                        . $club[0] .
                        "</h3>
                            <p class='mt-6 mb-8 text-gray-600'>"
                        . $club[1] .
                        "</p>
                            <a class='inline-block' href='#'>
                                <span class='text-primary text-red-700'>Read More</span>
                            </a>
                        </div>
                    </div>";
                }
                ?>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="xl:container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
            <div class="mb-12 space-y-2 text-center">
                <h2 class="text-3xl font-bold text-gray-800 md:text-4xl">SPORTS CLUBS</h2>
                <hr class="w-28 h-1 mx-auto my-2 bg-red-700 border-0 rounded" />
            </div>
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                <?php
                $clubs_info = [
                    [
                        "Cricket Club",
                        "Elite MNNIT Cricket Team
                        Inter NIT Champions: 2019,2022
                        Asmita Champions: 2019",
                        "./static/images/cricket.jpg"
                    ],
                    [
                        "Chess Club",
                        "We play and promote Chess and events.",
                        "./static/images/chess.jpg"
                    ],
                    [
                        "Table Tennis Club",
                        "Table tennis is a popular indoor sport that requires quick-response movements 
                        as well as agility. It's a fast-paced game that requires agility and stamina 
                        in a small range of motion.",
                        "./static/images/tt.jpg"
                    ],
                    [
                        "Lawn Tennis Club",
                        "Lawn Tennis college team. We participate in various tournaments
                            like Inter NIT, Spardha(IIT BHU ssports fest), etc representing MNNIT.",
                        "./static/images/lawn_tennis.jpg"
                    ],
                    [
                        "Kabaddi Club",
                        "Welcome to the Kabaddi Club.
                            Kabaddi club works in development of sportsmanship and team spirit in the 
                            students of our college. Our teams practice regularly for upcoming tournaments.",
                        "./static/images/kabaddi.jpg"
                    ]
                ];

                foreach ($clubs_info as $club) {
                    echo
                    "<div class='group p-6 sm:p-8 rounded-3xl bg-white border border-gray-100 bg-opacity-50 shadow-2xl shadow-gray-600/10'>
                        <div class='relative overflow-hidden rounded-xl'>
                            <img src='" . $club[2] . "' alt='art cover' loading='lazy' class='h-full w-full object-cover object-top transition duration-500 group-hover:scale-105' />
                        </div>
                        <div class='mt-6 relative'>
                            <h3 class='text-2xl font-semibold text-gray-800'>"
                        . $club[0] .
                        "</h3>
                            <p class='mt-6 mb-8 text-gray-600'>"
                        . $club[1] .
                        "</p>
                            <a class='inline-block' href='#'>
                                <span class='text-primary text-red-700'>Read More</span>
                            </a>
                        </div>
                    </div>";
                }
                ?>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="xl:container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
            <div class="mb-12 space-y-2 text-center">
                <h2 class="text-3xl font-bold text-gray-800 md:text-4xl">CULTURAL CLUBS</h2>
                <hr class="w-28 h-1 mx-auto my-2 bg-red-700 border-0 rounded" />
            </div>
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                <?php
                $clubs_info = [
                    [
                        "Literary Club",
                        "'A word after a word after a word is power.'
                        In the words of Atwood, literature is power, a formidable force to be reckoned. 
                        At Literary Club, MNNIT, we endeavor to inspire thoughts that instill action through discourse. ",
                        "./static/images/literary.jpg"
                    ],
                    [
                        "Quintessence",
                        "It is a dramatics which perform nukkad natak, stage play, hasyamanch, monos, duets, and lot other drama activities but apart from that it is not restricted to recruit just actors, it has a aim which is DRAMATICS FOR ALL means If you are a singer, instrumentalist, actor, writer or an amalgam of all these, this is right club to join.",
                        "./static/images/drams.jpg"
                    ],
                ];

                foreach ($clubs_info as $club) {
                    echo
                    "<div class='group p-6 sm:p-8 rounded-3xl bg-white border border-gray-100 bg-opacity-50 shadow-2xl shadow-gray-600/10'>
                        <div class='relative overflow-hidden rounded-xl'>
                            <img src='" . $club[2] . "' alt='art cover' loading='lazy' class='h-full w-full object-cover object-top transition duration-500 group-hover:scale-105' />
                        </div>
                        <div class='mt-6 relative'>
                            <h3 class='text-2xl font-semibold text-gray-800'>"
                        . $club[0] .
                        "</h3>
                            <p class='mt-6 mb-8 text-gray-600'>"
                        . $club[1] .
                        "</p>
                            <a class='inline-block' href='#'>
                                <span class='text-primary text-red-700'>Read More</span>
                            </a>
                        </div>
                    </div>";
                }
                ?>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="xl:container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
            <div class="mb-12 space-y-2 text-center">
                <h2 class="text-3xl font-bold text-gray-800 md:text-4xl">OTHERS</h2>
                <hr class="w-28 h-1 mx-auto my-2 bg-red-700 border-0 rounded" />
            </div>
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                <?php
                $clubs_info = [
                    [
                        "Alumni Association",
                        "MNNIT Alumni Association is an organization which acts as an interface between the esteemed alumni of the Institute and its bright students.",
                        "./static/images/alumni.jpg"
                    ],
                    [
                        "E-Cell",
                        "E-Cell is a Entrepreneurship community that fosters innovation and creativity among students. 
                        Our goal is to create a nationwide community of startup enthusiasts and bring them together under one umbrella.",
                        "./static/images/ecell.jpg"
                    ],
                ];

                foreach ($clubs_info as $club) {
                    echo
                    "<div class='group p-6 sm:p-8 rounded-3xl bg-white border border-gray-100 bg-opacity-50 shadow-2xl shadow-gray-600/10'>
                        <div class='relative overflow-hidden rounded-xl'>
                            <img src='" . $club[2] . "' alt='art cover' loading='lazy' class='h-full w-full object-cover object-top transition duration-500 group-hover:scale-105' />
                        </div>
                        <div class='mt-6 relative'>
                            <h3 class='text-2xl font-semibold text-gray-800'>"
                        . $club[0] .
                        "</h3>
                            <p class='mt-6 mb-8 text-gray-600'>"
                        . $club[1] .
                        "</p>
                            <a class='inline-block' href='#'>
                                <span class='text-primary text-red-700'>Read More</span>
                            </a>
                        </div>
                    </div>";
                }
                ?>
            </div>
        </div>
    </div>

    <?php
    include 'footer.php';
    ?>
</body>

</html>