<?php
    require "../../data/get_data.php";
    require "same_copy_paste.php";
    echo "
        <script>
            alert('ajdbd');
         </script>";
    if(isset($_REQUEST["id"])){
        echo "sdkdnv".$_REQUEST["id"];
        dynamicQuery("
                select * 
                from event_details e,booking_detail b, user u 
                where e.eid=b.eid and e.uid=u.uid  and status='a'
                and b.event_date < CURRENT_DATE() and  u.uid=".$_REQUEST["id"].";
                "
        );
    }
?>