import React from "react";
import { Link } from "react-router-dom";
import { images } from "../models/images";

const Footer: React.FC = () => {
  const scrollToTop = () => window.scrollTo({ top: 0, behavior: "smooth" });
  const currentYear = new Date().getFullYear();

  const handleScroll = () => {
    const toTopButton = document.getElementById("to-top-button");
    if (toTopButton) {
      if (
        document.body.scrollTop > 200 ||
        document.documentElement.scrollTop > 200
      ) {
        toTopButton.classList.remove("hidden");
        toTopButton.classList.add("flex");
      } else {
        toTopButton.classList.add("hidden");
        toTopButton.classList.remove("flex");
      }
    }
  };

  React.useEffect(() => {
    window.addEventListener("scroll", handleScroll);
    return () => window.removeEventListener("scroll", handleScroll);
  }, []);

  return (
    <div>
      <button
        id="to-top-button"
        title="Go To Top"
        className="justify-center content-center hidden fixed z-50 bottom-8 right-8 border-0 w-12 h-12 animate-bounce rounded-full drop-shadow-md bg-zinc-900 text-white text-2xl font-bold"
        onClick={scrollToTop}
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          className=""
          fill="currentColor"
          height="24px"
          width="24px"
          viewBox="0 0 384 512"
        >
          <path
            className=""
            d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"
          />
        </svg>
      </button>

      <footer className="px-4 divide-y bg-zinc-900 text-gray-100">
        <div className="container mx-auto py-10 flex flex-col lg:flex-row gap-10">

            {/* LEFT LOGO */}
            <div className="lg:w-1/3 flex justify-center lg:justify-start">
            <Link to="/" className="flex items-center space-x-3">
                <div className="w-14 h-14">
                <img src={images.mnnit_logo} alt="MNNIT" />
                </div>
                <span className="text-xl sm:text-2xl font-semibold">SAC MNNIT</span>
            </Link>
            </div>

            {/* RIGHT SECTION */}
            <div className="grid grid-cols-1 sm:grid-cols-2 gap-8 lg:w-2/3 lg:ml-auto text-sm">

            {/* QUICK LINKS */}
            <div className="space-y-3 text-center sm:text-left lg:text-right">
                <h3 className="tracking-wide uppercase text-gray-50">Quick Links</h3>
                <ul className="space-y-1">
                <li><a href="http://www.mnnit.ac.in" target="_blank" rel="noopener noreferrer" className="hover:text-white transition">MNNIT Website</a></li>
                <li><a href="https://alumni.mnnit.ac.in/" target="_blank" rel="noopener noreferrer" className="hover:text-white transition">Alumni Web-Portal</a></li>
                <li><a href="http://www.mnnit.ac.in/swo/" target="_blank" rel="noopener noreferrer" className="hover:text-white transition">Student Welfare</a></li>
                <li><a href="http://www.mnnit.ac.in/index.php/anti-ragging" target="_blank" rel="noopener noreferrer" className="hover:text-white transition">Anti-Ragging</a></li>
                </ul>
            </div>

            {/* SOCIAL */}
            <div className="space-y-3 text-center sm:text-left lg:text-right">
                <div className="uppercase text-gray-50">Social Media</div>

                <div className="flex justify-center sm:justify-start lg:justify-end space-x-4">
                    <a href="https://www.facebook.com/MNNITALLD/" target="_blank" rel="noopener noreferrer" className="hover:text-white transition">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 32 32" className="w-5 h-5 fill-current" > <path d="M32 16c0-8.839-7.167-16-16-16-8.839 0-16 7.161-16 16 0 7.984 5.849 14.604 13.5 15.803v-11.177h-4.063v-4.625h4.063v-3.527c0-4.009 2.385-6.223 6.041-6.223 1.751 0 3.584 0.312 3.584 0.312v3.937h-2.021c-1.984 0-2.604 1.235-2.604 2.5v3h4.437l-0.713 4.625h-3.724v11.177c7.645-1.199 13.5-7.819 13.5-15.803z"></path> </svg>
                    </a>
                    <a href="https://x.com/MNNITALLD" target="_blank" rel="noopener noreferrer" className="hover:text-white transition">
                        <svg viewBox="0 0 1200 1227" className="w-5 h-5 fill-current">
                            <path d="M714.163 519.284L1160.89 0H1055.03L667.137 450.887L357.328 0H0L468.492 681.821L0 1226.37H105.866L515.491 750.218L842.672 1226.37H1200L714.137 519.284H714.163ZM569.165 687.828L521.697 619.934L144.011 79.6944H306.615L611.412 515.685L658.88 583.579L1055.08 1150.3H892.476L569.165 687.854V687.828Z"/>
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/mnnitalld" target="_blank" rel="noopener noreferrer" className="hover:text-white transition">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor" className="w-5 h-5 fill-current" > <path d="M16 0c-4.349 0-4.891 0.021-6.593 0.093-1.709 0.084-2.865 0.349-3.885 0.745-1.052 0.412-1.948 0.959-2.833 1.849-0.891 0.885-1.443 1.781-1.849 2.833-0.396 1.020-0.661 2.176-0.745 3.885-0.077 1.703-0.093 2.244-0.093 6.593s0.021 4.891 0.093 6.593c0.084 1.704 0.349 2.865 0.745 3.885 0.412 1.052 0.959 1.948 1.849 2.833 0.885 0.891 1.781 1.443 2.833 1.849 1.020 0.391 2.181 0.661 3.885 0.745 1.703 0.077 2.244 0.093 6.593 0.093s4.891-0.021 6.593-0.093c1.704-0.084 2.865-0.355 3.885-0.745 1.052-0.412 1.948-0.959 2.833-1.849 0.891-0.885 1.443-1.776 1.849-2.833 0.391-1.020 0.661-2.181 0.745-3.885 0.077-1.703 0.093-2.244 0.093-6.593s-0.021-4.891-0.093-6.593c-0.084-1.704-0.355-2.871-0.745-3.885-0.412-1.052-0.959-1.948-1.849-2.833-0.885-0.891-1.776-1.443-2.833-1.849-1.020-0.396-2.181-0.661-3.885-0.745-1.703-0.077-2.244-0.093-6.593-0.093zM16 2.88c4.271 0 4.781 0.021 6.469 0.093 1.557 0.073 2.405 0.333 2.968 0.553 0.751 0.291 1.276 0.635 1.844 1.197 0.557 0.557 0.901 1.088 1.192 1.839 0.22 0.563 0.48 1.411 0.553 2.968 0.072 1.688 0.093 2.199 0.093 6.469s-0.021 4.781-0.099 6.469c-0.084 1.557-0.344 2.405-0.563 2.968-0.303 0.751-0.641 1.276-1.199 1.844-0.563 0.557-1.099 0.901-1.844 1.192-0.556 0.22-1.416 0.48-2.979 0.553-1.697 0.072-2.197 0.093-6.479 0.093s-4.781-0.021-6.48-0.099c-1.557-0.084-2.416-0.344-2.979-0.563-0.76-0.303-1.281-0.641-1.839-1.199-0.563-0.563-0.921-1.099-1.197-1.844-0.224-0.556-0.48-1.416-0.563-2.979-0.057-1.677-0.084-2.197-0.084-6.459 0-4.26 0.027-4.781 0.084-6.479 0.083-1.563 0.339-2.421 0.563-2.979 0.276-0.761 0.635-1.281 1.197-1.844 0.557-0.557 1.079-0.917 1.839-1.199 0.563-0.219 1.401-0.479 2.964-0.557 1.697-0.061 2.197-0.083 6.473-0.083zM16 7.787c-4.541 0-8.213 3.677-8.213 8.213 0 4.541 3.677 8.213 8.213 8.213 4.541 0 8.213-3.677 8.213-8.213 0-4.541-3.677-8.213-8.213-8.213zM16 21.333c-2.948 0-5.333-2.385-5.333-5.333s2.385-5.333 5.333-5.333c2.948 0 5.333 2.385 5.333 5.333s-2.385 5.333-5.333 5.333zM26.464 7.459c0 1.063-0.865 1.921-1.923 1.921-1.063 0-1.921-0.859-1.921-1.921 0-1.057 0.864-1.917 1.921-1.917s1.923 0.86 1.923 1.917z"></path> </svg>
                    </a>
                </div>
            </div>

            </div>
        </div>

        {/* BOTTOM BAR */}
        <div className="py-6 text-sm text-center text-gray-400">
            © {currentYear} CC MNNIT. All rights reserved.
        </div>
        </footer>
    </div>
  );
};

export default Footer;
