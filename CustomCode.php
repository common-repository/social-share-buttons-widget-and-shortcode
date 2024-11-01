<?php 
if ( ! defined( 'ABSPATH' ) ) exit;
$permalinkx=get_permalink();
$titlex=get_the_title();
echo '<ul class="condividi-getseofix">

<li class="fb-getseofix">
<a href="https://www.facebook.com/sharer/sharer.php?u='.$permalinkx.'&t='.$titlex.'" target="_blank">
<span class="fbx-getseofix"></span> Facebook</a>
</li>

<li class="tw-getseofix">
<a href="https://twitter.com/share?url='.$permalinkx.'&text='.$titlex.'" target="_blank">
<span class="twx-getseofix"></span> Twitter</a>
</li>

</ul>';

?>
<style>
.condividi-getseofix {
    margin: 0;
    padding: 0;
    display: inline-block;
    clear: both;
	width: 100% !important;
    max-width: 100% !important;margin: 5px 0 !important;
}

.condividi-getseofix li {
    border-radius: 4px;padding:0 !important;
   
    list-style: none;
    margin: 0;
    float: left;
    width: 49%;
    display: inline-block;
}
.condividi-getseofix li a:before{
	margin:0;
	list-style:none;content:none !important;
}

.condividi-getseofix li:hover {
opacity:0.8;
}
.fb-getseofix {
    background-color: #4E71A8!important;
    margin-right: 2%!important;
}



.fb-getseofix a, .tw-getseofix a {
    display: block;    font-family: sans-serif;
    width: 100%; padding: 10px !Important;
    color: #FFF !important;box-sizing: border-box;
    text-align: center;text-decoration: none !important;font-size:0.8em;
}
.tw-getseofix {
    background-color: #55ACEE!important;
}
.fbx-getseofix {
    display: inline-block;
    background: url(<?php echo plugins_url( 'fb.png', __FILE__ ); ?>) no-repeat left center;
    width: 20px;
    height: 20px;
    vertical-align: middle;
    margin-right: 0!important;
}
.twx-getseofix {
    display: inline-block;
    background: url(<?php echo plugins_url( 'tw.png', __FILE__ ); ?>) no-repeat left center;
    width: 20px;
    height: 20px;
    vertical-align: middle;
    margin-right: 0!important;
}
</style>
	
