<?php
if (!$is_descending) {
    if ($has_personal && $show_personal) {
        if (isset($currentmyitem) && $currentmyitem > 0) {
            $contenthumbnailoriginal = 'listhumbnailoriginalon';
            $contenthumbnailcreated = 'listhumbnailcreatedoff';
            $navUrl = create_item_link_string($content['contentid'], $item[$myindex[$currentmyitem - 1]]["itemid"], $contentkey);
            ?>
            <nav role="navigation">
                <a href=<?php echo create_item_link_string($content['contentid'], $item[$myindex[$currentmyitem - 1]]["itemid"], $contentkey); ?>>
                    <div class="previousitemcontainer">
                        <div class="prevmediumholdercustomedge"></div>
                        <div class="previousitemtext">Previous item</div>
                        <div class="mediumitemrank">#<?php echo $currentmyitem; ?></div>
                        <img class="listitemimageforleftarraow <?php echo $contenthumbnailoriginal; ?>" alt="Nav thumbnail image" src="<?php echo $item[$myindex[$currentmyitem - 1]]["thumbnaillarge".$item[$myindex[$currentmyitem - 1]]['contentthumbnail']."src"]; ?>">
                        <?php if ($content["thumbnaillarge"] === '') { ?>
                            <div class='listitemimageforleftarraowdiv <?php echo $contenthumbnailcreated; ?>'>
                                <?php
                                if (count($contentnavimage) >= 4) {
                                    $img1 = $contentnavimage[0];
                                    $img2 = $contentnavimage[1];
                                    $img3 = $contentnavimage[2];
                                    $img4 = $contentnavimage[3]; ?>
                                    <div class='introimagetoprow'>
                                        <img class='introlistlongimageleft1' alt='contents feed list image 1' src='<?php echo $img1; ?>' height='50' width='50'>
                                        <img class='introlistlongimageleft2' alt='contents feed list image 2' src='<?php echo $img2; ?>' height='50' width='50'>
                                    </div>
                                    <div class='introimagebottomrow'>
                                        <img class='introlistlongimageright1' alt='contents feed list image 3' src='<?php echo $img3; ?>' height='50' width='50'>
                                        <img class='introlistlongimageright2' alt='contents feed list image 4' src='<?php echo $img4; ?>' height='50' width='50'>
                                    </div>

                                <?php }
                                elseif (count($contentnavimage) === 3) {
                                    $img1 = $contentnavimage[0];
                                    $img2 = $contentnavimage[1];
                                    $img3 = $contentnavimage[2]; ?>
                                    <div class='introimagelong'>
                                        <img class='introlistlongimageleft' alt='contents feed list image 1' src='<?php echo $img1; ?>' height='100' width='50'>
                                    </div>

                                    <div class='introimagerightrow'>
                                        <img class='introlistlongimageright1' alt='contents feed list image 2' src='<?php echo $img2; ?>' height='50' width='50'>
                                        <img class='introlistlongimageright2' alt='contents feed list image 3' src='<?php echo $img3; ?>' height='50' width='50'>
                                    </div>
                                <?php }
                                elseif (count($contentnavimage) === 2) {
                                    $img1 = $contentnavimage[0];
                                    $img2 = $contentnavimage[1];
                                    ?>
                                    <div class='introimagelong'>
                                        <img class='introlistlongimageleft' alt='contents feed list image 1' src='<?php echo $img1; ?>' height='100' width='50'>
                                    </div>
                                    <div class='introimagelongright'>
                                        <img class='introlistlongimageright' alt='contents feed list image 1' src='<?php echo $img2; ?>' height='100' width='50'>
                                    </div>
                                <?php }
                                else {
                                    ?>
                                    <div class='introfallbackimage'> <img class='listsfallbackimage' alt='contents feed list fallback image' src='<?php echo $GLOBALS['cdn_domain_return'].'images/contentimagethumbnaillarge/fallbackimage.jpg';?>' height='100' width='100'></div>
                                <?php } ?>
                            </div>
                        <?php } ?>

                    </div>
                </a>
            </nav>
            <?php
            $previousstate = 1;
        }else if (isset($currentmyitem) && $currentmyitem !== NULL) {
            $previousstate = 1;
            $navUrl = create_list_link_string($content['contentid'], $content['contentkey']);
            ?>
            <nav role="navigation">
                <a href=<?php echo $navUrl; ?>>
                    <div class="previousitemcontainer">
                        <div class="prevmediumholdercustomedge"></div>
                        <div class="previousitemtext">Introduction</div>
                        <div class="mediumitemrank"><?php echo 'Intro'; ?></div>
                        <?php if ($content["thumbnaillarge"] != '') {
                            $contenthumbnailoriginal = 'listhumbnailoriginalon';
                            $contenthumbnailcreated = 'listhumbnailcreatedoff';
                            ?>
                            <img class="listitemimageforleftarraow <?php echo $contenthumbnailoriginal; ?>" alt="Nav thumbnail image" src="<?php echo $content["thumbnaillargesrc"]; ?>">
                            <?php
                        } else {
                            $contenthumbnailoriginal = 'listhumbnailoriginaloff';
                            $contenthumbnailcreated = 'listhumbnailcreatedon';
                            ?>
                            <img class="listitemimageforleftarraow <?php echo $contenthumbnailoriginal; ?>" alt="Nav thumbnail image" src="<?php echo $content["thumbnaillargesrc"]; ?>">

                            <div class='listitemimageforleftarraowdiv <?php echo $contenthumbnailcreated; ?>'>
                                <?php
                                if (count($contentnavimage) >= 4) {
                                    $img1 = $contentnavimage[0];
                                    $img2 = $contentnavimage[1];
                                    $img3 = $contentnavimage[2];
                                    $img4 = $contentnavimage[3]; ?>
                                    <div class='introimagetoprow'>
                                        <img class='introlistlongimageleft1' alt='contents feed list image 1' src='<?php echo $img1; ?>' height='50' width='50'>
                                        <img class='introlistlongimageleft2' alt='contents feed list image 2' src='<?php echo $img2; ?>' height='50' width='50'>
                                    </div>
                                    <div class='introimagebottomrow'>
                                        <img class='introlistlongimageright1' alt='contents feed list image 3' src='<?php echo $img3; ?>' height='50' width='50'>
                                        <img class='introlistlongimageright2' alt='contents feed list image 4' src='<?php echo $img4; ?>' height='50' width='50'>
                                    </div>

                                <?php }
                                elseif (count($contentnavimage) === 3) {
                                    $img1 = $contentnavimage[0];
                                    $img2 = $contentnavimage[1];
                                    $img3 = $contentnavimage[2]; ?>
                                    <div class='introimagelong'>
                                        <img class='introlistlongimageleft' alt='contents feed list image 1' src='<?php echo $img1; ?>' height='100' width='50'>
                                    </div>

                                    <div class='introimagerightrow'>
                                        <img class='introlistlongimageright1' alt='contents feed list image 2' src='<?php echo $img2; ?>' height='50' width='50'>
                                        <img class='introlistlongimageright2' alt='contents feed list image 3' src='<?php echo $img3; ?>' height='50' width='50'>
                                    </div>
                                <?php }
                                elseif (count($contentnavimage) === 2) {
                                    $img1 = $contentnavimage[0];
                                    $img2 = $contentnavimage[1];
                                    ?>
                                    <div class='introimagelong'>
                                        <img class='introlistlongimageleft' alt='contents feed list image 1' src='<?php echo $img1; ?>' height='100' width='50'>
                                    </div>
                                    <div class='introimagelongright'>
                                        <img class='introlistlongimageright' alt='contents feed list image 1' src='<?php echo $img2; ?>' height='100' width='50'>
                                    </div>
                                <?php }
                                else {
                                    ?>
                                    <div class='introfallbackimage'> <img class='listsfallbackimage' alt='contents feed list fallback image' src='<?php echo $GLOBALS['cdn_domain_return'].'images/contentimagethumbnaillarge/fallbackimage.jpg';?>' height='100' width='100'></div>
                                <?php } ?>
                            </div>
                            <?php
                        } ?>


                    </div>

                </a>
            </nav>
            <?php
        }
        if (!empty($currentmyitem) && $currentmyitem < $count - 1) {
            $nextstate = 1;
        }
        if(!isset($currentmyitem)){
            $currentmyitem = -1;
            $nextstate = 0;
        }
        if (isset($currentmyitem) && $currentmyitem === NULL) {
            $theitemindex = $currentmyitem + 0;
        }
        else {
            $theitemindex = $currentmyitem + 1;
        }
        ?>
        <nav role="navigation">
            <a href=<?php echo create_item_link_string($content['contentid'], $item[$myindex[$theitemindex]]["itemid"], $contentkey); ?>>
                <div class="nextitemcontainer">
                    <div class="nextmediumholdercustomedge"></div>
                    <div class="nextitemtext">Next item</div>
                    <div class="mediumitemranknext">#<?php echo $theitemindex + 1; ?></div>
                    <img class="listitemimageforrightarraow" alt="Nav thumbnail image" src="<?php if(!empty($item[$myindex[$theitemindex]]["thumbnaillarge".$item[$myindex[$theitemindex]]['contentthumbnail']."src"])){ echo $item[$myindex[$theitemindex]]["thumbnaillarge".$item[$myindex[$theitemindex]]['contentthumbnail']."src"];} ?>">

                </div>
            </a>
        </nav>
        <?php
    }
    else {
        if ($currentitem > 0) {

            $previousstate = 1;

            $contenthumbnailoriginal = 'listhumbnailoriginalon';
            $contenthumbnailcreated = 'listhumbnailcreatedoff';

            ?>

            <nav role="navigation">
                <a href=<?php echo create_item_link_string($content['contentid'], $item[$currentitem - 1]["itemid"], $contentkey); ?>>
                    <div class="previousitemcontainer">

                        <div class="prevmediumholdercustomedge"></div>

                        <div class="previousitemtext">Previous item</div>

                        <div class="mediumitemrank">#<?php echo $currentitem; ?></div>
                        <img class="listitemimageforleftarraow <?php echo $contenthumbnailoriginal ?>" alt="Nav thumbnail image" src="<?php echo $item[$currentitem - 1]["thumbnaillarge".$item[$currentitem - 1]['contentthumbnail']."src"]; ?>">

                        <?php if ($content["thumbnaillarge"] === '') { ?>
                            <div class='listitemimageforleftarraowdiv <?php echo $contenthumbnailcreated ?>'>
                                <?php
                                if (count($contentnavimage) === 0) {
                                    ?>
                                    <div class='introfallbackimage'>
                                        <img class='listsfallbackimage' alt='contents feed list fallback image' src='<?php echo $GLOBALS['cdn_domain_return'].'images/contentimagethumbnaillarge/fallbackimage.jpg';?>' height='100' width='100'>
                                    </div>
                                <?php }
                                elseif (count($contentnavimage) >= 4) {
                                    $img1 = $contentnavimage[0];
                                    $img2 = $contentnavimage[1];
                                    $img3 = $contentnavimage[2];
                                    $img4 = $contentnavimage[3]; ?>
                                    <div class='introimagetoprow'>
                                        <img class='introlistlongimageleft1' alt='contents feed list image 1' src='<?php echo $img1; ?>' height='50' width='50'>
                                        <img class='introlistlongimageleft2' alt='contents feed list image 2' src='<?php echo $img2; ?>' height='50' width='50'>
                                    </div>
                                    <div class='introimagebottomrow'>
                                        <img class='introlistlongimageright1' alt='contents feed list image 3' src='<?php echo $img3; ?>' height='50' width='50'>
                                        <img class='introlistlongimageright2' alt='contents feed list image 4' src='<?php echo $img4; ?>' height='50' width='50'>

                                    </div>

                                <?php }
                                elseif (count($contentnavimage) === 3) {

                                    $img1 = $contentnavimage[0];

                                    $img2 = $contentnavimage[1];

                                    $img3 = $contentnavimage[2]; ?>

                                    <div class='introimagelong'>
                                        <img class='introlistlongimageleft' alt='contents feed list image 1' src='<?php echo $img1; ?>' height='100' width='50'>

                                    </div>

                                    <div class='introimagerightrow'>

                                        <img class='introlistlongimageright1' alt='contents feed list image 2' src='<?php echo $img2; ?>' height='50' width='50'>

                                        <img class='introlistlongimageright2' alt='contents feed list image 3' src='<?php echo $img3; ?>' height='50' width='50'>

                                    </div>

                                <?php }
                                elseif (count($contentnavimage) === 2) {

                                    $img1 = $contentnavimage[0];

                                    $img2 = $contentnavimage[1];

                                    ?>

                                    <div class='introimagelong'>

                                        <img class='introlistlongimageleft' alt='contents feed list image 1' src='<?php echo $img1; ?>' height='100' width='50'>

                                    </div>

                                    <div class='introimagelongright'>

                                        <img class='introlistlongimageright' alt='contents feed list image 1' src='<?php echo $img2; ?>' height='100' width='50'>

                                    </div>

                                <?php }
                                else {
                                    ?>
                                    <div class='introfallbackimage'> <img class='listsfallbackimage' alt='contents feed list fallback image' src='<?php echo $GLOBALS['cdn_domain_return'].'images/contentimagethumbnaillarge/fallbackimage.jpg';?>' height='100' width='100'></div>

                                <?php } ?>

                            </div>
                        <?php } ?>

                    </div>
                </a>
            </nav>


            <?php

        }
        else if ($currentitem === 0) {

            $previousstate = 1;

            ?>

            <nav role="navigation">
                <a href=<?php echo create_list_link_string($content['contentid'], $contentkey); ?>>

                    <div class="previousitemcontainer">

                        <div class="prevmediumholdercustomedge"></div>

                        <div class="previousitemtext">Introduction</div>

                        <div class="mediumitemrank">Intro</div>

                        <?php
                        if ($content['thumbnaillarge'] != '') {
                            $contenthumbnailoriginal = 'listhumbnailoriginalon';
                            $contenthumbnailcreated = 'listhumbnailcreatedoff';
                            ?>
                            <img class="listitemimageforleftarraow <?php echo $contenthumbnailoriginal; ?>" alt="Nav thumbnail image" src="<?php echo $content['thumbnaillargesrc']; ?>">
                            <?php
                        }
                        else {
                            $contenthumbnailoriginal = 'listhumbnailoriginaloff';
                            $contenthumbnailcreated = 'listhumbnailcreatedon';
                            ?>
                            <img class="listitemimageforleftarraow <?php echo $contenthumbnailoriginal; ?>" alt="Nav thumbnail image" src="<?php echo $content['thumbnaillargesrc']; ?>">

                            <div class='listitemimageforleftarraowdiv <?php echo $contenthumbnailcreated; ?>'>
                                <?php
                                if (count($contentnavimage) === 0) {
                                    ?>
                                    <div class='introfallbackimage'>
                                        <img class='listsfallbackimage' alt='contents feed list fallback image' src='<?php echo $GLOBALS['cdn_domain_return'].'images/contentimagethumbnaillarge/fallbackimage.jpg';?>' height='100' width='100'>
                                    </div>
                                <?php }
                                elseif (count($contentnavimage) >= 4) {
                                    $img1 = $contentnavimage[0];
                                    $img2 = $contentnavimage[1];
                                    $img3 = $contentnavimage[2];
                                    $img4 = $contentnavimage[3]; ?>
                                    <div class='introimagetoprow'>
                                        <img class='introlistlongimageleft1' alt='contents feed list image 1' src='<?php echo $img1; ?>' height='50' width='50'>
                                        <img class='introlistlongimageleft2' alt='contents feed list image 2' src='<?php echo $img2; ?>' height='50' width='50'>
                                    </div>
                                    <div class='introimagebottomrow'>
                                        <img class='introlistlongimageright1' alt='contents feed list image 3' src='<?php echo $img3; ?>' height='50' width='50'>
                                        <img class='introlistlongimageright2' alt='contents feed list image 4' src='<?php echo $img4; ?>' height='50' width='50'>

                                    </div>

                                <?php }
                                elseif (count($contentnavimage) === 3) {

                                    $img1 = $contentnavimage[0];

                                    $img2 = $contentnavimage[1];

                                    $img3 = $contentnavimage[2]; ?>

                                    <div class='introimagelong'>
                                        <img class='introlistlongimageleft' alt='contents feed list image 1' src='<?php echo $img1; ?>' height='100' width='50'>

                                    </div>

                                    <div class='introimagerightrow'>

                                        <img class='introlistlongimageright1' alt='contents feed list image 2' src='<?php echo $img2; ?>' height='50' width='50'>

                                        <img class='introlistlongimageright2' alt='contents feed list image 3' src='<?php echo $img3; ?>' height='50' width='50'>

                                    </div>

                                <?php }
                                elseif (count($contentnavimage) === 2) {

                                    $img1 = $contentnavimage[0];

                                    $img2 = $contentnavimage[1];

                                    ?>

                                    <div class='introimagelong'>

                                        <img class='introlistlongimageleft' alt='contents feed list image 1' src='<?php echo $img1; ?>' height='100' width='50'>

                                    </div>

                                    <div class='introimagelongright'>

                                        <img class='introlistlongimageright' alt='contents feed list image 1' src='<?php echo $img2; ?>' height='100' width='50'>

                                    </div>

                                <?php }
                                else {
                                    ?>
                                    <div class='introfallbackimage'> <img class='listsfallbackimage' alt='contents feed list fallback image' src='<?php echo $GLOBALS['cdn_domain_return'].'images/contentimagethumbnaillarge/fallbackimage.jpg';?>' height='100' width='100'></div>

                                <?php } ?>

                            </div>

                            <?php
                        }
                        ?>





                    </div>
                </a>
            </nav>


            <?php

        }
        if ($currentitem < $count - 1) {

            $nextstate = 1;
        }
        ?>
        <nav role="navigation">
            <a href=<?php echo create_item_link_string($content['contentid'], $item[$currentitem + 1]["itemid"], $contentkey); ?>>

                <div class="nextitemcontainer">

                    <div class="nextmediumholdercustomedge"></div>

                    <div class="nextitemtext">Next item</div>

                    <div class="mediumitemranknext">#<?php echo $currentitem + 2; ?></div>
                    <img class="listitemimageforrightarraow" alt="Nav thumbnail image" src="<?php echo $item[$currentitem + 1]["thumbnaillarge".$item[$currentitem + 1]['contentthumbnail']."src"]; ?>">

                </div>
            </a>
        </nav>
        <?php
    }
}
else {
    if ($has_personal && $show_personal) {

        if ($currentmyitem < $count - 1) {
            ?>
            <?php
            if ($currentmyitem === NULL) {

                $nextstate = 1; ?>

                <nav role="navigation">
                    <a href=<?php echo create_item_link_string($content['contentid'], $item[$myindex[$currentmyitem + $count - 1]]["itemid"], $contentkey); ?>>

                        <div class="nextitemcontainer">

                            <div class="nextmediumholdercustomedge"></div>

                            <div class="nextitemtext">Next item</div>

                            <div class="mediumitemranknext">#<?php echo $currentmyitem + $count; ?></div>

                            <img class="listitemimageforrightarraow" alt="Nav thumbnail image" src="<?php echo $item[$myindex[$currentmyitem + $count - 1]]["thumbnaillarge".$item[$myindex[$currentmyitem + $count - 1]]['contentthumbnail']."src"]; ?>">




                        </div>
                    </a>
                </nav>


            <?php }
            else {
                $contenthumbnailoriginal = 'listhumbnailoriginalon';
                $contenthumbnailcreated = 'listhumbnailcreatedoff';
                $previousstate = 1; ?>
                <nav role="navigation">
                    <a href=<?php echo create_item_link_string($content['contentid'], $item[$myindex[$currentmyitem + 1]]["itemid"], $contentkey); ?>>

                        <div class="previousitemcontainer">
                            <div class="prevmediumholdercustomedge"></div>
                            <div class="previousitemtext">Previous item</div>
                            <div class="mediumitemrank">#<?php echo $currentmyitem + 2; ?></div>
                            <img class="listitemimageforleftarraow <?php echo $contenthumbnailoriginal ?>" alt="Nav thumbnail image" src="<?php echo $item[$myindex[$currentmyitem + 1]]["thumbnaillarge".$item[$myindex[$currentmyitem + 1]]['contentthumbnail']."src"]; ?>">
                            <?php if ($content["thumbnaillarge"] === '') { ?>
                                <div class='listitemimageforleftarraowdiv <?php echo $contenthumbnailcreated ?>'>
                                    <?php
                                    if (count($contentnavimage) === 0) {
                                        ?>
                                        <div class='introfallbackimage'>
                                            <img class='listsfallbackimage' alt='contents feed list fallback image' src='<?php echo $GLOBALS['cdn_domain_return'].'images/contentimagethumbnaillarge/fallbackimage.jpg';?>' height='100' width='100'>
                                        </div>
                                    <?php } elseif (count($contentnavimage) >= 4) {
                                        $img1 = $contentnavimage[0];
                                        $img2 = $contentnavimage[1];
                                        $img3 = $contentnavimage[2];
                                        $img4 = $contentnavimage[3]; ?>
                                        <div class='introimagetoprow'>
                                            <img class='introlistlongimageleft1' alt='contents feed list image 1' src='<?php echo $img1; ?>' height='50' width='50'>
                                            <img class='introlistlongimageleft2' alt='contents feed list image 2' src='<?php echo $img2; ?>' height='50' width='50'>
                                        </div>
                                        <div class='introimagebottomrow'>
                                            <img class='introlistlongimageright1' alt='contents feed list image 3' src='<?php echo $img3; ?>' height='50' width='50'>
                                            <img class='introlistlongimageright2' alt='contents feed list image 4' src='<?php echo $img4; ?>' height='50' width='50'>
                                        </div>
                                    <?php } elseif (count($contentnavimage) === 3) {
                                        $img1 = $contentnavimage[0];
                                        $img2 = $contentnavimage[1];
                                        $img3 = $contentnavimage[2]; ?>
                                        <div class='introimagelong'>
                                            <img class='introlistlongimageleft' alt='contents feed list image 1' src='<?php echo $img1; ?>' height='100' width='50'>
                                        </div>

                                        <div class='introimagerightrow'>

                                            <img class='introlistlongimageright1' alt='contents feed list image 2' src='<?php echo $img2; ?>' height='50' width='50'>

                                            <img class='introlistlongimageright2' alt='contents feed list image 3' src='<?php echo $img3; ?>' height='50' width='50'>

                                        </div>

                                    <?php } elseif (count($contentnavimage) === 2) {

                                        $img1 = $contentnavimage[0];

                                        $img2 = $contentnavimage[1];

                                        ?>

                                        <div class='introimagelong'>

                                            <img class='introlistlongimageleft' alt='contents feed list image 1' src='<?php echo $img1; ?>' height='100' width='50'>

                                        </div>

                                        <div class='introimagelongright'>

                                            <img class='introlistlongimageright' alt='contents feed list image 1' src='<?php echo $img2; ?>' height='100' width='50'>

                                        </div>

                                    <?php } else {
                                        ?>
                                        <div class='introfallbackimage'> <img class='listsfallbackimage' alt='contents feed list fallback image' src='<?php echo $GLOBALS['cdn_domain_return'].'images/contentimagethumbnaillarge/fallbackimage.jpg';?>' height='100' width='100'></div>

                                    <?php } ?>

                                </div>
                            <?php } ?>

                        </div>
                    </a>
                </nav>
                <?php
            }
        }
        else if ($currentmyitem === $count - 1) {
            $previousstate = 1; ?>
            <nav role="navigation">
                <a href=<?php echo create_item_link_string($content['contentid'], $contentkey); ?>>

                    <div class="previousitemcontainer">
                        <div class="prevmediumholdercustomedge"></div>
                        <div class="previousitemtext">Introduction</div>
                        <div class="mediumitemrank">Intro</div>
                        <?php if ($content["thumbmaillarge"] != '') {
                            $contenthumbnailoriginal = 'listhumbnailoriginalon';
                            $contenthumbnailcreated = 'listhumbnailcreatedoff';
                            ?>
                            <img class="listitemimageforleftarraow <?php echo $contenthumbnailoriginal ?>" alt="Nav thumbnail image" src="<?php echo $content["thumbnaillargesrc"]; ?>">
                            <?php
                        } else {
                            $contenthumbnailoriginal = 'listhumbnailoriginaloff';
                            $contenthumbnailcreated = 'listhumbnailcreatedon';
                            ?>
                            <img class="listitemimageforleftarraow <?php echo $contenthumbnailoriginal ?>" alt="Nav thumbnail image" src="<?php echo $content["thumbnaillargesrc"]; ?>">
                            <div class='listitemimageforleftarraowdiv <?php echo $contenthumbnailcreated ?>'>
                                <?php
                                if (count($contentnavimage) === 0) {
                                    ?>
                                    <div class='introfallbackimage'>
                                        <img class='listsfallbackimage' alt='contents feed list fallback image' src='<?php echo $GLOBALS['cdn_domain_return'].'images/contentimagethumbnaillarge/fallbackimage.jpg';?>' height='100' width='100'>
                                    </div>
                                <?php } elseif (count($contentnavimage) >= 4) {
                                    $img1 = $contentnavimage[0];
                                    $img2 = $contentnavimage[1];
                                    $img3 = $contentnavimage[2];
                                    $img4 = $contentnavimage[3]; ?>
                                    <div class='introimagetoprow'>
                                        <img class='introlistlongimageleft1' alt='contents feed list image 1' src='<?php echo $img1; ?>' height='50' width='50'>
                                        <img class='introlistlongimageleft2' alt='contents feed list image 2' src='<?php echo $img2; ?>' height='50' width='50'>
                                    </div>
                                    <div class='introimagebottomrow'>
                                        <img class='introlistlongimageright1' alt='contents feed list image 3' src='<?php echo $img3; ?>' height='50' width='50'>
                                        <img class='introlistlongimageright2' alt='contents feed list image 4' src='<?php echo $img4; ?>' height='50' width='50'>
                                    </div>
                                <?php } elseif (count($contentnavimage) === 3) {
                                    $img1 = $contentnavimage[0];
                                    $img2 = $contentnavimage[1];
                                    $img3 = $contentnavimage[2]; ?>
                                    <div class='introimagelong'>
                                        <img class='introlistlongimageleft' alt='contents feed list image 1' src='<?php echo $img1; ?>' height='100' width='50'>
                                    </div>

                                    <div class='introimagerightrow'>

                                        <img class='introlistlongimageright1' alt='contents feed list image 2' src='<?php echo $img2; ?>' height='50' width='50'>

                                        <img class='introlistlongimageright2' alt='contents feed list image 3' src='<?php echo $img3; ?>' height='50' width='50'>

                                    </div>

                                <?php } elseif (count($contentnavimage) === 2) {

                                    $img1 = $contentnavimage[0];

                                    $img2 = $contentnavimage[1];

                                    ?>

                                    <div class='introimagelong'>

                                        <img class='introlistlongimageleft' alt='contents feed list image 1' src='<?php echo $img1; ?>' height='100' width='50'>

                                    </div>

                                    <div class='introimagelongright'>

                                        <img class='introlistlongimageright' alt='contents feed list image 1' src='<?php echo $img2; ?>' height='100' width='50'>

                                    </div>

                                <?php } else {
                                    ?>
                                    <div class='introfallbackimage'> <img class='listsfallbackimage' alt='contents feed list fallback image' src='<?php echo $GLOBALS['cdn_domain_return'].'images/contentimagethumbnaillarge/fallbackimage.jpg';?>' height='100' width='100'></div>

                                <?php } ?>

                            </div>
                            <?php
                        } ?>


                    </div>
                </a>
            </nav>
            <?php
        }
        if ($currentmyitem > 0) {

            $nextstate = 1; ?>

            <nav role="navigation">
                <a href=<?php echo create_item_link_string($content['contentid'], $item[$myindex[$currentmyitem - 1]]["itemid"], $contentkey); ?>>

                    <div class="nextitemcontainer">

                        <div class="nextmediumholdercustomedge"></div>

                        <div class="nextitemtext">Next item</div>

                        <div class="mediumitemranknext">#<?php echo $currentmyitem; ?></div>

                        <img class="listitemimageforrightarraow" alt="Nav thumbnail image"
                             src="<?php echo $item[$myindex[$currentmyitem - 1]]["thumbnaillarge".$item[$myindex[$currentmyitem - 1]]['contentthumbnail']."src"]; ?>">


                    </div>
                </a>
            </nav>

            <?php

        }
    }
    else {
        if ($currentitem < $count - 1) {

            ?>

            <?php if ($currentitem === -1) {

                $nextstate = 1; ?>

                <nav role="navigation">
                    <a href=<?php echo create_item_link_string($content['contentid'], $item[$count - 1]["itemid"], $contentkey); ?>>

                        <div class="nextitemcontainer">

                            <div class="nextmediumholdercustomedge"></div>

                            <div class="nextitemtext">Next item</div>

                            <div class="mediumitemranknext">#<?php $count; ?></div>

                            <img class="listitemimageforrightarraow" alt="Nav thumbnail image" src="<?php echo $item[$count - 1]["thumbnaillarge".$item[$count - 1]['contentthumbnail']."src"]; ?>">




                        </div>
                    </a>
                </nav>

            <?php }
            else {

                $contenthumbnailoriginal = 'listhumbnailoriginalon';
                $contenthumbnailcreated = 'listhumbnailcreatedoff';

                $previousstate = 1; ?>
                <nav role="navigation">
                    <a href=<?php echo create_item_link_string($content['contentid'], $item[$currentitem + 1]["itemid"], $contentkey); ?>>

                        <div class="previousitemcontainer">
                            <div class="prevmediumholdercustomedge"></div>
                            <div class="previousitemtext">Previous item</div>
                            <div class="mediumitemrank"><?php echo $currentitem + 2; ?></div>
                            <img class="listitemimageforleftarraow <?php echo $contenthumbnailoriginal; ?>" alt="Nav thumbnail image" src="<?php echo $item[$currentitem + 1]["thumbnaillarge".$item[$currentitem + 1]['contentthumbnail']."src"]; ?>">
                            <?php if ($content["thumbnaillarge"] === '') { ?>
                                <div class='listitemimageforleftarraowdiv <?php echo $contenthumbnailcreated; ?>'>
                                    <?php
                                    if (count($contentnavimage) === 0) {
                                        ?>
                                        <div class='introfallbackimage'>
                                            <img class='listsfallbackimage' alt='contents feed list fallback image' src='<?php echo $GLOBALS['cdn_domain_return'].'images/contentimagethumbnaillarge/fallbackimage.jpg';?>' height='100' width='100'>
                                        </div>

                                    <?php } elseif (count($contentnavimage) >= 4) {

                                        $img1 = $contentnavimage[0];
                                        $img2 = $contentnavimage[1];
                                        $img3 = $contentnavimage[2];
                                        $img4 = $contentnavimage[3]; ?>
                                        <div class='introimagetoprow'>
                                            <img class='introlistlongimageleft1' alt='contents feed list image 1' src='<?php echo $img1; ?>' height='50' width='50'><img class='introlistlongimageleft2' alt='contents feed list image 2' src='<?php echo $img2; ?>' height='50' width='50'>
                                        </div>
                                        <div class='introimagebottomrow'><img class='introlistlongimageright1' alt='contents feed list image 3' src='<?php echo $img3; ?>' height='50' width='50'><img class='introlistlongimageright2' alt='contents feed list image 4' src='<?php echo $img4; ?>' height='50' width='50'>

                                        </div>

                                    <?php } elseif (count($contentnavimage) === 3) {

                                        $img1 = $contentnavimage[0];

                                        $img2 = $contentnavimage[1];

                                        $img3 = $contentnavimage[2]; ?>

                                        <div class='introimagelong'>

                                            <img class='introlistlongimageleft'

                                                 alt='contents feed list image 1'

                                                 src='<?php echo $img1; ?>'

                                                 height='100' width='50'>

                                        </div>

                                        <div class='introimagerightrow'>

                                            <img class='introlistlongimageright1'

                                                 alt='contents feed list image 2'

                                                 src='<?php echo $img2; ?>'

                                                 height='50' width='50'>

                                            <img class='introlistlongimageright2'

                                                 alt='contents feed list image 3'

                                                 src='<?php echo $img3; ?>'

                                                 height='50' width='50'>

                                        </div>

                                    <?php } elseif (count($contentnavimage) === 2) {

                                        $img1 = $contentnavimage[0];

                                        $img2 = $contentnavimage[1];

                                        ?>

                                        <div class='introimagelong'>

                                            <img class='introlistlongimageleft'

                                                 alt='contents feed list image 1'

                                                 src='<?php echo $img1; ?>'

                                                 height='100' width='50'>

                                        </div>

                                        <div class='introimagelongright'>

                                            <img class='introlistlongimageright'

                                                 alt='contents feed list image 1'

                                                 src='<?php echo $img2; ?>'

                                                 height='100' width='50'>

                                        </div>

                                    <?php } else {
                                        ?>
                                        <div class='introfallbackimage'> <img class='listsfallbackimage' alt='contents feed list fallback image' src='<?php echo $GLOBALS['cdn_domain_return'].'images/contentimagethumbnaillarge/fallbackimage.jpg';?>' height='100' width='100'></div>
                                    <?php } ?>
                                </div>
                            <?php } ?>


                        </div>
                    </a>
                </nav>

            <?php } ?>

            <?php

        }
        else if ($currentitem === $count - 1) {

            $previousstate = 1; ?>

            <nav role="navigation">
                <a href=<?php echo create_item_link_string($content['contentid'],$item[$count - 1]["itemid"], $contentkey); ?>>

                    <div class="previousitemcontainer">

                        <div class="prevmediumholdercustomedge"></div>

                        <div class="previousitemtext">Introduction</div>

                        <div class="mediumitemrank">Intro</div>

                        <?php if ($content["thumbnaillarge"] != '') {
                            $contenthumbnailoriginal = 'listhumbnailoriginalon';
                            $contenthumbnailcreated = 'listhumbnailcreatedoff';
                            ?>
                            <img class="listitemimageforleftarraow <?php echo $contenthumbnailoriginal; ?>" alt="Nav thumbnail image" src="<?php echo $content["thumbnaillargesrc"]; ?>">
                            <?php
                        } else {
                            $contenthumbnailoriginal = 'listhumbnailoriginaloff';
                            $contenthumbnailcreated = 'listhumbnailcreatedon';
                            ?>
                            <img class="listitemimageforleftarraow <?php echo $contenthumbnailoriginal; ?>" alt="Nav thumbnail image" src="<?php echo $content["thumbnaillargesrc"]; ?>">
                            <div class='listitemimageforleftarraowdiv <?php echo $contenthumbnailcreated; ?>'>
                                <?php
                                if (count($contentnavimage) === 0) {
                                    ?>
                                    <div class='introfallbackimage'>
                                        <img class='listsfallbackimage' alt='contents feed list fallback image' src='<?php echo $GLOBALS['cdn_domain_return'].'images/contentimagethumbnaillarge/fallbackimage.jpg';?>' height='100' width='100'>
                                    </div>

                                <?php } elseif (count($contentnavimage) >= 4) {

                                    $img1 = $contentnavimage[0];
                                    $img2 = $contentnavimage[1];
                                    $img3 = $contentnavimage[2];
                                    $img4 = $contentnavimage[3]; ?>
                                    <div class='introimagetoprow'>
                                        <img class='introlistlongimageleft1' alt='contents feed list image 1' src='<?php echo $img1; ?>' height='50' width='50'>
                                        <img class='introlistlongimageleft2' alt='contents feed list image 2' src='<?php echo $img2; ?>' height='50' width='50'>
                                    </div>
                                    <div class='introimagebottomrow'>
                                        <img class='introlistlongimageright1' alt='contents feed list image 3' src='<?php echo $img3; ?>' height='50' width='50'>
                                        <img class='introlistlongimageright2' alt='contents feed list image 4' src='<?php echo $img4; ?>' height='50' width='50'>

                                    </div>

                                <?php } elseif (count($contentnavimage) === 3) {

                                    $img1 = $contentnavimage[0];

                                    $img2 = $contentnavimage[1];

                                    $img3 = $contentnavimage[2]; ?>

                                    <div class='introimagelong'>

                                        <img class='introlistlongimageleft'

                                             alt='contents feed list image 1'

                                             src='<?php echo $img1; ?>'

                                             height='100' width='50'>

                                    </div>

                                    <div class='introimagerightrow'>

                                        <img class='introlistlongimageright1'

                                             alt='contents feed list image 2'

                                             src='<?php echo $img2; ?>'

                                             height='50' width='50'>

                                        <img class='introlistlongimageright2'

                                             alt='contents feed list image 3'

                                             src='<?php echo $img3; ?>'

                                             height='50' width='50'>

                                    </div>

                                <?php } elseif (count($contentnavimage) === 2) {

                                    $img1 = $contentnavimage[0];

                                    $img2 = $contentnavimage[1];

                                    ?>

                                    <div class='introimagelong'>

                                        <img class='introlistlongimageleft'

                                             alt='contents feed list image 1'

                                             src='<?php echo $img1; ?>'

                                             height='100' width='50'>

                                    </div>

                                    <div class='introimagelongright'>

                                        <img class='introlistlongimageright'

                                             alt='contents feed list image 1'

                                             src='<?php echo $img2; ?>'

                                             height='100' width='50'>

                                    </div>

                                <?php } else {
                                    ?>
                                    <div class='introfallbackimage'> <img class='listsfallbackimage' alt='contents feed list fallback image' src='<?php echo $GLOBALS['cdn_domain_return'].'images/contentimagethumbnaillarge/fallbackimage.jpg';?>' height='100' width='100'></div>
                                <?php } ?>
                            </div>
                            <?php
                        } ?>


                    </div>
                </a>
            </nav>
            <?php
        }
        if ($currentitem > 0) {

            $nextstate = 1; ?>

            <nav role="navigation">
                <a href=<?php echo create_item_link_string($content['contentid'], $item[$currentitem - 1]["itemid"], $contentkey); ?>>

                    <div class="nextitemcontainer">

                        <div class="nextmediumholdercustomedge"></div>

                        <div class="nextitemtext">Next item</div>
                        <div class="mediumitemranknext"><?php echo $currentitem; ?></div>
                        <img class="listitemimageforrightarraow" alt="Nav thumbnail image" src="<?php echo $item[$currentitem - 1]["thumbnaillarge".$item[$currentitem - 1]['contentthumbnail']."src"]; ?>">


                    </div>
                </a>
            </nav>

            <?php

        }
    }
}

































