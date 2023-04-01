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

    <div class="container mx-auto mt-20">
        <div class="d-flex text-center justify-content-center pt-0 text-3xl font-weight-900">
            <h2 style="
            color: #333;
            font-weight: 600;
            font-family: 'Poppins', sans-serif;
            letter-spacing: 2px;
            line-height: 180%;
          ">
                EVENTS
            </h2>
        </div>
        <hr class="w-20 h-1 mx-auto my-2 bg-red-700 border-0 rounded" />
        <!-- <div class="flex flex-wrap mx-4">
        <div class="w-full sm:w-1/2 md:w-1/2 xl:w-1/4 p-4">
          <a
            href=""
            class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden"
          >
            <div class="pb-4">
              <img
                class="h-full w-full object-cover"
                src="https://cdn-icons-png.flaticon.com/512/1946/1946429.png"
                alt=""
              />
            </div>
            <div class="p-4">
              <h2 class="mt-2 mb-2 font-bold">
                Purus Ullamcorper Inceptos Nibh
              </h2>
              <p class="text-sm">
                Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                Donec ullamcorper nulla non metus auctor fringilla.
              </p>
              <div class="mt-3 flex items-center">
                <span class="text-sm font-semibold">ab</span>&nbsp;<span
                  class="font-bold text-xl"
                  >45,00</span
                >&nbsp;<span class="text-sm font-semibold">€</span>
              </div>
            </div>
            <div class="p-4 border-t border-b text-xs text-gray-700">
              <span class="flex items-center mb-1">
                <i class="far fa-clock fa-fw mr-2 text-gray-900"></i> 3 Tage
              </span>
              <span class="flex items-center">
                <i class="far fa-address-card fa-fw text-gray-900 mr-2"></i>
                Ermäßigung mit Karte
              </span>
            </div>
            <div class="p-4 flex items-center text-sm text-gray-600">
              <svg
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
                class="h-4 w-4 fill-current text-yellow-500"
              >
                <path
                  d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"
                ></path></svg
              ><svg
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
                class="h-4 w-4 fill-current text-yellow-500"
              >
                <path
                  d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"
                ></path></svg
              ><svg
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
                class="h-4 w-4 fill-current text-yellow-500"
              >
                <path
                  d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"
                ></path></svg
              ><svg
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
                class="h-4 w-4 fill-current text-yellow-500"
              >
                <path
                  d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"
                ></path></svg
              ><svg
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
                class="h-4 w-4 fill-current text-gray-400"
              >
                <path
                  d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"
                ></path></svg
              ><span class="ml-2">34 Bewertungen</span>
            </div>
          </a>
        </div>
      </div> -->
    </div>

    <?php
    include 'footer.php';
    ?>
</body>

</html>