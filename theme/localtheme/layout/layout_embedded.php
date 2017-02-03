<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.



echo $OUTPUT->doctype(); ?>

<html <?php echo $OUTPUT->htmlattributes(); ?>>
    <head>
        <title><?php echo $OUTPUT->page_title(); ?></title>
        <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui">
        <?php echo $OUTPUT->standard_head_html(); ?>
    </head>

    <body <?php echo $OUTPUT->body_attributes(); ?>>
        <?php echo $OUTPUT->standard_top_of_body_html(); ?>
        <div style="" class="button_exit">
            <?php echo $OUTPUT->page_heading_button(); ?>
        </div>

        <div id="region-main">
            <?php echo $OUTPUT->main_content(); ?>
                <!-- <i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
                <span class="sr-only">Loading...</span> -->
        </div>

        
        <?php echo $OUTPUT->standard_end_of_body_html(); ?>
    </body>
    <style type="text/css">
        .button_exit{
            position: absolute; 
            top: 17px; 
            z-index: 100; 
            left: 30px; 
            color: white; 
            font-size: 1.2em;
        }
        .button_exit a{
            color: white;

        }
        #page-mod-scorm-player #scormpage #scorm_object {
            border: none;
            width: 100% !important;
            height: 100% !important;
        }
        #scorm_layout{
            min-height: 100% !important;
            height: 100% !important;
            margin: 0;
        }
        #page-mod-scorm-player #scormpage #toctree {
            position: relative;
            width: 100%;
            height: 100%;
        }
        html,body,#region-main, #region-main>div,.remui-wrapper,.remui-content-wrapper,.remui-content-wrapper>div {

            height: 100%;  
            overflow-y: hidden;          
        }
        html{
            overflow-y: hidden;
        }
    </style>
    <script>
      function resizeIframe(obj) {
        obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
      }
    </script>
</html>
