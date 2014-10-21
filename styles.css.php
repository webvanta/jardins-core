<?php if(extension_loaded('zlib')){ob_start('ob_gzhandler');} header("Content-type: text/css"); ?>

/******************TOPHEADER*******************/ 
.topmenu_container{background-color: black;
                   height: 30px;}
.topmenu_container .topmenu_container_inner{}
.topmenu_container .topmenu_container_inner ul{margin:0;}
.topmenu_container .topmenu_container_inner ul li{float: left;
                                                  list-style: none;
                                                  line-height: 30px;
                                                  margin-right: 30px;}
.topmenu_container .topmenu_container_inner ul li a{color: white;
                                                    text-decoration: none;
                                                    text-transform: uppercase;}
.topmenu_container .topmenu_container_inner ul li a:hover{text-decoration:underline;}
/******************END TOPHEADER*******************/

/******************CMS*******************/
.cms_container{padding: 10px;
               margin-top: 10px;}
.cms_container .cms_title{font-size: 22px;
                          line-height: 32px;
                          margin: 0;
                          color: #244da3;
                          text-decoration: none;}
.cms_container .cms_content{font-size: 12px;
                            line-height: 18px;
                            font-family: Arial, sans-serif;}
/******************END CMS*******************/

/******************HEADER*******************/
.btn{
    text-decoration: none;
}
.ad-zoom{
    float: right;
    margin-top: -32px;
    margin-right: 8px;
    position: relative;
}
.srcf{
    float: left;
    position: absolute;
    margin-top: -37px;
    margin-left: 427px;
}
.slc {
    position: absolute;
    margin-left: 820px;
    width: 211px;
    margin-top: -108px;
    height: 49px;
    box-shadow: 1px 3px 9px #888888;
    padding: 5px;
}
.slc img
{
    float: left;
    margin-right: 9px;
}
.slc p
{
    float: left;
    line-height:17px;
}

.csl{position: absolute;
     margin-left: 824px;
     margin-top: -36px;}
/******************NAV#MAINMENUIGATION*******************/
nav#mainmenu {
    height:40px;
    margin-top: 12px;
}

nav#mainmenu ul {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 15px;
    margin: 0;
    padding: 0;
    list-style: none;
    z-index: 999;
}

nav#mainmenu ul li {
    display: block;
    position: relative;
    float: left;

}

nav#mainmenu li ul { 
    display: none; 
}

nav#mainmenu ul li a {
    display: block;
    text-transform: uppercase;
    text-decoration: none;
    padding: 6px 29.1px;
    border-top: solid 2px black;
    white-space: nowrap;
    color: black;
    height: 30px;
    width: 116px;
    text-align: center;
    border-bottom: solid 2px black;
    line-height: 30px;
}



nav#mainmenu li:hover a { 
    height:30px; /* Height of lower-level nav#mainmenu items is shorter than main level */
}

nav#mainmenu ul li.color1 a
{
    border-top: solid 2px #519548;
}

nav#mainmenu ul li.color2 a
{
    border-top: solid 2px #FE4365;
}

nav#mainmenu ul li.color3 a
{
    border-top: solid 2px #00B4CC;
}

nav#mainmenu ul li.color4 a
{
    border-top: solid 2px #FE4365;
}

nav#mainmenu ul li.color5 a
{
    border-top: solid 2px #FA6900;
}

nav#mainmenu ul li a:hover { 
    background: black; 
    color: #fff;
}

nav#mainmenu ul li .submenu a,nav#mainmenu ul li.color2 .submenu a,nav#mainmenu ul li.color3 .submenu a,nav#mainmenu ul li.color4 .submenu a,nav#mainmenu ul li.color5 .submenu a
{
    color: #fff;
}

nav#mainmenu ul li .submenu a
{
    background: black;
    width:180px;
    height: 14px;
    line-height: 13px;
}
nav#mainmenu ul li .submenu a:hover
{
    text-decoration: underline;
}

nav#mainmenu ul li.color1 a:hover,nav#mainmenu ul li.color1 .submenu a
{
    background: #519548;
}

nav#mainmenu ul li.color2 a:hover,nav#mainmenu ul li.color2 .submenu a
{
    background: #FE4365;
}

nav#mainmenu ul li.color3 a:hover,nav#mainmenu ul li.color3 .submenu a
{
    background: #00B4CC;
}

nav#mainmenu ul li.color4 a:hover,nav#mainmenu ul li.color4 .submenu a
{
    background: #FE4365;
}

