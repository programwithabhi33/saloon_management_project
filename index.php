<?php 
  require("./db/connection.php");
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Saloon management</title>
</head>

<body>
  <header class="text-gray-600 body-font sticky top-0 z-50 bg-gray-200">
    <div class="container mx-auto flex flex-wrap p-3 flex-col md:flex-row items-center">
      <a href="./" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
        <img class="h-[50px]" src="./assets/images/saloon.png" alt="Logo">
      </a>
      <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
        <a href="./pages/feedback.html" class="mr-5 hover:text-gray-900 cursor-pointer">Feedback</a>
        <a href="./pages/contact.html" class="mr-5 hover:text-gray-900 cursor-pointer">Contact Us</a>
      </nav>
    </div>
  </header>
  <section class="text-gray-600 body-font">
    <div class="container px-2 py-12 flex mx-auto flex-wrap">
      <div class="w-full">
        <div class="flex flex-wrap w-full py-52 px-4 relative mb-4">
          <img alt="gallery" class="w-full object-cover h-full object-center block opacity-80 absolute inset-0"
            src="./assets/images/backgroundimage.png">
          <div class="text-center relative z-10 w-full">
            <h2 class="text-5xl text-gray-900 font-medium title-font mb-2">Shooting Stars</h2>
            <p class="leading-relaxed text-gray-300">Skateboard +1 mustache fixie paleo lumbersexual.</p>
            <a href="./pages/book-appointment.php" class="mt-3 text-gray-100 inline-flex items-center bg-indigo-500 rounded-md p-2 cursor-pointer">Book Appointment Now
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="text-gray-600 body-font">
    <div class="container py-4 mx-auto">
      <div class="flex flex-wrap m-4 gap-12">
        <div class="lg:w-1/6 md:w-1/2 p-2 w-full border border-gray-200 shadow-md rounded-md">
          <a class="block relative h-48 rounded overflow-hidden">
            <img alt="ecommerce" class="object-cover w-full h-[200px]" src="./assets/images/haircut.jpeg">
          </a>
          <div class="mt-4">
            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Haircuts & Hairstyles</h3>
            <h2 class="text-gray-900 title-font text-lg font-medium">Experience the best in hair styling and cutting.
            </h2>
            <p class="mt-1">₹300</p>
          </div>
        </div>

        <div class="lg:w-1/6 md:w-1/2 p-2 w-full border border-gray-200 shadow-md rounded-md">
          <a class="block relative h-48 rounded overflow-hidden">
            <img alt="ecommerce" class="object-cover w-full h-[200px]" src="./assets/images/beard.jpg">
          </a>
          <div class="mt-4">
            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Beard Grooming</h3>
            <h2 class="text-gray-900 title-font text-lg font-medium">Trimming, washing, and applying products to keep your beard healthy and looking its best.
            </h2>
            <p class="mt-1">₹200</p>
          </div>
        </div>
        <div class="lg:w-1/6 md:w-1/2 p-2 w-full border border-gray-200 shadow-md rounded-md">
          <a class="block relative h-48 rounded overflow-hidden">
            <img alt="ecommerce" class="object-cover w-full h-[200px]" src="./assets/images/detan.jpeg">
          </a>
          <div class="mt-4">
            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Detan</h3>
            <h2 class="text-gray-900 title-font text-lg font-medium">A process to remove tanned skin cells and restore the skin’s natural color and health.
            </h2>
            <p class="mt-1">₹250</p>
          </div>
        </div>
        <div class="lg:w-1/6 md:w-1/2 p-2 w-full border border-gray-200 shadow-md rounded-md">
          <a class="block relative h-48 rounded overflow-hidden">
            <img alt="ecommerce" class="object-cover w-full h-[200px]" src="./assets/images/massage.jpg">
          </a>
          <div class="mt-4">
            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Massage</h3>
            <h2 class="text-gray-900 title-font text-lg font-medium">A manual therapy that involves manipulating the body’s soft tissues, such as muscles, kneading, rubbing, or stroking.
            </h2>
            <p class="mt-1">₹450</p>
          </div>
        </div>
        <div class="lg:w-1/6 md:w-1/2 p-2 w-full border border-gray-200 shadow-md rounded-md">
          <a class="block relative h-48 rounded overflow-hidden">
            <img alt="ecommerce" class="object-cover w-full h-[200px]" src="./assets/images/pedicure.jpg">
          </a>
          <div class="mt-4">
            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Pedicure</h3>
            <h2 class="text-gray-900 title-font text-lg font-medium">Professional treatment for feet and nails.
            </h2>
            <p class="mt-1">₹400</p>
          </div>
        </div>
        <div class="lg:w-1/6 md:w-1/2 p-2 w-full border border-gray-200 shadow-md rounded-md">
          <a class="block relative h-48 rounded overflow-hidden">
            <img alt="ecommerce" class="object-cover w-full h-[200px]" src="./assets/images/haircolor.jpg">
          </a>
          <div class="mt-4">
            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Haircolor</h3>
            <h2 class="text-gray-900 title-font text-lg font-medium">Color your hair with our attractive shades.
            </h2>
            <p class="mt-1">₹600</p>
          </div>
        </div>
        <div class="lg:w-1/6 md:w-1/2 p-2 w-full border border-gray-200 shadow-md rounded-md">
          <a class="block relative h-48 rounded overflow-hidden">
            <img alt="ecommerce" class="object-cover w-full h-[200px]" src="./assets/images/body.jpg">
          </a>
          <div class="mt-4">
            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Body Massage</h3>
            <h2 class="text-gray-900 title-font text-lg font-medium">Relax and relieve stress with our soothing massage therapy.
            </h2>
            <p class="mt-1">₹500</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="text-gray-600 body-font">
    <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
      <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
        <img class="h-[50px]" src="./assets/images/saloon.png" alt="">
      </a>
      <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2024 Exceed
      </p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
        <a class="text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
            <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span>
    </div>
  </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  <?php if ($connectionMessage !== false): ?>
    Swal.fire({
      title: "Good job!",
      text: "<?= $connectionMessage?>",
      icon: "success"
    });
  <?php endif; ?>
</script>
</html>