<?php
    $tpl_dir = get_template_directory_uri();
    $url = $tpl_dir.'/template-parts/events.json';
    $jsondata = file_get_contents($url);
    $data = json_decode($jsondata, true);
    $path = "/images/logo/";
    $start_year = 2018;
    $shift_event = 146;
?>
<div class="timeline">
<!--
    <div class="block">
        <div class="title"><?php echo $data["title"]?></div>
    </div>
    -->
    <div class="timeline__body-timeline">
        <div id="timeline-slider" class="timeline-slider">
            <?php
                $counter = 1;
                $x = 0;
                foreach($data["events"] as $value){
                    $num_year[] = $value["year"];
                    $num_icon[] = $value["icon"];
                    $x++;
                }
                $var_year = array_count_values($num_year);
                $var_icon = array_count_values($num_icon);
                $keys_year = array_keys($var_year);
                $keys_icon = array_keys($var_icon);
                $count_year = count($var_year);
                $count_icon = count($var_icon);
                $width_slider = "style='width: ". ($x + (1 * ($count_year + 1))) * $shift_event ."px;'";
                if($count_icon > 0) {
                    echo "<style>";
                    for($j = 0; $j < $count_icon; $j++) {
                        if($keys_icon[$j] != 'green') $file_icon = $tpl_dir . $path . $keys_icon[$j] .".svg";
                        //if(file_exists($file_icon)) echo ".timeline-slider__item-event_". $keys_icon[$j] .":after { background-image: url('". $file_icon ."'); }";
                        echo ".timeline-slider__item-event_". $keys_icon[$j] .":after { background-image: url('". $file_icon ."'); }\n";
                    }
                    echo "</style>";
                }
            ?>
            <div class="timeline-slider__list" id="slider-move" <?php echo $width_slider;?>>
            <?php
                foreach($var_year as $key => $value){
                    echo "<div class='timeline-slider__item timeline-slider__item_".$key."' style='width: ". $shift_event * ($value + 1) ."px'>";
                    foreach($data["events"] as $item){
                        if($item["year"] == $key){
                            $icon = "timeline-slider__item-event_". $item["icon"];
                            echo "<div class='timeline-slider__item-event timeline-slider__item-event_height-". $item["height"] ." ". $icon ."'";
                            echo " style='left: ". $shift_event * $counter ."px;'>";
                            echo "<div class='title-item'>";
                            if($item["title"] != "") echo "<div class='bold'>". $item["title"] ." </div>";
                            echo $item["desc"];
                            echo "</div>";
                            echo "</div>";
                            $counter++;
                        } else $counter = 1;
                    }
                    echo "</div>";
                }
            ?>
            </div>
        </div>
        <ul id="timeline__nav" class="timeline__nav">
            <?php
            for($i = 0; $i <= $count_year - 1; $i++){
                echo "<li id='". $i ."' class='timeline__nav-item";
                if($i == $count_year - 1) echo " active";
                echo "'>". $keys_year[$i] ."</li>";
            }
            ?>
        </ul>
    </div>
</div>