nav#mainmenu ul li.color5 a:hover,nav#mainmenu ul li.color5 .submenu a
{
    background: #FA6900;
}


nav#mainmenu li:hover ul {
    display: block;
    position: absolute;
    height:30px;
}

nav#mainmenu li:hover li {
    float: none;
    font-size: 11px;

}

nav#mainmenu ul li ul li a {
    text-align:left; /* Top-level items are centered, but nested list items are left-aligned */
}

nav#mainmenu .submenu a
{
    border-top: none !important;
    border-bottom: none;
}

nav#mainmenu .submenu li.color1 a
{

}
/******************END NAV#MAINMENUIGATION*******************/
/******************END HEADER*******************/

/******************FOOTER*******************/
.product_name
{
    font-size: 22px;
    line-height: 32px;
    margin: 0;
    color: #244da3;
    text-decoration: none;
}
/******************END FOOTER*******************/

/******************PRODUCT DETAIL*******************/
#sblink{float: right;
        margin-top: 9px;
        text-decoration: none;
        margin-right: -40px;}
#sidebarprodl
{

}

#sidebarprodl .sei
{
    display: none;
}
.contactform table{
    width: 253px !important;
    margin-bottom: 10px !important;
}
.contactform table td{
    border: solid 1px gray;
}

.cmname{margin: 0;
        color: #8c8c8c;
        font-size: 16px;}

#productimages {
    padding: 0px 0 0px 0px;
    position: relative;
}
#productimages img {
    border: 1px solid #ccc;
    background-color: white;
    padding: 2px;
    margin: 2px;
    display: block;
    float: left;
    height:75px;
    width:75px;
}

.rtbl{margin-top: 9px;color: #244da3;}
.rtbl td, .tbc td{border: solid 1px gray;text-align: center;font-family: Georgia;}
.rtbl .hdn {color: #E23C00;
            font-size: 16px;
            font-weight: bold;}
.rtbl td.rn{
    font-weight: bold;
    width: 87px;
    vertical-align: middle;

}

.rtbl .rvs{
    float: left;
    width: 65px;
    text-align: center;
}
.rtbl .rvs img{height:20px;}
.rtbl .rvs span{display: block;}

.caroufredsel_wrapper
{
    height:80px !important;
}

#productimagescont a.prev, #productimagescont a.next {
    background: url(images/miscellaneous_sprite.png) no-repeat transparent;
    width: 45px;
    height: 50px;
    display: inline-block;
    top: 85px;
}

#productimagescont a.prev {            left: -22px;
                                       margin-left: 77px;
                                       background-position: 0 0; }
#productimagescont a.prev:hover {      background-position: 0 -50px; }
#productimagescont a.prev.disabled {   background-position: 0 -100px !important;  }
#productimagescont a.next {            right: -22px;
                                       background-position: -50px 0; }
#productimagescont a.next:hover {      background-position: -50px -50px; }
#productimagescont a.next.disabled {   background-position: -50px -100px !important;  }
#productimagescont a.prev.disabled, #productimagescont a.next.disabled {
    cursor: default;
}
#productimagescont a.prev span, #productimagescont a.next span {
    display: none;
}

.showing_image
{
    margin: 0px auto;
    display: block;
}

.pdpbd{color: #cd2c5f;
       font-size: 14px;
       font-weight: bold;}

