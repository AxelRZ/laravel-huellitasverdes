<footer class=" h-48 w-full border-t-2 border-gray-300 tex ">

    <div class="mx-auto h-full py-6 flex flex-wrap " style="max-width: 600px; min-width:200px;">

        <?php 

        $links = array("Facebook"=>"facebook.com","Instagram"=>"instagram.com","Twitter"=>"twitter.com"); 

        foreach ($links as $key => $value): ?> 
            
            <div class="my-0 px-2   text-xl  mx-auto w-full  lg:w-14 text-center" >
                <a href="https://<?php echo $value; ?>" target="_blank"><?php echo $key; ?></a>

            </div>

        <?php endforeach; ?>
        </div>
</footer>




    
