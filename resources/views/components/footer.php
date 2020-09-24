<footer class=" w-full border-t-2 border-gray-300 bg-gradient-to-b from-gray-300  to-white  " style="position: static;">

    <div class="mx-auto h-full pt-6 flex flex-wrap px-2 text-huellitas_brown" style="max-width:48rem;" >

    <div class="my-4 px-2 text-center sm:text-left items-center text-md  mx-auto h-auto w-full  lg:w-14" >
                <p class="font-bold">Redes sociales <button class="f-social-btn sm:hidden" style="outline: none;"><i class="fas fa-arrow-circle-down transition-transform duration-200 ease"></i></button> </p>

            </div>



            <div class="f-social-nav hidden sm:block w-full">
        <?php 

        $links = array("Facebook"=>"facebook.com/HuellitasVerdesOficial","Instagram"=>"www.instagram.com/huellitasverdesoficial","Twitter"=>"twitter.com/huellitas_v?s=20"); 

        foreach ($links as $key => $value): ?> 
            
            <div class="my-2 px-2 sm:block text-center sm:text-left items-center text-md  mx-auto h-auto w-full  lg:w-14 " >
                <a href="https://<?php echo $value; ?>" target="_blank"><?php echo $key; ?></a>

            </div>

        <?php endforeach; ?>
        </div>
    </div>

    <div class=" my-4 text-center text-sm bg-auto" >

    Design © 2020 Huellitas Verdes
    </div>
        </footer>




    