.product_description_container{background: #F6FCFD;padding: 11px;}

*.unselectable {
    -moz-user-select: -moz-none;
    -khtml-user-select: none;
    -webkit-user-select: none;

    /*
      Introduced in IE 10.
      See http://ie.microsoft.com/testdrive/HTML5/msUserSelect/
    */
    -ms-user-select: none;
    user-select: none;
}

#product_description
{
    max-height: 860px;
    overflow: hidden;
    margin-top: 10px;
    line-height: 18px;
    font-size: 12px;
    font-family: Arial, sans-serif;
}
.mitm{
    width: 100%;
    clear:both;
    font-size: 19px;
    font-weight: bold;
    border-bottom: solid 1px #F31D73;
    color: #F31D73;
    margin-bottom: 8px;
}
.pdb .ptag
{margin-left: 82px;
 position: absolute;
 margin-top: 5px;
 width: 64px;
 height: 64px;}

.mainpicture{
    padding: 5px;
    background: url(images/bg-postthumb.gif) repeat;
    margin: 0 auto;
    display: block;
    margin-bottom: 17px;
}

.published {
    background: url(images/bg-published.png) repeat-x scroll left 17% transparent;
    margin: 0 2px 5px;
    height: 17px;
    text-align: center;
    width: 100%;
    position: relative;
}

.published p {
    background: #F6FCFD scroll center bottom;
    color: #222;
    display: inline-block;
    margin-top: -11px;
    padding: 0 10px 20px;
    height: 18px;
}

.cke_editable table {
    margin: auto;
}

.product_detail_tabs .ui-widget-header
{
    border: none !important;
    background: white;
}

.product_detail_tabs .ui-widget-content
{
    background: white;
}

.product_detail_tabs,.product_detail_tabs li, .product_detail_tabs .ui-corner-all,.product_detail_tabs .ui-corner-tl, .product_detail_tabs .ui-corner-top, .product_detail_tabs .ui-corner-right, .product_detail_tabs .ui-corner-left
{
    border-top-right-radius: 0px;
    border-top-left-radius: 0px;
    padding: 0px;
}
.product_detail_tabs .ui-tabs-nav li.ui-tabs-active 
{
    padding-bottom: 0px;
}

.product_detail_tabs .ui-tabs-nav li
{
    padding: 0px;
    margin: 0px;
    width: 25%;
    border: 0;
}

.product_detail_tabs .ui-tabs-nav li a
{
    text-align: center;
    width:90%;
}

.product_recent .ui-tabs-nav li a
{
    padding: 0.5em 23px;
}

.pdb{
    float: left;
    margin-right: 10px;
    width: 324px;
    height: 177px;
}
.pdb .pdb_i{
    display: block;
    float: left;
    margin-right: 9px;
    width: 150px;
    height: 150px;
}

.pdb .pdb_inf{
    float: left;
    width: 161px;
    height: 115px;
}
.pdb .pdb_inf p{
    color: #244da3;
    line-height: 14px;
    padding-top: 2px;
    margin-top: 2px;
}
.pdb .pdb_inf h4{
    font-style: italic;
    font-size: 14px;
    margin-bottom: 0;
    font-weight: bold;
}
.pdb .pdb_c{
    float: left;
    width: 164px;
}
.pdb .pdb_c .pdb_p{
    float: left;
    width: 102px;
    color: red;
    font-weight: bold;
    font-style: italic;
    padding-top: 11px;
}
.pdb .pdb_c .pdb_aw{float: right;}
.pdbc {
    width: 389px;
    border: 1px solid #d3d3d3;
    margin-bottom: 11px;
    padding: 6px;
    height: 210px;
}
.pdbc .pdb_inf p
{font-weight: normal;margin-top:9px;}

.pdbc:hover
{border: 1px solid #F31D73}
.pdbc .pdb_i {
    width: 172px;
    height: 172px;
}
.pdbc .pdb_inf {
    width: 205px;
}
.pdbc .pdb_c {
    border-top: solid 1px gray;
    margin-top: 2px;
    width: 100%;
}
.pdbc .pdbcl{float: right;
             width: 45px;
             height: 45px;}
.pdbc .pdb_c .pdb_p {
    width: 92px;
    float: right;
}

.cpnp {
    clear: both;
    margin-top: 10px;
    float: left;
    width: 100%;
}
.cpnp .pdb_i{
    width: 150px;
    height: 150px;
}
.cpnp .pdbc{
    width:345px;
    height: 245px;
}
.cpnp .pdb_inf{
    width: 169px;
    height: 210px;
}


.tbd {}
.tbd .tbh{
    background-color: #000;
    color: #fff;
    float: left;
    clear: both;
    padding: 5px 23px;
    margin-top: 10px;
    margin-bottom: 0px;
}
.tbd .tbc{
    border-top: 2px solid #7F7F7F;
    float: left;
    clear:both;
    width:100%;
}

/*
.spi{padding: 6px;}
.spi:hover{background-color: black;}
.spi:hover h4,.spi:hover p{color: white;}

.spi .spii{
border: solid 1px white;
float: left;
margin-right: 8px;
height:80px;
width:100px;
}
.spi .spic{height: 88px;}
.spi .spic h4{
margin: 0;
font-size: 13px;
font-weight: bold;
}
.spi .spic p{
margin: 0;
font-size: 13px;
}
*/


#action_block , .nav-tabs , .navbar
{
    width:100%;
    background-color:white;
}

.product_bottom_tabs > div{
    float: none;
    clear: both;
}

.product_detail_tabs {}

.product_detail_tabs ul {
    clear: both;
    background: #E5E5E5;
    border-top: 2px solid #7F7F7F;
    padding: 10px;
    float: left;
    background: #F7FAF1!important;
    padding: 0!important;
    margin-bottom: 0;
    width: 100%;
}
.product_detail_tabs ul li{
    margin-bottom: 0px!important;
    float: left;
    list-style: none;
}
.product_detail_tabs ul li a{
    padding: 20px;
    float: left;
    color: #333;
    text-decoration: none;
    font-weight: bold;
    font-size: 13px;
}
.product_detail_tabs ul li a.selected{
    background: #ecf2e1;
}
.product_detail_tabs .pdtc{
    background: #ecf2e1;
}
.product_detail_tabs .pdtc .spi{
    float: left;
    width: 234px;
    padding: 10px;
    border-bottom: 1px solid #c5c5c5;
}
.product_detail_tabs .pdtc .spi .spii{
    float: left;
    border: 1px solid #fff;
    margin: 3px 5px 0 0;
}
.product_detail_tabs .pdtc .spi .spic{}	
.product_detail_tabs .pdtc .spi .spic h4{
    font-family: Tahoma,Geneva,sans-serif;
    font-size: 14px;
    color: #000;
    font-style: normal!important;
    margin:0;
}	
.product_detail_tabs .pdtc .spi .spic p{
    color: #111111;
}	

.product_detail_tabs .pdtc .spi:hover{
    background-color: black;
}
.product_detail_tabs .pdtc .spi:hover .spic h4{
    color: #fff;
}
.product_detail_tabs .pdtc .spi:hover .spic p{
    color: #fff;
}
/******************END PRODUCT DETAIL*******************/

/******************SOCIAL BUTTONS*******************/
.twitter-share-button{
    margin-bottom: -3px;
    width: 86px !important;
}
#___plusone_0{
    height: 17px !important;
    width: 67px !important;
}
.ssnbs{
    clear:both;
}
/******************END SOCIAL BUTTONS*******************/

/**************************CALCULATOR**************************/
/*CALCULATOR*/
#calculator
{
    display: block;
}
#calculator_table
{
    width: 100%;
}
#calculator_table tr td
{
    padding-bottom: 5px;
}
#calculator_start
{
    display: block;
}
#shape
{

}
#calculator_square
{

}
#calc_length
{
    width: 70px;
}
#calc_width
{
    width: 70px;
}
#calculator_circle
{

}
#calc_radius
{
    width: 70px;
}
#calc_totals
{
    width: 100px;
}
#calculator_result
{

}
#calculator_combination table {
    border: 1px solid #244DA3;
    background-color: #F6FCFD;
    margin: 0 auto 12px auto;
}
#calculator_calculate
{
}

