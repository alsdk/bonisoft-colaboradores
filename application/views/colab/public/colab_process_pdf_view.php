<html>
    <head>
        <style>
            #image {
                position: absolute;
                left: 0;
                right: 0;
                height: 942px;
                width: 695px;
            }
            #text {
                z-index: 100;
                position: absolute;
                color: black;
                font-size: 18px;
                font-weight: bold;
                font-family: Verdana, Arial;
                left: 535px;
                top: 725px;
            }
        </style>
    </head>
    <body>
        <div id="folleto">
            <img id="image" src="<?php echo $leaflet_img_path; ?>" />
                 <p id="text"><?php echo $leaflet_asoc_id; ?></p>
        </div>
    </body>
</html>