<style type="text/css">
	/*--
	Author: W3Layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
	--*/

	html,
	body {
	    margin: 0;
	    font-size: 100%;
	    background: #fff;
	    scroll-behavior: smooth;
	}

	body a {
	    text-decoration: none;
	}

	html {

	    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";

	}

	a:hover {
	    text-decoration: none;
	}

	input[type="button"]:hover,
	input[type="submit"]:hover {
	    transition: .5s ease-in;
	    -webkit-transition: .5s ease-in;
	    -moz-transition: .5s ease-in;
	    -o-transition: .5s ease-in;
	    -ms-transition: .5s ease-in;
	}

	h1,
	h2,
	h3,
	h4,
	h5,
	h6 {
	    margin: 0;
	    font-weight: 600;
	}

	p {
	    font-size: 1em;
	    color: #777;
	    line-height: 1.8em;
	}

	ul {
	    margin: 0;
	    padding: 0;
	}

	body img {
	    border-radius: 4px;
	    -webkit-border-radius: 4px;
	    -moz-border-radius: 4px;
	    -o-border-radius: 4px;
	    -ms-border-radius: 4px;
	}

	/* navigation */

	.toggle,
	[id^=drop] {
	    display: none;
	}

	/* Giving a background-color to the nav container. */

	nav {
	    margin: 0;
	    padding: 0;
	}

	a.navbar-brand {
	    font-size: 0.8em;
	    font-weight: 100;
	    letter-spacing: 1px;
	    line-height: 0.8em;
	    text-transform: uppercase;
	    color: #fff;
	}

	#logo a {
	    float: left;
	    display: initial;
	}

	#logo a img {
	    height: 40px;
	}

	/* Since we'll have the "ul li" "float:left"
	 * we need to add a clear after the container. */

	nav:after {
	    content: "";
	    display: table;
	    clear: both;
	}

	/* Removing padding, margin and "list-style" from the "ul",
	 * and adding "position:reltive" */

	nav ul {
	    float: right;
	    padding: 0;
	    margin: 0;
	    list-style: none;
	    position: relative;
	}

	ul.menu {
	    margin-top: 0.4em;
	}

	/* Positioning the navigation items inline */

	nav ul li {
	    margin: 0px;
	    display: inline-block;
	}

	/* Styling the links */

	nav a {
	    color: #fff;
	    font-size: 13px;
	    letter-spacing: 1px;
	    padding: 0 14px;
	    font-weight: 600;
	    margin: 0 0.5em;
	    text-transform: uppercase;
	}


	nav ul li ul li:hover {
	    background: #f8f9fa;
	}

	li.log-vj a {
	    display: inline-block;
	}

	li.social-icons a span {
	    margin: 0 3px;
	    font-size: 1.4em;
	}

	/* Background color change on Hover */

	.menu li a:hover {
	    color: #feac00;
	}

	.menu li.active a {
	    color: #feac00;
	}

	/* Hide Dropdowns by Default
	 * and giving it a position of absolute */

	nav ul ul {
	    display: none;
	    position: absolute;
	    /* has to be the same number as the "line-height" of "nav a" */
	    top: 25px;
	    padding: 10px;
	    background: #fff;
	    padding: 10px;
	    z-index: 999;
	    border: 1px solid #ddd;
	    /*left: 165px;*/
	    text-align: left;
	}

	/* Display Dropdowns on Hover */

	nav ul li:hover>ul {
	    display: inherit;
	}

	/* Fisrt Tier Dropdown */

	nav ul ul li {
	    width: 170px;
	    float: none;
	    display: list-item;
	    position: relative;
	}

	nav ul ul li a {
	    color: #333;
	    padding: 5px 10px;
	    display: block;
	}

	/* Second, Third and more Tiers	
	 * We move the 2nd and 3rd etc tier dropdowns to the left
	 * by the amount of the width of the first tier.
	*/

	nav ul ul ul li {
	    position: relative;
	    top: -60px;
	    /* has to be the same number as the "width" of "nav ul ul li" */
	    left: 170px;
	}


	/* Change ' +' in order to change the Dropdown symbol */

	li>a:only-child:after {
	    content: '';
	}

	/* Media Queries
	--------------------------------------------- */

	@media all and (max-width:992px) {

	    #logo {
	        display: block;
	        padding: 0;
	        width: 100%;
	        text-align: center;
	        float: none;
	    }

	    nav {
	        margin: 0;
	    }

	    /* Hide the navigation menu by default */
	    /* Also hide the  */
	    .toggle+a,
	    .menu {
	        display: none;
	    }

	    /* Stylinf the toggle lable */
	    .toggle {
	        display: block;
	        padding: 7px 20px;
	        font-size: 14px;
	        text-decoration: none;
	        border: none;
	        float: right;
	        background-color: #212529;
	        color: #fff;
	        cursor: pointer !important;
	        margin-bottom: 0;
	        text-transform: uppercase;
	        margin-top: 0em;
	    }

	    .menu .toggle {
	        float: none;
	        text-align: left;
	        margin: auto;
	        width: 80%;
	        padding: 5px;
	        font-weight: normal;
	        font-size: 16px;
	        letter-spacing: 1px;
	    }

	    .toggle:hover {
	        color: #333;
	        background-color: #fff;
	    }

	    /* Display Dropdown when clicked on Parent Lable */
	    [id^=drop]:checked+ul {
	        display: block;
	        background: rgba(16, 16, 16, 0.85);
	        padding: 15px 0;
	        text-align: left;
	        width: 100%;
	        z-index: 99999;
	        border: none;
	    }

	    /* Change menu item's width to 100% */
	    nav ul li {
	        display: block;
	        width: 100%;
	        padding: 5px 0;
	    }

	    nav a:hover,
	    nav ul ul ul a {
	        background-color: transparent;
	    }

	    nav ul li ul li .toggle,
	    nav ul ul a,
	    nav ul ul ul a {
	        padding: 14px 20px;
	        color: #FFF;
	        font-size: 17px;
	    }

	    label.toggle.toggle-2 {
	        width: 94%;
	        font-size: 13px;
	    }

	    nav ul li ul li .toggle,
	    nav ul ul a {
	        background-color: #343a40;
	    }

	    /* Hide Dropdowns by Default */
	    nav ul ul {
	        float: none;
	        position: static;
	        color: #ffffff;
	        /* has to be the same number as the "line-height" of "nav a" */
	        text-align: left;
	    }

	    /* Hide menus on hover */
	    nav ul ul li:hover>ul,
	    nav ul li:hover>ul {
	        display: none;
	    }

	    nav ul {
	        margin-left: 0em;
	    }

	    /* Fisrt Tier Dropdown */
	    nav ul ul li {
	        display: block;
	        width: 100%;
	        padding: 0;
	    }

	    nav ul ul ul li {
	        position: static;
	        /* has to be the same number as the "width" of "nav ul ul li" */
	    }

	    nav ul ul li a {
	        color: #fff;
	        font-size: 0.8em;
	    }

	    nav ul li ul li:hover {
	        background: none;
	    }

	    nav ul li.social-icons {
	        display: inline-block;
	        float: left;
	        width: 32.3%;
	        margin: 0 auto;
	        text-align: center;
	    }

	    .tooltip {
	        top: 0;
	        left: 50%;
	        padding: 0.2rem 0.5rem;
	    }
	}

	@media all and (max-width: 330px) {

	    nav ul li {
	        display: block;
	        width: 94%;
	    }

	}

	/* header */


	/* banner */
	.top_w3pvt_main {
	    position: relative;
	    z-index: 1;
	}

	.nav_w3pvt {
	    position: absolute;
	    left: 0;
	    right: 0;
	    z-index: 99;
	    margin: 0 auto;
	    background: transparent;
	    margin-top: 1.2em;
	}

	/* banner-hny-info */
	.banner-hny-info {
	    padding: 14em 0 14em;
	    margin: 0 auto;
	    position: absolute;
	    top: 0;
	    left: 0;
	    right: 0;
	}

	/* banner slider */


	#homepage-slider {
	    position: relative;
	}

	.radio {
	    display: none;
	}

	.images {
	    overflow: hidden;
	    top: 0;
	    bottom: 0;
	    left: 0;
	    right: 0;
	    width: 100%;
	}

	.images-inner {
	    width: 500%;
	    transition: all 800ms cubic-bezier(0.770, 0.000, 0.175, 1.000);
	    transition-timing-function: cubic-bezier(0.770, 0.000, 0.175, 1.000);
	}

	.image-slide {
	    width: 20%;
	    float: left;
	}

	.image-slide,
	.fake-radio,
	.radio-btn {
	    transition: all 0.5s ease-out;
	}

	.fake-radio {
	    text-align: center;
	    position: absolute;
	    bottom: 5%;
	    right: 2%;
	    z-index: 9;
	}

	/* Move slides overflowed container */
	#slide1:checked~.images .images-inner {
	    margin-left: 0;
	}

	#slide2:checked~.images .images-inner {
	    margin-left: -100%;
	}

	#slide3:checked~.images .images-inner {
	    margin-left: -200%;
	}

	/* Color of bullets */
	#slide1:checked~div .fake-radio .radio-btn:nth-child(1),
	#slide2:checked~div .fake-radio .radio-btn:nth-child(2),
	#slide3:checked~div .fake-radio .radio-btn:nth-child(3) {
	    background: #feac00;
	}

	.radio-btn {
	    width: 10px;
	    height: 10px;
	    -webkit-border-radius: 5px;
	    -o-border-radius: 5px;
	    -ms-border-radius: 5px;
	    -moz-border-radius: 5px;
	    border-radius: 5px;
	    background: #fff;
	    display: inline-block !important;
	    margin: 0 5px;
	    cursor: pointer;
	}

	/* Color of bullets - END */

	/* Text of slides */
	#slide1:checked~.labels .label:nth-child(1),
	#slide2:checked~.labels .label:nth-child(2),
	#slide3:checked~.labels .label:nth-child(3) {
	    opacity: 1;
	}

	.label {
	    opacity: 0;
	    position: absolute;
	}

	/* Text of slides - END */

	/* Calculate AUTOPLAY for BULLETS */
	@keyframes bullet {

	    0%,
	    33.32333333333334% {
	        background: #feac00;
	    }

	    33.333333333333336%,
	    100% {
	        background: #fff;
	    }
	}

	#play1:checked~div .fake-radio .radio-btn:nth-child(1) {
	    animation: bullet 12300ms infinite -1000ms;
	}

	#play1:checked~div .fake-radio .radio-btn:nth-child(2) {
	    animation: bullet 12300ms infinite 3100ms;
	}

	#play1:checked~div .fake-radio .radio-btn:nth-child(3) {
	    animation: bullet 12300ms infinite 7200ms;
	}

	/* Calculate AUTOPLAY for BULLETS - END */

	/* Calculate AUTOPLAY for SLIDES */
	@keyframes slide {

	    0%,
	    25.203252032520325% {
	        margin-left: 0;
	    }

	    33.333333333333336%,
	    58.53658536585366% {
	        margin-left: -100%;
	    }

	    66.66666666666667%,
	    91.869918699187% {
	        margin-left: -200%;
	    }
	}

	.st-slider>#play1:checked~.images .images-inner {
	    animation: slide 12300ms infinite;
	}

	/* Calculate AUTOPLAY for SLIDES - END */
	/* //banner slider */

	/* background images for banner */
	.banner-w3pvt-1 {
	    background: url(../images/banner1.jpg) no-repeat top;
	    background-size: cover;
	    -webkit-background-size: cover;
	    -moz-background-size: cover;
	    -o-background-size: cover;
	    -ms-background-size: cover;
	    min-height: 800px;
	}

	.banner-w3pvt-2 {
	    background: url(../images/banner2.jpg) no-repeat center;
	    background-size: cover;
	    -webkit-background-size: cover;
	    -moz-background-size: cover;
	    -o-background-size: cover;
	    -ms-background-size: cover;
	    min-height: 800px;
	}

	.banner-w3pvt-3 {
	    background: url(../images/banner3.jpg) no-repeat center;
	    background-size: cover;
	    -webkit-background-size: cover;
	    -moz-background-size: cover;
	    -o-background-size: cover;
	    -ms-background-size: cover;
	    min-height: 800px;
	}

	.overlay-w3ls {
	    background: rgba(0, 0, 0, 0.55);
	    min-height: 800px;
	}

	.images-inner {
	    position: relative;
	}

	.banner-hny-info h3 {
	    font-size: 4em;
	    font-weight: 700;
	    letter-spacing: 2px;
	    text-shadow: 0 1px 2px rgba(0, 0, 0, .6);
	    text-align: center;
	    color: #fff;
	}

	.btn {
	    border: 2px solid #fff;
	    padding: 11px 30px;
	    color: #fff;
	    font-size: 16px;
	    letter-spacing: 1px;
	    text-transform: capitalize;
	    display: inline-block;

	}

	.btn:hover {
	    background: #feac00;
	    border: 2px solid #feac00;
	    color: #333;
	    transition: .5s ease-in;
	    -webkit-transition: .5s ease-in;
	    -moz-transition: .5s ease-in;
	    -o-transition: .5s ease-in;
	    -ms-transition: .5s ease-in;
	}

	.btn.more {
	    background: #feac00;
	    border: 2px solid #feac00;
	    color: #222;
	}

	.btn.more.black:hover {
	    background: #212529;
	    border: 2px solid #212529;
	    color: #feac00;
	}

	.wthree-w3ls {
	    border-bottom: 1px solid rgba(221, 221, 221, 0.25);
	    padding-bottom: 1em;
	}



	/* Color Variables */
	/* Social Icon Mixin */
	/* Social Icons */
	.social-icon {
	    display: flex;
	    align-items: center;
	    justify-content: center;
	    position: relative;
	    /* width: 80px; */
	    /* height: 80px; */
	    /* margin: 0 0.5rem; */
	    /* border-radius: 50%; */
	    cursor: pointer;
	    /* font-family: "Helvetica Neue", "Helvetica", "Arial", sans-serif; */
	    /* font-size: 2.5rem; */
	    text-decoration: none;
	    text-shadow: 0 1px 0 rgba(0, 0, 0, 0.2);
	    transition: all 0.15s ease;
	}

	.social-icon:hover {
	    color: #fff;
	}

	.social-icon:hover .tooltip {
	    visibility: visible;
	    opacity: 1;
	    -webkit-transform: translate(-50%, -150%);
	    transform: translate(-50%, -150%);
	}

	.social-icon:active {
	    box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.5) inset;
	}

	.social-icon {
	    background: linear-gradient(tint(#000, 5%), shade(#000, 5%));
	    border-bottom: 1px solid shade(#000, 20%);
	    color: tint(#000, 50%);
	}

	.social-icon:hover {
	    color: tint(#000, 80%);
	    text-shadow: 0px 1px 0px shade(#000, 20%);
	}

	.social-icon .tooltip {
	    background: #fff;
	    background: linear-gradient(tint(#000, 15%), #000);
	    color: tint(#000, 80%);
	}

	.social-icon .tooltip:after {
	    border-top-color: #fff;
	}

	.social-icon span {
	    position: relative;
	    top: 1px;
	}

	/* Tooltips */
	.tooltip {
	    display: block;
	    position: absolute;
	    top: 45%;
	    left: 50%;
	    padding: 0.2rem 1rem;
	    border-radius: 0px;
	    font-size: 0.8rem;
	    font-weight: 600;
	    opacity: 0;
	    pointer-events: none;
	    -webkit-transform: translate(-50%, -100%);
	    transform: translate(-50%, -100%);
	    transition: all 0.3s ease;
	    z-index: 1;
	    color: #000;
	    letter-spacing: 1px;
	}

	.tooltip:after {
	    display: block;
	    position: absolute;
	    bottom: 0;
	    left: 50%;
	    width: 0;
	    height: 0;
	    content: "";
	    border: solid;
	    border-width: 6px 6px 0 6px;
	    border-color: transparent;
	    -webkit-transform: translate(-50%, 100%);
	    transform: translate(-50%, 100%);
	}

	/* //background images for banner */

	/* /stats */
	h5.counter {
	    color: #fff;
	    font-size: 2em;
	    font-weight: 700;
	    margin: 0;
	}

	p.para-w3pvt {
	    color: #fff;
	    font-size: 1.4em;
	    margin-left: 1em;
	    font-weight: 300;
	}

	.hny-stats-inf {
	    margin: 7em auto 0;
	    width: 50%;
	    text-align: center;
	}

	/* //stats */
	/* //banner text */

	.banner_bottom {
	    background: #f7f7f7;
	}


	p.sub-tittle {
	    font-size: 1.1em;
	    font-weight: 400;
	    color: #555;
	}

	.pink {
	    color: #feac00;
	}

	h3.tittle-w3ls,
	h3.tittle-w3ls.two {
	    color: #1b1b1b;
	    font-size: 2.5em;
	    font-weight: 700;
	    text-shadow: 0 2px 12px rgba(0, 0, 0, 0.05);
	}

	h3.tittle-w3ls.two {
	    color: #fff;
	}

	/*--/about--*/
	.banner_bottom_left h4 {
	    font-size: 1.5em;
	    color: #3c3c3c;
	    letter-spacing: 1px;
	    position: relative;
	    font-weight: 600;
	    line-height: 1.6em;
	    margin-bottom: 0.3em;
	    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
	}

	/*--/features--*/
	.features-w3pvt-main {
	    border-top: 1px solid #ddd;
	    margin-top: 3em;
	    padding-top: 4em;
	}

	.icon_left_grid {
	    text-align: center;
	}

	.featured_grid_right_info h4 {
	    font-size: 1.2em;
	    margin-bottom: .7em;
	    font-weight: 600;
	    color: #222222;
	    letter-spacing: 1px;
	}

	.icon_left_grid span {
	    font-size: 2em;
	    color: #ffc107;
	    margin-top: 0.1em;
	}

	/*--//features--*/
	.services {
	    background: url(../images/banner4.jpg) no-repeat top;
	    background-size: cover;
	    -webkit-background-size: cover;
	    -moz-background-size: cover;
	    -o-background-size: cover;
	    -ms-background-size: cover;
	}

	.over-lay-blue {
	    background: rgba(10, 10, 10, 0.67);
	}

	.services-grid-inf h4,
	.services-grid-inf span,
	.services-grid-inf .link-hny,
	.services-innfo p.sub-tittle {
	    color: #fff;
	}

	.services-grid-inf p {
	    color: #d5d7d8;
	}

	.services-grid-inf span {
	    line-height: 40px;
	}

	/*--//services--*/

	/*--/team --*/
	.team-info h3 {
	    font-size: 1.2em;
	    color: #1b1b1b;
	    margin: 0 0 0.5em 0;
	}

	.team-info h3 a {
	    color: #1b1b1b;
	}

	.team-info h3 a:hover {
	    color: #444;
	}

	.sub-tittle-team {
	    font-size: 1em;
	    color: #495057;
	}

	.team-info p {
	    padding: 0 1em;
	}

	.icon-social.team a {
	    color: #333;
	}

	ul.list-right-w3pvt-book.team-sing li {
	    color: #777;
	}

	ul.list-right-w3pvt-book.team-sing span {
	    font-size: 0.6em;
	    margin-right: 1em;
	}

	.team-gd img:hover {
	    opacity: 0.8;
	}

	/*--//team --*/
	/*-- /gallery --*/

	section#gallery {
	    position: relative;
	}

	.gal-img img {
	    padding: 6px;
	    background: #f0f0f1;
	}

	.gal-info {
	    background: #fff;
	    margin-bottom: 1em;
	    padding: 1em;
	    text-align: left;

	}

	.gal-info:hover {
	    background: #212529;
	    transition: .5s ease-in;
	    -webkit-transition: .5s ease-in;
	    -moz-transition: .5s ease-in;
	    -o-transition: .5s ease-in;
	    -ms-transition: .5s ease-in;

	}

	.gal-info:hover h5 {
	    color: #fff;
	}

	.gal-info h5 {
	    text-align: left;
	    font-size: 0.9em;
	    color: #3a4045;
	    font-weight: 600;
	    text-transform: uppercase;
	}

	span.decription {
	    text-transform: uppercase;
	    display: block;
	    font-size: 0.8em;
	    color: #888;
	    letter-spacing: 2px;
	    margin-top: 0.5em;
	}

	.gal-info:hover span.decription {
	    color: #fff;
	}

	/*-- popup --*/

	.pop-overlay {
	    position: fixed;
	    top: 0px;
	    bottom: 0;
	    left: 0;
	    right: 0;
	    background: rgba(0, 0, 0, 0.7);
	    transition: opacity 0ms;
	    visibility: hidden;
	    opacity: 0;
	    z-index: 99;
	}

	.pop-overlay:target {
	    visibility: visible;
	    opacity: 1;
	}

	.popup {
	    background: #fff;
	    border-radius: 5px;
	    width: 35%;
	    position: relative;
	    margin: 8em auto;
	    padding: 3em 1em;
	}

	.popup p {
	    font-size: 15px;
	    color: #666;
	    letter-spacing: .5px;
	    line-height: 30px;
	}


	.popup .close {
	    position: absolute;
	    top: 5px;
	    right: 15px;
	    transition: all 200ms;
	    font-size: 30px;
	    font-weight: bold;
	    text-decoration: none;
	    color: #000;
	}

	.popup .close:hover {
	    color: #30c39e;
	}


	/*-- //popup --*/

	/*-- /blogs--*/
	.blog-grid-img img {
	    border-radius: 0px;
	}

	.blog-grid-info {
	    background: #212529;
	}

	.date-post {
	    padding: 3em;
	}


	.date-post .link-hny {
	    font-size: 0.9em;
	    font-weight: 600;
	    color: #fff;
	    letter-spacing: 1px;
	}

	.date-post p {
	    color: #fff;
	    margin-bottom: 0;
	    font-size: 0.9em;
	}

	.date-post h4 {
	    margin: 0.3em 0;
	}

	h6.date {
	    font-size: 0.8em;
	    color: #feac00;
	}

	/*-- //blogs--*/
	.login label {
	    color: #777879;
	    font-weight: 600;
	    font-size: 0.9em;
	    text-transform: capitalize;
	    letter-spacing: 1px;
	}

	.link-hny {
	    color: #222222;

	}

	.link-hny:hover {
	    color: #ffc107;
	    transition: .5s ease-in;
	    -webkit-transition: .5s ease-in;
	    -moz-transition: .5s ease-in;
	    -o-transition: .5s ease-in;
	    -ms-transition: .5s ease-in;
	}

	.apply-main .form-control {
	    display: block;
	    width: 100%;
	    padding: 0.375rem 0.75rem;
	    font-size: 1rem;
	    line-height: 1.5;
	    color: #495057;
	    background-color: #fff;
	    background-clip: padding-box;
	    border: none;
	    border-radius: 0;
	    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
	    border-bottom: 2px solid #ddd;
	}


	/*-- //gallery --*/

	.con-gd .form-control {
	    padding: 15px 15px;
	    border: 0;
	    border: none;
	    outline: none;
	    background: rgba(247, 247, 247, 0.29);
	    color: #fff;
	    border-radius: 0;
	    font-size: 0.9em;
	    letter-spacing: 2px;
	    border-radius: 4px;
	    -webkit-border-radius: 4px;
	    -o-border-radius: 4px;
	    -moz-border-radius: 4px;
	    -ms-border-radius: 4px;
	    border: 1px solid #ddd;
	}

	.con-gd button.btn {
	    background: #feac00;
	    border: 2px solid #feac00;
	    color: #222;
	    cursor: pointer;
	    padding: 13px 0;
	    width: 100%;
	}

	.con-gd button.btn:hover {
	    background: #212529;
	    border: 2px solid #212529;
	    color: #feac00;
	}

	p.news-para {
	    margin: 0.5em 0 0 0;
	    font-size: 1.1em;
	    font-weight: 600;
	    color: #555;
	}

	/*--placeholder-color--*/

	.con-gd ::-webkit-input-placeholder {
	    color: #777;
	}

	.con-gd :-moz-placeholder {
	    /* Firefox 18- */
	    color: #777;
	}

	.con-gd ::-moz-placeholder {
	    /* Firefox 19+ */
	    color: #777;
	}

	.con-gd :-ms-input-placeholder {
	    color: #777;
	}

	/*--//placeholder-color--*/
	/* testimonials */
	.testmonials {
	    background: url(../images/banner3.jpg) no-repeat top;
	    background-size: cover;
	    -webkit-background-size: cover;
	    -moz-background-size: cover;
	    -o-background-size: cover;
	    -ms-background-size: cover;
	}

	.testimonials-gd-vj {
	    box-shadow: 0px 0px 18.69px 2.31px rgba(98, 98, 103, 0);
	    background: #fff;
	}

	p.sub-test {
	    color: #666;
	    font-size: 14px;
	}

	p.sub-test span {
	    font-size: 1.7em;
	    margin-right: 0.3em;
	    color: #ddd;
	}

	.testi_grid h5 {
	    color: #2f2e31;
	    letter-spacing: 1px;
	    font-size: 0.9em;
	    font-weight: 600;
	}

	.testi_grid p {
	    font-size: 13px;
	    line-height: 0.5em;
	}

	section.hand-crafted p {
	    color: #6e7275;
	}

	.testi-img-res img {
	    -webkit-border-radius: 50%;
	    -moz-border-radius: 50%;
	    -ms-border-radius: 50%;
	    -o-border-radius: 50%;
	    border-radius: 50%;
	}

	/* //testimonials */
	/*--/inner-w3pvt-page-- */

	.inner-w3pvt-page {
	    background: url(<?= site_url()?>/template/images/banner_detail.png) no-repeat center;
	    background-size: cover;
	    -webkit-background-size: cover;
	    -moz-background-size: cover;
	    -o-background-size: cover;
	    -moz-background-size: cover;
	    min-height: 15em;
	}

	.overlay-innerpage {
	    min-height: 15em;
	    background: rgba(0, 0, 0, 0.44);
	}

	.inner-w3pvt-page-info {
	    padding-top: 7em;
	}

	.breadcrumb {
	    background-color: transparent;
	}

	ol.breadcrumb {
	    margin: 0;
	    padding: 0;
	}

	ol.breadcrumb li {
	    padding: 0;
	    color: #555;
	    font-weight: 600;
	    letter-spacing: 2px;
	    font-size: 13px;
	    text-transform: uppercase;
	    background: rgba(140, 156, 171, 0.22);
	    margin-right: 0.5em;
	    color: #fff;
	    border-radius: 0;
	    background: transparent;
	}

	ol.breadcrumb li a {
	    color: #feac00;
	}

	.breadcrumb-item.active {
	    color: #fff;
	}

	.breadcrumb {
	    display: -webkit-box;
	    display: -ms-flexbox;
	    display: flex;
	    -ms-flex-wrap: wrap;
	    flex-wrap: wrap;
	    padding: 0.75rem 1rem;
	    margin-bottom: 1rem;
	    list-style: none;
	    /* background: none; */
	    border-radius: 0;
	}

	.breadcrumb-item+.breadcrumb-item::before {
	    display: inline-block;
	    padding-right: 0.5rem;
	    padding-left: 0.5rem;
	    color: #fff;
	    content: "/";
	}

	/*--/contact-- */
	.contact-hny-form input,
	.contact-hny-form textarea {
	    padding: 13px 15px;
	    border: 0;
	    border: none;
	    outline: none;
	    background: rgba(247, 247, 247, 0.29);
	    color: #fff;
	    border-radius: 0;
	    font-size: 0.9em;
	    letter-spacing: 2px;
	    border-radius: 4px;
	    -webkit-border-radius: 4px;
	    -o-border-radius: 4px;
	    -moz-border-radius: 4px;
	    -ms-border-radius: 4px;
	    border: 1px solid #ddd;
	    width: 100%;
	}

	.contact-hny-form textarea {
	    min-height: 257px;
	}

	.more.black.con-submit {
	    padding: 0.7em 3em;
	}

	.form-group label {
	    color: #555;
	    font-size: 0.9em;
	}

	.map-w3pvt {
	    background: #d7d7d7;
	    padding: 0.5em;
	}

	.map-w3pvt iframe {
	    width: 100%;
	    min-height: 400px;
	    border: none;
	}

	/*--/single --*/
	h4.title-hny {
	    color: #3e3b3b;
	    font-size: 1.2em;
	    line-height: 1.5em;
	    text-transform: capitalize;
	    font-weight: 500;
	}

	.social-icons-footer ul li {
	    display: inline-block;
	    color: #555;
	    list-style: none;
	}

	.social-icons-footer ul li a {
	    margin: 0 0.5em;
	    color: #333;
	}

	.social-icons-footer ul li a:hover {
	    color: #feac00;
	}

	.comments-grid-right h4 {
	    font-size: 17px;
	    font-weight: 600;
	}

	.comments-grid-right ul li {
	    display: inline-block;
	    color: #888;
	    font-size: 14px;
	    letter-spacing: 1px;
	}

	.comments-grid-right ul li a {
	    color: #feac00;
	}

	.single-page-form {}

	/*--//single --*/
	/*--//contact-- */
	/*--//inner-w3pvt-page-- */
	/*--/timeline--*/
	/* Media Queries */
	/* Card sizing */
	/* Colors */
	/* Calculations */
	/* Placeholders */
	@media (min-width: 1000px) {

	    #timeline .demo-card:nth-child(odd) .head::after,
	    #timeline .demo-card:nth-child(even) .head::after {
	        position: absolute;
	        content: "";
	        width: 0;
	        height: 0;
	        border-top: 15px solid transparent;
	        border-bottom: 15px solid transparent;
	    }

	    #timeline .demo-card:nth-child(odd) .head::before,
	    #timeline .demo-card:nth-child(even) .head::before {
	        position: absolute;
	        content: "";
	        width: 9px;
	        height: 9px;
	        background-color: #bdbdbd;
	        border-radius: 9px;
	        box-shadow: 0px 0px 2px 8px #f7f7f7;
	    }
	}

	/* Some Cool Stuff */
	.demo-card:nth-child(1) {
	    order: 1;
	}

	.demo-card:nth-child(2) {
	    order: 4;
	}

	.demo-card:nth-child(3) {
	    order: 2;
	}

	.demo-card:nth-child(4) {
	    order: 5;
	}

	.demo-card:nth-child(5) {
	    order: 3;
	}

	.demo-card:nth-child(6) {
	    order: 6;
	}

	/* Border Box */
	* {
	    box-sizing: border-box;
	}


	#timeline {
	    /* Fonts * padding: 100px 0;
	    background: #f7f7f7;
	    border-top: 1px solid rgba(191, 191, 191, 0.4);
	    border-bottom: 1px solid rgba(191, 191, 191, 0.4);
	    /* Fonts */
	}

	#timeline h1 {
	    text-align: center;
	    font-size: 3rem;
	    font-weight: 200;
	    margin-bottom: 20px;
	}

	#timeline p.leader {
	    text-align: center;
	    max-width: 90%;
	    margin: auto;
	    margin-bottom: 45px;
	}

	#timeline .demo-card-wrapper {
	    position: relative;
	    margin: auto;
	}

	@media (min-width: 1000px) {
	    #timeline .demo-card-wrapper {
	        display: flex;
	        flex-flow: column wrap;
	        width: 1170px;
	        height: 1650px;
	        margin: 0 auto;
	    }
	}

	#timeline .demo-card-wrapper::after {
	    z-index: 1;
	    content: "";
	    position: absolute;
	    top: 0;
	    bottom: 0;
	    left: 50%;
	    border-left: 1px solid rgba(191, 191, 191, 0.4);
	}

	@media (min-width: 1000px) {
	    #timeline .demo-card-wrapper::after {
	        border-left: 1px solid #bdbdbd;
	    }
	}

	#timeline .demo-card {
	    position: relative;
	    display: block;
	    margin: 10px auto 80px;
	    max-width: 94%;
	    z-index: 2;
	}

	@media (min-width: 480px) {
	    #timeline .demo-card {
	        max-width: 60%;
	        box-shadow: 0px 1px 22px 4px rgba(0, 0, 0, 0.07);
	    }
	}

	@media (min-width: 720px) {
	    #timeline .demo-card {
	        max-width: 40%;
	    }
	}

	@media (min-width: 1000px) {
	    #timeline .demo-card {
	        max-width: 450px;
	        height: 400px;
	        margin: 90px;
	        margin-top: 45px;
	        margin-bottom: 45px;
	    }

	    #timeline .demo-card:nth-child(odd) {
	        margin-right: 45px;
	    }

	    #timeline .demo-card:nth-child(odd) .head::after {
	        border-left-width: 15px;
	        border-left-style: solid;
	        left: 100%;
	    }

	    #timeline .demo-card:nth-child(odd) .head::before {
	        left: 491.5px;
	    }

	    #timeline .demo-card:nth-child(even) {
	        margin-left: 45px;
	    }

	    #timeline .demo-card:nth-child(even) .head::after {
	        border-right-width: 15px;
	        border-right-style: solid;
	        right: 100%;
	    }

	    #timeline .demo-card:nth-child(even) .head::before {
	        right: 489.5px;
	    }

	    #timeline .demo-card:nth-child(2) {
	        margin-top: 180px;
	    }
	}

	#timeline .demo-card .head {
	    position: relative;
	    display: flex;
	    align-items: center;
	    color: #fff;
	    font-weight: 400;
	}

	#timeline .demo-card .head .number-box {
	    display: inline;
	    float: left;
	    margin: 15px;
	    padding: 10px;
	    font-size: 35px;
	    line-height: 35px;
	    font-weight: 600;
	    background: rgba(0, 0, 0, 0.17);
	}

	#timeline .demo-card .head h3 {
	    text-transform: uppercase;
	    font-size: 1.3rem;
	    font-weight: inherit;
	    letter-spacing: 2px;
	    margin: 0;
	    padding-bottom: 6px;
	    line-height: 1rem;
	    color: #ddd;
	}

	@media (min-width: 480px) {
	    #timeline .demo-card .head h3 {
	        line-height: 1.2rem;
	    }
	}

	#timeline .demo-card .head h3 span {
	    display: block;
	    font-size: 0.6rem;
	    margin: 0;
	}

	@media (min-width: 480px) {
	    #timeline .demo-card .head h3 span {
	        font-size: 0.8rem;
	    }
	}

	#timeline .demo-card .body {
	    background: #fff;
	    border: 1px solid rgba(191, 191, 191, 0.4);
	    border-top: 0;
	    padding: 15px;
	}

	@media (min-width: 1000px) {
	    #timeline .demo-card .body {}
	}

	#timeline .demo-card .body p {
	    font-size: 14px;
	    line-height: 1.5em;
	    margin-bottom: 15px;
	}

	#timeline .demo-card .body img {
	    display: block;
	    width: 100%;
	}

	#timeline .demo-card--step1 {
	    background-color: #3c3d3e;
	}

	#timeline .demo-card--step1 .head::after {
	    border-color: #3c3d3e;
	}

	#timeline .demo-card--step2 {
	    background-color: #3c3d3e;
	}

	#timeline .demo-card--step2 .head::after {
	    border-color: #3c3d3e;
	}

	#timeline .demo-card--step3 {
	    background-color: #3c3d3e;
	}

	#timeline .demo-card--step3 .head::after {
	    border-color: #3c3d3e;
	}

	#timeline .demo-card--step4 {
	    background-color: #3c3d3e;
	}

	#timeline .demo-card--step4 .head::after {
	    border-color: #3c3d3e;
	}

	#timeline .demo-card--step5 {
	    background-color: #3c3d3e;
	}

	#timeline .demo-card--step5 .head::after {
	    border-color: #3c3d3e;
	}

	/* typography */

	.typo-wthree h4.typo {
	    color: #333;
	    font-size: 1.5em;
	    text-transform: uppercase;
	}

	.grid-bg {
	    border: 2px solid #f7f7f7;
	}

	.sub-code {
	    padding: 2em;
	    background: #f7f7f7;
	}

	.highlight.sub-code span {
	    color: #777;
	}

	.bd-example {
	    padding: 1.5rem;
	    margin-right: 0;
	    margin-left: 0;
	    border-width: .2rem;
	}

	.bd-example-container {
	    min-width: 16rem;
	    max-width: 25rem;
	    margin-right: auto;
	    margin-left: auto;
	}

	.bd-example-container-body {
	    height: 8rem;
	    margin-right: 4.5rem;
	    background-color: #f7f7f7;
	    border-radius: .25rem;
	}

	.bd-example-container-sidebar {
	    float: right;
	    width: 4rem;
	    height: 8rem;
	    background-color: #2f2e41;
	    border-radius: .25rem;
	}

	.media span {
	    font-size: 4em;
	    color: #555;
	}

	.media-body h5 {
	    font-size: 1.2em;
	    color: #444;
	    margin-bottom: 1em;
	}

	.bread-w3ls .breadcrumb {
	    background: #eee;
	}

	.bread-w3ls .breadcrumb-item.active {
	    color: #6c757d;
	}

	.bread-w3ls .breadcrumb-item+.breadcrumb-item::before {
	    display: inline-block;
	    padding-right: 0.5rem;
	    padding-left: 0.5rem;
	    color: #555;
	    content: "/";
	}

	.bread-w3ls li.breadcrumb-item a {
	    color: #777;
	}

	.bread-w3ls nav a {
	    padding: 0;
	}

	/* //typography */
	/*--//typography--*/
	@media screen and (max-width: 600px) {}

	@media screen and (max-width: 480px) {}

	@media screen and (max-width: 375px) {}

	@media screen and (max-width: 320px) {}

	/*--/error--*/
	.error-w3pvt h3 {
	    font-size: 10em;
	    font-weight: bold;
	}

	.error-w3pvt h4 {
	    text-transform: uppercase;
	    font-size: 2em;
	    font-weight: lighter;
	    letter-spacing: 30px;
	}

	.error-w3pvt h5 {
	    text-transform: uppercase;
	    font-size: 1.2em;
	    margin: 1em 0;
	    font-weight: lighter;
	    letter-spacing: 4px;
	    color: #777;
	}

	/*--//error--*/

	@media screen and (max-width: 991px) {
	    .error-w3pvt h3 {
	        font-size: 7em;
	    }

	    .error-w3pvt h4 {
	        font-size: 1.1em;
	        letter-spacing: 11px;
	    }

	    .error-w3pvt h5 {
	        font-size: 1em;
	    }

	    .copy_right p {
	        font-size: 14px;
	        margin: 0;
	        margin-top: 0.5em;
	    }
	}

	@media screen and (max-width: 375px) {
	    .error-w3pvt h3 {
	        font-size: 6em;
	    }

	    .error-w3pvt h4 {
	        font-size: 1em;
	        letter-spacing: 11px;
	    }

	    .error-w3pvt h5 {
	        font-size: 0.9em;
	    }
	}

	@media screen and (max-width: 320px) {}

	/*-- footer --*/
	footer,
	.copy_right {
	    background: #222;
	}

	.footer-grids h4 {
	    color: #fff;
	    font-size: 1.2em;
	}

	.footer-grids h5 {
	    color: #666;
	}

	.footer-grids h5 span {
	    color: #feac00;
	}

	.footer-grids p,
	.footer-grids p a,
	.copyright p,
	.copyright p a {
	    font-size: 15px;
	    color: #777;
	    font-weight: normal;
	    letter-spacing: .5px;
	}

	.footer-grids ul li a {
	    font-size: 15px;
	    color: whitesmoke;
	    font-weight: normal;
	    letter-spacing: 1px;
	}

	.footer-grids ul li {
	    list-style-type: none;
	}

	.footer-grids input[type="email"] {
	    background: #fff;
	    box-shadow: none !important;
	    padding: 12px 15px;
	    color: #777;
	    font-size: 14px;
	    border: none;
	    letter-spacing: 1px;
	    outline: none;
	}

	.footer-grids button.btn {
	    background: #feac00;
	    color: #fff;
	    font-size: 14px;
	    letter-spacing: 1px;
	    padding: 12px;
	    display: inline-block;
	    border: none;
	    outline: none;
	    cursor: pointer;
	    border-radius: 0px;
	    -webkit-border-radius: 0px;
	    -moz-border-radius: 0px;
	    -ms-border-radius: 0px;
	    -o-border-radius: 0px;
	}

	h2 a.navbar-brand {
	    color: #fff;
	}

	.icon-social a {
	    color: #fff;
	    margin-right: 0.5em;
	}

	ul.list-info-wthree li a {
	    display: block;
	    margin: 1em 0;
	}

	ul.list-info-wthree li a:hover {
	    color: #555;

	}

	.ad-info p {
	    display: block;
	    margin: 1em 0;
	}

	.ad-info p span {
	    margin-right: 0.5em;
	}

	/*-- //footer --*/

	/*--/copy_right--*/


	.copy_right {
	    border-top: 1px solid rgba(221, 221, 221, 0.12);
	}

	.copy_right p a {
	    color: #fff;
	}

	.copy_right p a:hover {
	    opacity: .8;
	}

	.copy_right p {
	    letter-spacing: 1px;
	    font-size: 16px;
	    margin: 0;
	    color: #fff;
	    margin-top: 0.5em;
	}

	/*--//copy_right--*/
	/* /move-top */
	a.move-top span {
	    color: #ddd;
	    width: 36px;
	    height: 36px;
	    border: transparent;
	    background: transparent;
	}

	/* //move-top */
	/*--responsive--*/

	@media(max-width:1280px) {
	    .tooltip {
	        display: block;
	        position: absolute;
	        top: 0;
	        left: 8%;
	        padding: 0.2rem 0.5rem;
	    }

	    .hny-stats-inf {
	        margin: 6em auto 0;
	        width: 67%;
	    }

	    .date-post {
	        padding: 2em;
	    }

	    .banner-w3pvt-1,
	    .banner-w3pvt-2,
	    .banner-w3pvt-3,
	    .overlay-w3ls {
	        min-height: 700px;
	    }

	    .banner-hny-info {
	        padding: 14em 0 12em;
	    }

	    .banner-hny-info h3 {
	        font-size: 3.5em;
	    }
	}

	@media(max-width:1080px) {
	    .date-post {
	        padding: 1em;
	    }

	    .inner-w3pvt-page,
	    .overlay-innerpage {
	        min-height: 10em;
	    }

	}


	@media(max-width:1024px) {
	    .banner-hny-info {
	        padding: 11em 0 9em;
	    }

	    .banner-w3pvt-1,
	    .banner-w3pvt-2,
	    .banner-w3pvt-3,
	    .overlay-w3ls {
	        min-height: 656px;
	    }

	    .inner-w3pvt-page,
	    .overlay-innerpage {
	        min-height: 11em;
	    }
	}

	@media(max-width:991px) {
	    .hny-stats-inf {
	        margin: 6em auto 0;
	        width: 85%;
	    }

	    .featured_grid_right_info h4 {
	        font-size: 1em;
	    }

	    .date-post {
	        padding: 2em;
	    }

	    .con-gd .form-control {
	        margin: 1em 0;
	    }
	}


	@media(max-width:768px) {
	    .banner_bottom_left h4 {
	        font-size: 1.2em;
	    }

	    p {
	        font-size: 0.9em;
	    }
	}

	@media(max-width:767px) {

	    .inner-w3pvt-page,
	    .overlay-innerpage {
	        min-height: 10em;
	    }

	    .featured_grid_right_info,
	    .featured_grid_right_info {
	        text-align: center;
	        margin-top: 0.5em;
	    }

	    .team-gd {
	        margin-bottom: 1.5em;
	    }

	    .team-info h3 {
	        font-size: 1em;
	    }
	}

	@media(max-width:667px) {
	    .hny-stats-inf {
	        margin: 6em auto 0;
	        width: 95%;
	    }

	    .banner-w3pvt-1,
	    .banner-w3pvt-2,
	    .banner-w3pvt-3,
	    .overlay-w3ls {
	        min-height: 600px;
	    }

	    .banner-hny-info h3 {
	        font-size: 2.5em;
	    }

	    .banner-hny-info {
	        padding: 10em 0 5em;
	    }

	    .banner-hny-info h3 {
	        font-size: 2em;
	    }

	    .btn {
	        padding: 7px 23px;
	    }

	    .banner-hny-info {
	        padding: 8em 0 1em;
	    }

	    h3.tittle-w3ls,
	    h3.tittle-w3ls.two {
	        font-size: 2em;
	        letter-spacing: 1px;
	    }

	    p.sub-tittle {
	        font-size: 1em;
	    }

	    .copy_right p {
	        font-size: 14px;
	    }

	    .map-w3pvt iframe {
	        min-height: 200px;
	    }

	    .contact-hny-form textarea {
	        min-height: 130px;
	    }

	    h3.title-hny {
	        font-size: 1.4em;
	    }
	}

	@media(max-width:640px) {
	    h5.counter {
	        font-size: 1.5em;
	        margin: 0;
	    }

	    p.para-w3pvt {
	        font-size: 1em;
	        margin-left: 0.5em;
	    }

	    .banner-w3pvt-1,
	    .banner-w3pvt-2,
	    .banner-w3pvt-3,
	    .overlay-w3ls {
	        min-height: 550px;
	    }

	    .hny-stats-inf {
	        margin: 4em auto 0;
	        width: 95%;
	    }

	    .tooltip {
	        display: block;
	        position: absolute;
	        top: 0;
	        left: 50%;
	        padding: 0.2rem 0.5rem;
	    }

	    .banner-hny-info {
	        padding: 7em 0 1em;
	    }
	}

	@media(max-width:600px) {

	    .banner-w3pvt-1,
	    .banner-w3pvt-2,
	    .banner-w3pvt-3,
	    .overlay-w3ls {
	        min-height: 470px;
	    }

	    h3.tittle-w3ls,
	    h3.tittle-w3ls.two {
	        font-size: 1.8em;
	        letter-spacing: 1px;
	    }

	    .nav_w3pvt {
	        padding: 0 1em;
	    }
	    .inner-w3pvt-page-info {
	        padding-top: 5em;
	    }
	    .inner-w3pvt-page, .overlay-innerpage {
	        min-height: 7em;
	    }
	}

	@media(max-width:414px) {
	    .hny-stats-inf {
	        margin: 3em auto 0;
	        width: 95%;
	    }

	    .banner-w3pvt-1,
	    .banner-w3pvt-2,
	    .banner-w3pvt-3,
	    .overlay-w3ls {
	        min-height: 485px;
	    }

	    .nav_w3pvt {
	        margin-top: 1em;
	        padding: 0 1em;
	    }
	}

	@media(max-width:384px) {

	    h3.tittle-w3ls,
	    h3.tittle-w3ls.two {
	        font-size: 1.6em;
	    }

	    .banner-hny-info h3 {
	        font-size: 1.8em;
	    }

	    .banner-w3pvt-1,
	    .banner-w3pvt-2,
	    .banner-w3pvt-3,
	    .overlay-w3ls {
	        min-height: 430px;
	    }

	    .hny-stats-inf {
	        margin: 1em auto 0;
	        width: 95%;
	    }
	}

	@media(max-width:375px) {

	    h3.tittle-w3ls,
	    h3.tittle-w3ls.two {
	        font-size: 1.5em;
	    }

	    .banner-w3pvt-1,
	    .banner-w3pvt-2,
	    .banner-w3pvt-3,
	    .overlay-w3ls {
	        min-height: 395px;
	    }
	}

	@media(max-width:320px) {

	    .banner-w3pvt-1,
	    .banner-w3pvt-2,
	    .banner-w3pvt-3,
	    .overlay-w3ls {
	        min-height: 350px;
	    }

	    h3.tittle-w3ls,
	    h3.tittle-w3ls.two {
	        font-size: 1.4em;
	    }

	    .banner-hny-info h3 {
	        font-size: 1.6em;
	    }

	    .btn {
	        padding: 7px 20px;
	    }
	}

	/*--//responsive--*/
</style>