<?php
    require_once __DIR__ . "/../assets/configs.php";
    $key = array_search( $_SERVER["REQUEST_URI"], array_column($_PAGES, 'url') );

    $next_page = $prev_page = null;
    if( isset($_PAGES[ $key-1 ]) ) $prev_page = $_PAGES[ $key-1 ];
    if( isset($_PAGES[ $key+1 ]) ) $next_page = $_PAGES[ $key+1 ];

?>

<footer class='bg-white py-2 flex mx-1'>
    <div class="flex container row">

        <div class="col-6 flex align-start">           

            <?php if($prev_page != null ){ ?>
                <span class='text-grey-3'>Previous case</span>
                <a href="<?=$prev_page['url'];?>" class="mt-14 navigate-icon">
                    <div class="cnt-icon mr-1">
                        <img src="/rafael-maciel/assets/images/general/arrow-left.png">
                    </div>
                    <span class='argent-cf-light normal-title text-blue-9'>
                        <?=$prev_page['title'];?>
                    </span>
                </a>
            <? }else{ ?>
                <span class='text-grey-3 disable-icon-navigate'>Previous case</span>
                <a class="mt-14 navigate-icon disable-icon-navigate">
                    <div class="cnt-icon mr-1">
                        <img src="/rafael-maciel/assets/images/general/arrow-left.png">
                    </div>
                </a>            
            <? } ?>

        </div>

        <div class="col-6 flex align-end">
            <?php if($next_page != null ){ ?>
                <span class='text-grey-3'>Next Case</span>
                <a href="<?=$next_page['url'];?>" class="mt-14 navigate-icon">
                    <span class='argent-cf-light normal-title text-blue-9'>
                        <?=$next_page['title'];?>
                    </span>
                    <div class="cnt-icon ml-1">
                        <img src="/rafael-maciel/assets/images/general/arrow-right.png">
                    </div>
                </a>
            <? }else{ ?>
                <span class='text-grey-3 disable-icon-navigate'>Next Case</span>
                <a class="mt-14 navigate-icon disable-icon-navigate">
                    <div class="cnt-icon ml-1">
                        <img src="/rafael-maciel/assets/images/general/arrow-right.png">
                    </div>
                </a>          
            <? } ?>
        </div>    

    </div>
</footer>