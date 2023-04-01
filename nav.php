<style>
    @keyframes fadeIn {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    .maintitle {
        animation: fadeIn 3s;
    }

    @keyframes slideInFromBottom {
        0% {
            transform: translateY(4%);
        }

        100% {
            transform: translateY(0);
        }
    }

    .maincontent1 {
        animation: 1s ease-out 0s 1 slideInFromBottom;
    }

    .maincontent2 {
        animation: 1s ease-out 0s 1 slideInFromBottom;
    }

    .navtitle {
        text-shadow: 1px 1px 1px #5b5b5b, 1px 2px 1px #666666,
            1px 2px 1px #666666, 1px 2px 1px #666666, 1px 2px 1px #666666,
            1px 3px 1px #666666, 1px 3px 1px #666666, 1px 3px 1px #666666,
            1px 3px 1px #666666, 1px 3px 1px #666666,
            1px 3px 6px rgba(16, 16, 16, 0.4), 1px 4px 10px rgba(16, 16, 16, 0.2),
            1px 3px 35px rgba(16, 16, 16, 0.2), 1px 5px 60px rgba(16, 16, 16, 0.4);
    }
</style>

<nav id="mynav" class="flex bg-zinc-900 flex-col md:flex-row w-full fixed z-90 md:items-center justify-start md:justify-between md:flex-wrap p-4">
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
            <a href="./index.php" class="block mt-4 lg:inline-block lg:mt-0 hover:font-bold hover:animate-pulse mr-4 font-medium">
                Home
            </a>
            <a href="./clubs.php" class="block mt-4 lg:inline-block lg:mt-0 hover:font-bold hover:animate-pulse mr-4 font-medium">
                Clubs
            </a>
            <a href="./events.php" class="block mt-4 lg:inline-block lg:mt-0 hover:font-bold hover:animate-pulse mr-4 font-medium">
                Events
            </a>
            <a href="./achievement.php" class="block mt-4 lg:inline-block lg:mt-0 hover:font-bold hover:animate-pulse mr-4 font-medium">
                Achievement
            </a>
            <a href="./timeline.php" class="block mt-4 lg:inline-block lg:mt-0 hover:font-bold hover:animate-pulse mr-4 font-medium">
                Timeline
            </a>
            <a href="./team.php" class="block mt-4 lg:inline-block lg:mt-0 hover:font-bold hover:animate-pulse mr-4 font-medium">
                Team
            </a>
        </div>

        <!-- login button here -->
        <div>
            <a href="./login.php" class="inline-block text-sm px-4 py-2 leading-none font-medium border border-white rounded hover:border-transparent hover:bg-white hover:text-black mt-4 lg:mt-0 hover:animate-pulse">Login</a>
        </div>
    </div>
</nav>

<script>
    const btn = document.querySelector("button.mobile-menu-button");
    const menu = document.querySelector(".mobile-menu");

    btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
    });
</script>