.calculatorvalue
{display: inline;
 width: 30px !important;
 text-align: right;
 border-color: #244DA3;
 color: #244DA3;
 font-size: 13px;
 background-color:##FFFF00;

}
.flowername
{
    font-size: 13px;
    color: #244DA3;
}
#calculator_combination table
{
    border: 1px solid #244DA3;
    background-color: #F6FCFD;
    margin: 0 auto 12px auto; 
}
#calculator_combination table tr td
{
    padding: 3px 6px;
    text-align: left;
    color: #244DA3;
    font-size: 13px;
}
#calculator_results table
{
    border: 1px solid #244DA3;
    background-color: #F6FCFD;
}
#calculator_results table tr td
{
    padding: 5px 13px;
    font-size: 13px;
}
/********************************************************/
/******************FOOTER*******************/
.footer
{
    width: 100%;
    background: #000 url(images/footer.png) top left repeat-x;clear: both;
    padding: 20px 0;
    color: #666;
    font-size: 12px;
    text-align: left;
    margin-top: 10px;
}

.footer .copyright {
    padding-top: 8px;
    border-top: 1px solid #2e2d2d;
    margin-top: 10px;
    text-align: left;
}
.footer .footer_menu{color:white;}
.footer .footer_menu li{list-style:none;line-height:17px;}
.footer .footer_menu li a{color:white;text-decoration:none;}
.footer .footer_menu h3{color: white;
                        margin-bottom: 7px;
                        margin-left: 17px;}
.footer .footer_menu li a:hover{text-decoration: underline;}
/******************END FOOTER*******************/


/********************HOME FEATURE************************/


