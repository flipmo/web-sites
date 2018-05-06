<!-- banner on top of each page -->
<div id="banner_top">
	<img src="media/banner_cafe.png" atl="text"/>
</div>
<!-- middle content of each page -->
<div id="content" >
    <!-- height: 100%; margin-bottom: 1px; -->
    <!-- overflow: auto; height: 600px; width: 630px; overflow-y:scroll; -->
    <div id="content_left" style="height: 600px; overflow:auto;">
        <?php
            $html_buffer = '';
            $image_count = 0;
            $directory = './media/cafe/';
            if (glob($directory . "*.jpg") != false) {
                $image_count = count(glob($directory . "*.jpg"));
            }
            for ($i=1; $i <= $image_count; $i++) {
                $html_buffer .= '
                <img src="media/cafe/cafe_'.$i.'.jpg" alt="Alte Schule Gaertringen"/>';
            }
            echo $html_buffer;
        ?>
        <!--<img src="media/speisenkarte/speisenkarte_1.jpg" alt="Alte Schule Gaertringen"/>
        <img src="media/speisenkarte/speisenkarte_2.jpg" alt="Alte Schule Gaertringen"/>-->
    </div>
    
</div>
