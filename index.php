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

            <?php
            include 'nav.php';
            ?>

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

        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>From the President's Desk</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/#page-header-->


        <!-- 
================================================== 
    Contact Section Start
================================================== -->
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
                            <h2>
                                FROM PRESIDENT DESK
                            </h2>
                            <p>
                                Motilal Nehru National Institute of Technology Allahabad has been known for its excellence,
                                academically, and the students keep raising the bar for themselves by proving to be a step ahead
                                of the crowd, time and again. The institute, at the same time, also has records of achievements in
                                curricular as well as extra-curricular activities. An extremely crucial role is played by the Student
                                Activity Centre (SAC) of the institute in facilitating the activities and reaching out to the
                                students. The prime locations of the SAC are Students’ Clubs, Boys’ SAC and Girls’ SAC,
                                Multipurpose Hall, Athletics Ground and Gymkhana. The student activity center hires pool of
                                part-time coaches for various events on yearly basis to groom the talents of the students.<br>
                                The Institute provides ample avenues for the development and nurturing of creative and other
                                talents in the students through the Student Activity Centre (SAC). All the activities are managed
                                by students under the guidance of President, SAC and a team of Faculty In-Charges, Faculty
                                Coordinators and Committees for various events. The SAC provide avenues for Cultural,
                                Technical and Managerial events, Personality development, Atheletics, Indoor and Outdoor
                                games, Yoga and other activities. The SAC also facilitate and encourage the students to take part
                                in similar events in other institutions.
                                I encourage all the students to take part and actively involve in at least one of the event of the
                                SAC.<br>
                                I wish a very bright and sporty career to all the MNNIT students.<br>
                                <br>
                                ANIL KUMAR SINGH<br>
                                PRESIDENT STUDENT ACTIVITY CENTER (SAC)
                            </p>
                        </div>

                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="500ms">
                            <img src="static/images/aks.jpeg" alt="">
                            <br><br><br>
                            <p style="text-align: center; ">Prof. Anil Kumar Singh </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php
    include 'footer.php';
    ?>
</body>

</html>