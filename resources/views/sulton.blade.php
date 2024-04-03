<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akhmad Sultoni</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700">
    <style>
        .gradient{
            background: linear-gradient(90deg,#000000 0%, #a7b930 100%);
        }
    </style>
</head>
<body class="gradient leading-normal tracking-normal text-white" style="font-family: 'Source Sans Pro',sans-serif;">
    <!--Nav-->
    <nav id="header" class="fixed w-full z-30 top-0 ">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
            <div class="pl-4 flex items-center">
                <a href="#" class="toggleColour  no-underline hover:no-underline font-bold text-2xl lg:text-4xl  text-white -400"></a>
                <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
                    <!--Icon from: http://www.potlabicons.com/ -->

                    
                </a>
            </div>
            <div class="block lg:hidden pr-4">
              <button id="nav-toggle" class="flex items-center p-1 text-white -800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                  <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <title>Menu</title>
                      <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                  </svg>
              </button>
          </div> 
          <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-black lg:bg-transparent text-white -600 -4 lg:p-0 z-20" id="nav-content">
              <ul class="list-reset lg:flex justify-end flex-1 items-center">
                  <li class="mr-3">
                      <a class="inline-block no-underline font-bold hover:text-yellow-600 hover:text-underline py-2 px-4" href="#home" onclick="toggleNavbar()">HOME</a>
                  </li>
                  <li class="mr-3">
                      <a class="inline-block no-underline font-bold hover:text-yellow-600 hover:text-underline py-2 px-4" href="#about" onclick="toggleNavbar()">ABOUT ME</a>
                  </li>
                  <li class="mr-3">
                      <a class="inline-block no-underline font-bold hover:text-yellow-600 hover:text-underline py-2 px-4" href="#service" onclick="toggleNavbar()">SERVICE</a>
                  </li>
                  <li class="mr-3">
                      <a class="inline-block no-underline font-bold hover:text-yellow-600 hover:text-underline py-2 px-4" href="#porto" onclick="toggleNavbar()">PORTOFOLIO</a>
                  </li>
              </ul>
          </div>
          
          <script>
              function toggleNavbar() {
                  document.getElementById('nav-content').classList.toggle('hidden');
              }
          </script>
                   
                </ul>

            </div>
        </div>
        <hr class="border-b border-gray-100 opacity-25 my-0
         py-0" />
    </nav>
      <!--Hero-->
    <div id="home" class="pt-24">
        <div class="container px-10 mx-auto flex flex-wrap flex-col md:flex-row items-center ">
            <!--Left Col-->
            <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left px-10">
                <p class="uppercase tracking-loose w-full"></p>
                <h1 class="my-4 text-5xl font-bold leading-tight">
                   MY NAME IS AKHMAD SULTONI
                </h1>
                <p class="leading-normal text-3xl mb-8">
                   I'M WEB DEVELOPMENT
                </p>
                <button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    MY PORTOFOLIO
                </button>
            </div>
            <!--Right Col-->
            <div class="w-full md:w-3/5 py-6 text-center">
                <img class="w-full md:w-4/5 z-50  shadow-lg " src="img/fotooo.png" />
            </div>
        </div>
    </div>
    
   <section id="about" class="max-w-7xl mx-auto px-5 my-6 text-white" id="Services">
  <div class="text-center">
    <h2 class="text-primary text-3xl font-bold mb-16">ABOUT ME</h2>
  </div>

  <div class="pt-24">
    <div class="container px-10 mx-auto flex flex-wrap md:flex-nowrap items-center">
      <!-- Left Col -->
      <div class="w-full md:w-3/5 flex justify-center items-center mb-10 md:mb-0">
        <div class="w-[300px] px-5 py-8 rounded-lg border border-primary  cursor-pointer shadow-xl">
          <img src="img/foto22.png" alt="" class="w-[230px] mx-auto" />
        </div>
      </div>

      <!-- Right Col -->
      <div class="w-full md:w-2/5">
        <h1 class="text-5xl font-bold mb-4">
          HELLO!
        </h1>
        <p class="text-2xl leading-relaxed">
          Saya Akhmad Sultoni, seorang pengembang web dengan pengalaman yang kokoh dalam menciptakan solusi digital yang menarik dan fungsional. Dengan kecintaan saya pada teknologi dan desain, saya berfokus untuk memberikan pengalaman pengguna yang luar biasa melalui situs web yang saya kembangkan.
        </p>
      </div>
    </div>
  </div>
</section>
    <!-- service section -->
    <section id="service" class="max-w-7xl mx-auto px-5 my-6 text-white" id="Services">
      <div class="text-center">
       
        <h3 class="text-primary text-3xl font-bold mb-16">MY SERVICE</h3>
      </div>
      <!-- service cards -->
      <div
        class="my-16 flex flex-col md:flex-row justify-around items-center gap-12"
      >
        <div
          class="w-[354px] px-5 py-8 rounded-lg border border-primary cursor-pointer shadow-xl"
        >
          <img
            src="img/coding.png"
            alt=""
            class="w-[196px] mb-12 mx-auto"
          />
          <h5 class="text-center my-5 text-xl">Web Responsive</h5>
          <p class="text-justify">
            Saya mengkhususkan diri dalam menciptakan situs web yang responsif dan berfungsi dengan baik di berbagai perangkat, mulai dari desktop hingga ponsel pintar, untuk memastikan pengalaman pengguna yang konsisten dan memuaskan.
          </p>
        </div>
        <div
          class="w-[354px] px-5 py-8 rounded-lg border border-primary cursor-pointer shadow-xl"
        >
          <img
            src="img/programming.png"
            alt=""
            class="w-[196px] mb-12 mx-auto"
          />
          <h5 class="text-center my-5 text-xl">Design UI & UX</h5>
          <p class="text-justify">
            Dengan perhatian terhadap detail dan pemahaman yang mendalam tentang prinsip-prinsip desain UI/UX, saya menciptakan antarmuka yang menarik dan mudah digunakan, mengarah pada tingkat keterlibatan dan konversi yang lebih tinggi bagi pengguna.
          </p>
        </div>
        <div
          class="w-[354px] px-5 py-8 rounded-lg border border-primary cursor-pointer shadow-xl"
        >
          <img
            src="img/data.png"
            alt=""
            class="w-[196px] mb-12 mx-auto"
          />
          <h5 class="text-center my-5 text-xl">Custom Solutions</h5>
          <p class="text-justify">
            Saya menyediakan pengembangan solusi web yang disesuaikan dengan kebutuhan spesifik klien, baik itu aplikasi web, sistem manajemen konten (CMS), atau integrasi API, untuk memberikan solusi yang sesuai dan efektif bagi bisnis Anda.
          </p>
        </div>
      </div>
    </section>

    <!-- projects -->
    <section id="porto" class="px-5 my-32 mx-auto max-w-7xl" id="projects">
      <div class="text-center text-white">
        <h3 class="text-3xl font-bold mb-5">
           <span class="text-primary">PORTOFOLIO</span>
        </h3>
       
      </div>
      <div
        class="flex md:flex-row flex-col items-center justify-between gap-8 my-20"
      >
        <div
          class=" shadow-xl md:w-[741px] md:h-96 mx-auto rounded-2xl p-5 md:p-0"
        >
          <img src="img/ke1.png" alt="" class="p-5 w-full" />
        </div>
        <div
          class=" shadow-xl  md:w-[741px] md:h-96 mx-auto rounded-2xl p-5"
        >
          <img src="img/ke3.png" alt="" class="w-full p-5" />
        </div>
      </div>
    </section>

   <script src="{{ mix('js/app.js') }}"></script>

    <script>
        var scrollpos = window.scrollY;
        var header = document.getElementById("header");
        var navcontent = document.getElementById("nav-content");
        var navaction = document.getElementById("navAction");
        var brandname = document.getElementById("brandname");
        var toToggle = document.querySelectorAll(".toggleColour");

        document.addEventListener("scroll", function() {
            /*Apply classes for slide in bar*/
            scrollpos = window.scrollY;

            if (scrollpos > 10) {
                header.classList.add("bg-[#00000]");
                navaction.classList.remove("bg-white");
                navaction.classList.add("gradient");
                navaction.classList.remove("text-green-700");
                navaction.classList.add("text-white");
                //Use to switch toggleColour colours
                for (var i = 0; i < toToggle.length; i++) {
                    toToggle[i].classList.add("text-gray-800");
                    toToggle[i].classList.remove("text-white");
                }
                header.classList.add("shadow");
                navcontent.classList.remove("bg-gray-100");
                navcontent.classList.add("bg-white");
            } else {
                header.classList.remove("bg-white");
                navaction.classList.remove("gradient");
                navaction.classList.add("bg-white");
                navaction.classList.remove("text-white");
                navaction.classList.add("text-gray-800");
                //Use to switch toggleColour colours
                for (var i = 0; i < toToggle.length; i++) {
                    toToggle[i].classList.add("text-white");
                    toToggle[i].classList.remove("text-gray-800");
                }

                header.classList.remove("shadow");
                navcontent.classList.remove("bg-white");
                navcontent.classList.add("bg-gray-100");
            }
        });

    </script>
    <script>
        /*Toggle dropdown list*/
        /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

        var navMenuDiv = document.getElementById("nav-content");
        var navMenu = document.getElementById("nav-toggle");

        document.onclick = check;

        function check(e) {
            var target = (e && e.target) || (event && event.srcElement);

            //Nav Menu
            if (!checkParent(target, navMenuDiv)) {
                // click NOT on the menu
                if (checkParent(target, navMenu)) {
                    // click on the link
                    if (navMenuDiv.classList.contains("hidden")) {
                        navMenuDiv.classList.remove("hidden");
                    } else {
                        navMenuDiv.classList.add("hidden");
                    }
                } else {
                    // click both outside link and outside menu, hide menu
                    navMenuDiv.classList.add("hidden");
                }
            }
        }

        function checkParent(t, elm) {
            while (t.parentNode) {
                if (t == elm) {
                    return true;
                }
                t = t.parentNode;
            }
            return false;
        }

    </script>

<response>
<footer class="bg-white -500 text-black py-4">
  <div class="flex justify-center items-center">
      <a href="https://wa.me/6287825484134"><img src="img/whatsapp.png" alt="GitHub" class="h-8 w-8 mr-4"></a>
      <a href="https://instagram.com/fredoakhmad?igshid=MzMyNGUyNmU2YQ=="><img src="img/instagram.png" alt="GitHub" class="h-8 w-8 mr-4"></a>
      <a href="https://github.com/Sulton712"><img src="img/github.png" alt="GitHub" class="h-8 w-8 mr-4"></a>
  </div>
  <p class="text-center mt-4" style="font-size: smaller;">&copy; CopyrightBy@Sulton</p>
</footer>
<script>
function clickEffect(element) {
  element.style.opacity = 0.5;
  setTimeout(function() {
    element.style.opacity = 1;
  }, 100);
}
</script>
</response>

    <!-- script tags -->
    <script src="src/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="src/review.js"></script>
  </body>
</html>
