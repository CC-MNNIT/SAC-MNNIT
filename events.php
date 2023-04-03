<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <title>Team</title>
    <link rel="stylesheet" href="/static/css/events.css">
</head>

<body>
    <div class="text-center text-white relative overflow-hidden bg-no-repeat bg-cover">
        <?php
        include 'nav.php';
        ?>
    </div>

    <!-- Content -->
    <section class="achievement text-center mt-20 mx-12">
        <!-- Testimonial Heading -->
        <div class="d-flex justify-content-center pt-0 text-3xl font-weight-900">
            <h2>
                <span class="font-bold text-2xl md:text-2xl tracking-tight">EVENTS</span>
            </h2>
        </div>

        <!-- <hr class="bg-rose-700"> -->
        <hr class="w-40 h-1 mx-auto my-2 bg-red-700 border-0 rounded" />
        <div class="bg-white text-justify">
            <div class="p-4">
                <ol class="border-l-2 border-blue-600">
                    <li>
                        <div class="flex flex-start items-center">
                            <div class="bg-blue-600 w-4 h-4 flex items-center justify-center rounded-full -ml-2 mr-3 -mt-2">
                            </div>
                            <h4 class="text-gray-800 font-semibold text-xl -mt-2">
                                Title of section 1
                            </h4>
                        </div>
                        <div class="ml-6 mb-6 pb-6">
                            <a href="#!" class="text-blue-600 hover:text-blue-700 focus:text-blue-800 duration-300 transition ease-in-out text-sm">4
                                February, 2022</a>
                            <p class="text-gray-700 mt-2 mb-4">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="flex flex-start items-center">
                            <div class="bg-blue-600 w-4 h-4 flex items-center justify-center rounded-full -ml-2 mr-3 -mt-2">
                            </div>
                            <h4 class="text-gray-800 font-semibold text-xl -mt-2">
                                Title of section 2
                            </h4>
                        </div>
                        <div class="ml-6 mb-6 pb-6">
                            <a href="#!" class="text-blue-600 hover:text-blue-700 focus:text-blue-800 duration-300 transition ease-in-out text-sm">12
                                January, 2022</a>
                            <p class="text-gray-700 mt-2 mb-4">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                accusantium doloremque laudantium, totam rem aperiam, eaque
                                ipsa quae ab illo inventore veritatis et quasi architecto
                                beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem
                                quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                consequuntur magni dolores eos qui ratione voluptatem sequi
                                nesciunt.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="flex flex-start items-center">
                            <div class="bg-blue-600 w-4 h-4 flex items-center justify-center rounded-full -ml-2 mr-3 -mt-2">
                            </div>
                            <h4 class="text-gray-800 font-semibold text-xl -mt-2">
                                Title of section 3
                            </h4>
                        </div>
                        <div class="ml-6 mb-6 pb-6">
                            <a href="#!" class="text-blue-600 hover:text-blue-700 focus:text-blue-800 duration-300 transition ease-in-out text-sm">27
                                December, 2021</a>
                            <p class="text-gray-700 mt-2 mb-4">
                                At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                blanditiis praesentium voluptatum deleniti atque corrupti quos
                                dolores et quas molestias excepturi sint occaecati cupiditate
                                non provident, similique sunt in culpa qui officia deserunt
                                mollitia animi, id est laborum et dolorum fuga. Et harum
                                quidem rerum facilis est et expedita distinctio.
                            </p>
                        </div>
                    </li>
                </ol>
            </div>
        </div>
    </section>

    <?php
    include 'footer.php';
    ?>
</body>

</html>