<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <title>Team</title>
    <link rel="stylesheet" href="/static/css/team.css">
</head>

<body>
    <div class="text-center text-white relative overflow-hidden bg-no-repeat bg-cover">
        <?php
        include 'nav.php';
        ?>
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

    <?php
    include 'footer.php';
    ?>
</body>

</html>