.style3{ margin-bottom:-23px; float:left;}
.style3 .hentry{ width:640px !important;}
.style3 ul{ clear:both; background:#ecf2e1; height: auto !important; float:left; width:735px; padding-top:10px;}
.style3 ul li{ list-style: none;margin:0 0 10px 5px; float:left; width:178px; height: auto !important;}
.style3 ul li img{ border:none !important; float:left;width: 168px;
                   height: 120px;}
.style3 ul li h2{ font-size:14px !important; padding:0 !important;}
.style3 ul li .thumb{ margin:2px 5px 4px 0; border:4px solid #BFD39A; display:block; float:left}
li.widget ul,li.flickr div { clear:both; background:#E5E5E5; border-top:2px solid #7F7F7F; padding:10px;}
#slideshow .current{padding:0 !important;}
.textwidget{display: block;float: left;width: 280px;background: none repeat scroll 0 0 #D6D6D6;overflow: hidden; border-top:2px solid #7F7F7F; padding:10px; font-size:11px; margin-bottom:20px;}
.hentry1 h2 a{text-decoration:none;}


.color1 ul li .thumb:hover{ border:4px solid #519548;}
.color2 ul li .thumb:hover{ border:4px solid #FE4365;}
.color3 ul li .thumb:hover{ border:4px solid #00B4CC;}
.color4 ul li .thumb:hover{ border:4px solid #CDB380;}
.color5 ul li .thumb:hover{ border:4px solid #FA6900;}

.hentry1 h1 {
    color: #fff;
    font-family: Tahoma, Geneva, sans-serif;
    line-height: 1;
    font-size: 15px;
    text-transform: uppercase;
}
.hentry1 h1 a {
    color: #fff;
    text-decoration: none;
}
.hentry1 h1 {
    padding: 10px;
    float: left;
    color: #fff;
    font-family: Tahoma, Geneva, sans-serif;
    line-height: 1;
    font-size: 15px;
    text-transform: uppercase;
    z-index: 2;
    margin-bottom: -2px;
}
.hentry1 {
    margin-top:20px;
}
.color1 h1 {
    background: #519548;
}
.color1 ul {
    border-top: 2px solid #519548;
}
.color2 h1 {
    background: #FE4365;
}
.color2 ul {
    border-top: 2px solid #FE4365;
}
.color3 h1 {
    background: #00B4CC;
}
.color3 ul {
    border-top: 2px solid #00B4CC;
}
.color4 h1 {
    background: #CDB380;
}
.color4 ul {
    border-top: 2px solid #CDB380;
}
.color5 h1 {
    background: #FA6900;
}
.color5 ul {
    border-top: 2px solid #FA6900;
}
/********************END HOME FEATURE************************/


/********************CATEGORY************************/
.categorymenu h4{margin: 3px 0px;
                 text-align: center;
                 font-weight: bold;
                 font-size: 15px;}
.categorymenu ul li a{
    text-decoration:none;
}
.categorymenu ul li a:hover{text-decoration:underline;}
.categorymenu span , .categorymenu a{font-size:13px;}
.clis .clisi:hover
{border: 1px solid #F31D73;}
.clis .clisi {float: left;
              border: 1px solid #fff;
              width: 146px;
              margin-right: 12px;
              margin-bottom: 15px;
              height: 174px;
              overflow-y: visible;
              padding: 2px;}
.clis .clisi img{height: 145px;
                 width: 145px;
                 margin-bottom: 12px;
                 display: block;
                 margin: 0px auto;
                 -webkit-border-radius: 21px;
                 -moz-border-radius: 21px;
                 border-radius: 21px;}
.clis .clisi .itl{display: block;
                  text-align: center;
                  font-size:14px;
                  text-decoration: none;
                  margin-top: 8px;
                  color: #9fa63a;}
.clis .clisi .itl:hover{
    text-decoration: underline;}

.ctool{padding: 5px 15px 5px 12px;
       height: 27px;
       line-height: 27px;
       background-color: #73825f;
       color: #fff;
       font-weight: bold;
       margin-top: 24px;
       border-top-left-radius: 4px;
       border-top-right-radius: 4px;
       margin-bottom:5px;}

.ctool select{font-size: 12px;
              color: #61605b;
              border: 1px solid #61605b;
              padding: 1px;
              margin: 0 3px 0 0;}
.ctool .paging{float: right;
               display: inline;}
.ctool .paging a{
}
.ctool .paging .disabled {
    opacity: 0.5;
    text-decoration: none;
}
.ctool .paging .current-page {
    border-color: #D6DC6B;
    font-weight: bold;
    color: #fffd0b;
}
.ctool .paging .page-separator {
    border: none;
    font-weight: normal;
    height: 23px;
    margin-left: 0;
    margin-right: 0;
    min-width: 15px;
    text-decoration: none;
    opacity: 0.5;
}
.ctool .paging .page {
    border: 0 solid;
    border-color: #EFE4FF #A5A5A5 #A0CFBD #BABABA;
    font-weight: bold;
    height: 23px;
    min-width: 12px;
    color: #fff;
    padding-left: 1px;
    padding-right: 1px;
    text-decoration: none;
    margin: 1px 4px;
}
/********************END CATEGORY************************/
.wlth td{
    font-weight: bold;
}

#idc-container
{
    margin-left: auto !important;
    margin-right: auto !important;
}

.rqfgi{
    font-size:11px;
    color: #244da3;
}

.slct{
    line-height: 18px;
    padding: 0px;
    margin: 0px;
}
.slct li{
    list-style: none;
    margin: 6px 4px;
}
.slct li a{
    margin-left: 0;
    margin-right: 8px;
    font-weight: bold;
    background-color: #828282;
    color: #fff;
    border-radius: 4px;
    padding: 2px 5px 2px 25px;
    background-image: url(images/btn-remove-selection.png);
    background-repeat: no-repeat;
    background-position: 2px 3px;
    display: block;
}
.clall{
    color: #a6192e;
    float: right;
    margin-right: 10px;
    margin-top: 3px;
}

.wlimg
{
    width:100px;
    height:100px;
}

.wlsln{
    font-weight: bold;
    color: #244da3;
}

#file_container input
{
    font-size:13px;
}

.wltbl{width: 100%;}
.wltbl .wlacc{width:80px;}


.greenbutton {

    -moz-box-shadow:inset 0px 1px 0px 0px #ffe0b5;
    -webkit-box-shadow:inset 0px 1px 0px 0px #ffe0b5;
    box-shadow:inset 0px 1px 0px 0px #ffe0b5;

    background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #75cfeb), color-stop(1, #38b3d9));
    background:-moz-linear-gradient(top, #75cfeb 5%, #38b3d9 100%);
    background:-webkit-linear-gradient(top, #75cfeb 5%, #38b3d9 100%);
    background:-o-linear-gradient(top, #75cfeb 5%, #38b3d9 100%);
    background:-ms-linear-gradient(top, #75cfeb 5%, #38b3d9 100%);
    background:linear-gradient(to bottom, #75cfeb 5%, #38b3d9 100%);
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#75cfeb', endColorstr='#38b3d9',GradientType=0);

    background-color:#75cfeb;

    -moz-border-radius:7px;
    -webkit-border-radius:7px;
    border-radius:7px;

    border:1px solid #2876d6;

    display:inline-block;
    color:#ffffff;
    font-weight:bold;
    padding:6px 11px;
    text-decoration:none;

    text-shadow:0px 1px 0px #8f7f24;

}
.greenbutton:hover {

    background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #38b3d9), color-stop(1, #75cfeb));
    background:-moz-linear-gradient(top, #38b3d9 5%, #75cfeb 100%);
    background:-webkit-linear-gradient(top, #38b3d9 5%, #75cfeb 100%);
    background:-o-linear-gradient(top, #38b3d9 5%, #75cfeb 100%);
    background:-ms-linear-gradient(top, #38b3d9 5%, #75cfeb 100%);
    background:linear-gradient(to bottom, #38b3d9 5%, #75cfeb 100%);
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#38b3d9', endColorstr='#75cfeb',GradientType=0);

    background-color:#38b3d9;
}
.greenbutton:active {
    position:relative;
    top:1px;
}

.gsc-control
{
    width: 100% !important;
}

.rating_block{
    margin-top: 3px;
    display: block;
}

#review_form textarea {
    height:50px;
}

#review_form_table{
    float: left;
    width: 700px;
}

#review_guideline
{
    float: left;
    width: 300px;
    margin-right: 10px;
    margin-top: 30px;
}

.review_form_thankyou{

}

.hrreview {
    border-top: 1px dotted #000;
    color: #fff;
    background-color: #fff;
    height: 1px;
}

.siic{
    margin: 0 auto;
    width: 300px;
    text-align: center;
}

.pdbst
{
    float: left;
    margin-top: 12px;
}

.ratingValue
{
    background-color: #2D2825;
    padding: 2px 4px;
    color: #fff;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
}

.ratingValue2{
    margin-top: -4px;
    display: inline-table;
}

#slider
{
    margin-top: 7px;
}

.fanpagelogo
{
    width: 120px;
    float: right;
}
<?php if(extension_loaded('zlib')){ob_end_flush();}?>