echo <<<END
        <nav role="navigation">
            <a href=$navUrl>
                <div class="previousitemcontainer">
                    <div class="prevmediumholdercustomedge"></div>
                    <div class="previousitemtext">$previousItemText</div>
                    <div class="mediumitemrank">$currentItemPosition</div>
                    <img class="listitemimageforleftarraow $contenthumbnailoriginal" alt="Nav thumbnail image" src="$currentItemImageSrc">
                    $contentThumbnailNav
            </a>
        </nav>
        END;




echo <<<END
        <nav role="navigation">
            <a href=$navUrl>
                <div class="nextitemcontainer">
                    <div class="nextmediumholdercustomedge"></div>
                    <div class="nextitemtext">$previousItemText</div>
                    <div class="mediumitemranknext">$currentItemPosition</div>
                    <img class="listitemimageforrightarraow" alt="Nav thumbnail image" src="$currentItemImageSrc">
                    $contentThumbnailNav
            </a>
        </nav>
        END;







$arrowImage = match($imageCount){
    4 => <<<END
            <div class='introimagetoprow'>
                <img class='introlistlongimageleft1' alt='contents feed list image 1' src='$imgs[0]' height='50' width='50'>
                <img class='introlistlongimageleft2' alt='contents feed list image 2' src='$imgs[1]' height='50' width='50'>
            </div>
            <div class='introimagebottomrow'>
                <img class='introlistlongimageright1' alt='contents feed list image 3' src='$imgs[2]' height='50' width='50'>
                <img class='introlistlongimageright2' alt='contents feed list image 4' src='$imgs[3]' height='50' width='50'>
            </div>
            END,
    3 => <<<END
            <div class='introimagelong'>
                <img class='introlistlongimageleft' alt='contents feed list image 1' src='$imgs[0]' height='100' width='50'>
            </div>
            <div class='introimagerightrow'>
                <img class='introlistlongimageright1' alt='contents feed list image 2' src='$imgs[1]' height='50' width='50'>
                <img class='introlistlongimageright2' alt='contents feed list image 3' src='$imgs[2]' height='50' width='50'>
            </div>
            END,
    2 => <<<END
            <div class='introimagelong'>
                <img class='introlistlongimageleft' alt='contents feed list image 1' src='$imgs[0]' height='100' width='50'>
            </div>
            <div class='introimagelongright'>
                <img class='introlistlongimageright' alt='contents feed list image 1' src='$imgs[1]' height='100' width='50'>
            </div>
            END,
    default => <<<END
                    <div class='introfallbackimage'>
                        <img class='listsfallbackimage' alt='contents feed list fallback image' src='$hostUrl/images/contentimagethumbnaillarge/fallbackimage.jpg' height='100' width='100'>
                    </div>
                    END
};

return <<<END
           <div class="listitemimageforleftarraowdiv $contenthumbnailcreated">
              $arrowImage
           </div>
           END;
