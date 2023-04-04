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

    <!-- Content -->
    <section class="achievement text-center mt-20 z-10 relative">
        <!-- Testimonial Heading -->
        <div class="d-flex justify-content-center pt-0 text-3xl font-weight-900">
            <h2>
                <span class="font-bold text-2xl md:text-2xl tracking-tight">CLUBS</span>
            </h2>
        </div>

        <!-- <hr class="bg-rose-700"> -->
        <hr class="w-28 h-1 mx-auto my-2 bg-red-700 border-0 rounded" />

        <!-- Content -->
        <div class="flex flex-col m-8 md:m-12">

            <?php
            $clubs_info = [
                [
                    "Computer Coding Club",
                    "Hacking 0s 1s",
                    "MNNIT Computer Coding Club as we call it is an official student
                        organisation under Student Activity Centre (SAC) of our college.
                        We host several events in the domain of Computer Science And
                        Engineering for which we also conduct classes on regular basis.
                        Students from various courses actively participate in these 
                        events and classes throughout the year.",
                    "./static/images/cc.jpg"
                ],
                [
                    "Robotics Club",
                    "It'll blow your mind",
                    "Robotics Club MNNIT is a diverse group of robotics enthusiasts
                        from all the college departments, which runs under the umbrella of
                        the Student Activity Centre of MNNIT Allahabad. Established in
                        2016, we are mainly concerned with building robots for academic
                        purposes, competing at national events, or even building just out
                        of imagination.",
                    "./static/images/roboclub.jpg"
                ],
                [
                    "Aeroclub",
                    "Let yourself fly",
                    "Aero Club MNNIT is a diverse group of aero-science enthusiasts
                        from all the college departments, which runs under the umbrella of
                        the Student Activity Centre of MNNIT Allahabad. Established in
                        2016, we are mainly concerned with aeronautical studies for
                        academic purposes, competing at national events, or even building
                        just out of imagination.",
                    "./static/images/aeroclub.jpg"
                ],
                [
                    "Astro Club",
                    "Explore the universe",
                    "Astro Club MNNIT is a diverse group of astronomy enthusiasts
                        from all the college departments, which runs under the umbrella of
                        the Student Activity Centre of MNNIT Allahabad. Established in
                        2016, we are mainly concerned with astronomy for
                        academic purposes, competing at national events, or even building
                        just out of imagination.",
                    "./static/images/astroclub.jpg"
                ]
            ];

            foreach ($clubs_info as $club) {
                echo "<div class='rounded-lg bg-white mb-10 overflow-hidden relative hover:shadow-2xl duration-300'>
                <div class='text-start w-1/2 py-12 px-4 sm:px-6 lg:py-16 lg:px-8'>
                    <h2 class='text-3xl font-extrabold text-black sm:text-4xl'>
                        <span class='block'>"
                    . $club[0] .
                    "</span>
                    </h2>
                    <h3 class='text-2xl font-extrabold text-black sm:text-2xl'>
                        <span class='block text-red-700'>"
                    . $club[1] .
                    "</span>
                    </h3>
                    <p class='text-xl mt-4 text-gray-500'>"
                    . $club[2] .
                    "</p>
                </div>
                <img src='" . $club[3] . "' class='absolute top-0 right-0 hidden h-full max-w-1/2 lg:block' />
                </div>";
            }
            ?>
        </div>
    </section>

    <?php
    include 'footer.php';
    ?>
</body>

</html>