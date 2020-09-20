<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Huellitas verdes</title>
    <link rel="stylesheet" href="tailstyle.css">
    <style>
        body {
            background: url("pattern.png");
            background-attachment: fixed;
        }

        .menu {
            top: 3rem;
        }

        .active {
            display: block;
        }
    </style>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1b5eb10e65.js" crossorigin="anonymous"></script>


</head>

<body>

    <!-- NAVBAR -->


    <header
        class="  w-full bg-white border-huellitas_brown fixed h-12  shadow-lg nav-border">
        <div class="navwrapper flex flex-wrap  h-full mx-auto items-center justify-between ">


            <div class=" whitespace-no-wrap flex-shrink ml-4 ">
                <i class="fas fa-paw fa-2x fill-current text-huellitas_brown "></i>
                <a href="/" class="text-3xl  mx-auto font-bold ">Huellitas <span
                        class=" text-huellitas_green">verdes</span>
                </a>

            </div>

            <div class="flex btn flex-center md:hidden mr-4">
                <button class="focus:outline-none focus:text-huellitas_brown transition-colors ease duration-200 ">

                    <svg viewBox="0 0 100 100" width="30" height="20" class=" fill-current">
                        <rect width="100" height="20"></rect>
                        <rect y="40" width="100" height="20"></rect>
                        <rect y="80" width="100" height="20"></rect>
                    </svg>

                </button>
            </div>

            <div
                class=" hidden block menu w-full md:w-1/2  md:flex md:mr-4 md:border-0 md:shadow-none nav-border shadow-lg">
                <ul class="md:flex md:space-x-5 px-5 py-3  md:py-0 md:px-0 text-xl md:ml-auto bg-white">
                    <li><a href="">Conocenos</a></li>
                    <li><a href="" class="font-bold">Noticias</a></li>
                    <li><a href="" class="">Contacto</a></li>

                </ul>

            </div>


        </div>



    </header>



    <!-- END NAVBAR -->

    <div class="main pt-12 h-full flex w-full ">
        <div class="wrapper w-full p-4 flex justify-center">
            <div class="root max-w-3xl flex flex-col h-full  lg:space-y-3 space-y-5 items-center ">




                <div class="card bg-fuchsia ">
                    <div class="py-4 px-6">
                        <p class="font-bold text-2xl text-center">

                            Sample



                        </p>


                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam magnam nisi impedit fugit,
                        pariatur
                        dolorem aliquid. Corporis unde sed, nostrum, et harum fugiat porro sapiente possimus maxime,
                        numquam
                        iure reprehenderit. Porro placeat neque facere officiis aut. Voluptates velit laboriosam
                        accusantium
                        odit voluptate, dolorem corporis ratione culpa error. Dolorem similique iure recusandae, alias
                        ratione
                        dolor maiores aspernatur distinctio voluptate eius numquam ullam impedit perferendis cum!
                        Molestiae
                        reiciendis laboriosam atque repellendus voluptates! Perferendis accusamus nisi sequi saepe
                        tempore
                        possimus pariatur illum tenetur eos impedit, dolorem dolorum incidunt doloribus earum maiores
                        voluptatem
                        doloremque aspernatur iusto repellendus repudiandae culpa! Praesentium quasi quod laboriosam
                        laborum.
                        Alias exercitationem aut sint nobis delectus molestias harum quaerat aliquam, beatae soluta
                        autem
                        odit
                    </div>




                </div>

                <div class="cards flex flex-col md:flex-row md:space-x-2 md:space-y-0 space-y-6">
                    <div class="card">

                        <img src="dog.jpg" class="w-full" alt="">

                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Sample</div>
                            <p class="text-base">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis dolorum quibusdam enim
                                minus quaerat harum, pariatur eius reiciendis dignissimos voluptas provident excepturi
                                modi delectus, cumque quo dolor maxime quos beatae!
                            </p>


                        </div>

                    </div>
                    <div class="card">

                        <img src="dog.jpg" class="w-full" alt="">

                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Sample</div>
                            <p class="text-base">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Error quasi, soluta, itaque
                                aliquid perferendis fugit, asperiores ratione sed veniam ad sapiente aperiam numquam
                                commodi. Pariatur, odit! Blanditiis ipsum quibusdam placeat!
                            </p>


                        </div>

                    </div>

                </div>


                <div class="card">


                    <img src="dog.jpg" class="w-full" alt="">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Sample</div>
                        <p class="text-base">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Error quasi, soluta, itaque aliquid
                            perferendis fugit, asperiores ratione sed veniam ad sapiente aperiam numquam commodi.
                            Pariatur, odit! Blanditiis ipsum quibusdam placeat!
                        </p>

                    </div>

                </div>


            </div>

            <div class="flex-col ml-4 h-full hidden xl:flex ">
                <i class="fab fa-facebook-square fa-5x"></i>
                <i class="fab fa-instagram-square fa-5x"></i>
            </div>

        </div>

    </div>



    <script>
        BUTTON = document.querySelector('.btn');
        MENU = document.querySelector('.menu');

        BUTTON.addEventListener('click', () => {
            MENU.classList.toggle('active')
        });

        
    </script>


</body>

</html>