<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <title>Clubs</title>
    <link rel="stylesheet" href="static/css/clubs.css">
</head>

<body>
    <div class="text-center text-white relative overflow-hidden bg-no-repeat bg-cover">
        <?php
        include 'nav.php';
        ?>
    </div>

    <!-- Content -->
    <section class="achievement text-center mt-20">
        <!-- Testimonial Heading -->
        <div class="d-flex justify-content-center pt-0 text-3xl font-weight-900">
            <h2 style="
            color: #333;
            font-weight: 600;
            font-family: 'Poppins', sans-serif;
            letter-spacing: 2px;
            line-height: 180%;
          ">
                CLUBS
            </h2>
        </div>

        <!-- <hr class="bg-rose-700"> -->
        <hr class="w-28 h-1 mx-auto my-2 bg-red-700 border-0 rounded" />

        <!-- Content -->
        <div class="flex flex-col m-8 md:m-12">
            <div class="flex flex-col-reverse md:flex-row-reverse items-center my-4">
                <div class="flex-1">
                    <h2 class="">
                        Robotics Club <span class="text-muted">It'll blow your mind</span>
                    </h2>
                    <p class="lead">
                        Robotics Club MNNIT is a diverse group of robotics enthusiasts
                        from all the college departments, which runs under the umbrella of
                        the Student Activity Centre of MNNIT Allahabad. Established in
                        2016, we are mainly concerned with building robots for academic
                        purposes, competing at national events, or even building just out
                        of imagination.
                    </p>
                </div>
                <div class="flex-1">
                    <img src="./static/images/roboclub.jpg" alt="Club image here." class="w-72 h-72 m-2 rounded-full border-2" />
                </div>
            </div>

            <hr class="border-gray-400 m-4 my-6" />

            <!-- Aeroclub -->
            <div class="flex flex-col-reverse md:flex-row-reverse items-center justify-center my-4">
                <div class="flex-1">
                    <h2 class="">
                        Aeroclub <span class="text-muted">Let yourself fly</span>
                    </h2>
                    <p class="lead">
                        Aero Club MNNIT is a diverse group of aero-science enthusiasts
                        from all the college departments, which runs under the umbrella of
                        the Student Activity Centre of MNNIT Allahabad. Established in
                        2016, we are mainly concerned with aeronautical studies for
                        academic purposes, competing at national events, or even building
                        just out of imagination.
                    </p>
                </div>
                <div class="flex-1">
                    <img src="./static/images/aeroclub.jpg" alt="Club image here." class="w-72 h-72 m-2 rounded-full border-2" />
                </div>
            </div>

            <hr class="border-gray-400 m-4 my-6" />

            <!-- Astroclub -->
            <div class="flex flex-col-reverse md:flex-row-reverse items-center place-content-center my-4">
                <div class="flex-1">
                    <h2 class="title">
                        Astroclub
                    </h2>
                    <span class="text-muted">Beaware of the meteorite</span>
                    <p class="lead">
                        Astro Club MNNIT is a diverse group of astro-science enthusiasts
                        from all the college departments, which runs under the umbrella of
                        the Student Activity Centre of MNNIT Allahabad. Established in
                        2016, we are mainly concerned with astronomical studies for
                        academic purposes, competing at national events, or even building
                        just out of imagination.
                    </p>
                </div>
                <div class="flex-1">
                    <img src="./static/images/astroclub.jpg" alt="Club image here." class="w-72 h-72 m-2 rounded-full border-2" />
                </div>
            </div>
        </div>
    </section>

    <?php
    include 'footer.php';
    ?>
</body>

</html>