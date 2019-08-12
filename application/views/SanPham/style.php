<style type="text/css">
    .section-title h4 {
        font-size: 28px;
        letter-spacing: 1.4px;
        color: #282828;
        text-transform: uppercase;
        margin-bottom: 0;
        font-weight: 500;
        font-family: "Baloo", Helvetica, Arial, sans-serif;
    }
    
    #img-detail {
        /*display: block;*/
        margin-left: auto;
        margin-right: auto;
        width: 100%;
    }

    #title-detail {
        font-size: 28px;
        text-transform: uppercase;
        font-family: Muli, sans-serif;
        font-weight: 800;
    }

    #price-detail {
        color: #d3b673;
        font-size: 28px;
    }

    #btn-buy {
        background: #d3b673;
        border: 1px solid #d3b673;
        padding: 5px 46px;
        color: white;
        text-transform: uppercase;
        font-weight: 800;
        position: absolute;
        top: 0;
        bottom: 0;
    }

    .quantity {
        position: relative;
    }

    .quantity input {
        width: 50%;
        height: 100%;
        text-align: center;
        border: 1px solid #d3b673;
    }

    input[type=number]::-webkit-inner-spin-button {
        -webkit-appearance: none;
    }

    #btn-quantity {
        width: 20%;
        height: 99%;
        background-color: #d3b673;
        border: 1px solid #d3b673;
        color: white;
        font-size: 13px;
        text-align: center;
        padding: 0;
        cursor: pointer;
        transition-duration: 0.4s;
    }

    #btn-quantity:hover {
        background-color: #bea467;
    }

    #btn-quantity:active {
        background: none;
    }

    #btn-cart {
        width: auto;
        height: 100%;
        border: 1px solid #d3b673;
        color: #d3b673;
        text-align: center;
        background: none;
        font-size: 22px;
        padding: 0 10px;
        cursor: pointer;
        transition-duration: 0.4s;
    }

    #btn-cart:hover {
        background-color: #d3b673;
        color: white;
    }

    #btn-cart:active {
        background: none;
    }

    .popup_cart {
        position: relative;
        display: inline-block;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* The actual popup_cart */
    .popup_cart .popuptext {
        visibility: hidden;
        width: 160px;
        background-color: #555;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 8px 0;
        position: absolute;
        z-index: 1;
        bottom: 125%;
        left: 50%;
        margin-left: -80px;
    }

    /* Popup_cart arrow */
    .popup_cart .popuptext::after {
        content: "";
        position: absolute;
        top: 100%;
        left: 50%;
        margin-left: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: #555 transparent transparent transparent;
    }

    /* Toggle this class - hide and show the popup_cart */
    .popup_cart .show {
        visibility: visible;
        -webkit-animation: fadeIn 1s;
        animation: fadeIn 1s;
    }

    /* Add animation (fade in the popup_cart) */
    @-webkit-keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    .pd-left0 {
        padding-left: 0 !important;
    }

    .grid-uniform {
        list-style: none;
        margin: 0;
        padding: 0;
        margin-left: -30px;
    }

    .large--one-third {
        width: 33.333%;
    }

    .grid-uniform {
        list-style: none;
    }

    .grid__item {
        box-sizing: border-box;
        float: left;
        min-height: 1px;
        padding-left: 30px;
        vertical-align: top;
    }

    .product-item {
        position: relative;
        overflow: hidden;
        box-shadow: 0px 2px 1.5px 0px #ccc;
        border-top: 1px solid #f1f1f1;
        margin-bottom: 30px;
    }

    .product-item .product-img {
        position: relative;
    }

    .product-item .product-img a {
        display: block;
    }

    a, .text-link {
        color: #282828;
        text-decoration: none;
        background: transparent;
    }

    .product-item .product-img a img:hover {
        width: 100%;
        transition: all 0.3s;
        -webkit-transform: scale(1.5);
        transform: scale(1.5);
    }

    img {
        vertical-align: middle;
    }

    img, iframe {
        max-width: 100%;
    }

    img {
        border: 0 none;
    }

    .product-item .product-img .product-tags1 {
        position: absolute;
        top: 10px;
        left: 10px;
        z-index: 1;
    }

    .product-item .product-img .product-tags {
        position: absolute;
        top: 10px;
        right: 10px;
        z-index: 1;
    }

    .product-item .product-info {
        text-align: center;
        background: #fafafa;
        padding-top: 10px;
        padding-bottom: 10px;
        transform: translateY(50px);
    }

    .product-item .product-info:hover {
        transition: all 0.3s ease;
        transform: translateY(0);
    }

    .product-item .product-info .product-title a {
        color: black;
        display: inline-block;
        height: 48px;
        text-transform: uppercase;
    }

    .product-item .product-info .product-price {
        margin: 5px 0px 10px;
    }

    .product-item .product-info .product-price span.current-price {
        color: #d3b673;
    }

    .product-item .product-info .product-price span.current-price {
        font-family: Muli, sans-serif !important;
        font-weight: bold !important;
    }

    .product-item .product-info .product-price span {
        transition: all 0.3s ease;
    }

    .product-item .product-info {
        text-align: center;
    }

    .clearfix:after {
        content: '';
        display: table;
        clear: both;
    }

    *, input, :before, :after {
        box-sizing: border-box;
    }

    .text-center {
        text-align: center !important;
    }

    .product-item .product-info .product-actions button.btn-buyNow {
        padding: 0px 15px;
        background: #d3b673;
        text-transform: uppercase;
        color: #fff;
        font-size: 14px;
    }

    .product-item .product-info .product-actions button {
        display: inline-block;
        height: 35px;
        margin: 0px 3px;
        color: #d3b673;
        border: 1px solid;
        line-height: 35px;
    }

    .product-item .product-info .product-actions button {
        transition: all 0.3s ease;
    }

    body button, body h1, body h2, body h3 {
        line-height: normal;
        font-weight: normal;
    }

    button, input, textarea {
        outline: 0;
    }

    button, input[type="submit"] {
        cursor: pointer;
    }

    button {
        background: none;
        border: none;
        display: inline-block;
        cursor: pointer;
    }

    button, input, textarea {
        -webkit-appearance: none;
        -moz-appearance: none;
    }

    button {
        background: none;
        border: none;
        cursor: pointer;
    }

    input, textarea, button, select {
        padding: 0;
        margin: 0;
        -webkit-user-select: text;
        -moz-user-select: text;
        -ms-user-select: text;
        user-select: text;
    }

    button {
        overflow: visible;
    }

    body, input, textarea, button, select {
        font-size: 16px;
        line-height: 1.6;
        font-family: Muli, sans-serif;
        color: #333333;
        font-weight: 300;
        -webkit-font-smoothing: antialiased;
        -webkit-text-size-adjust: 100%;
    }

    button {
        align-items: flex-start;
        text-align: center;
        cursor: default;
        color: buttontext;
        background-color: buttonface;
        box-sizing: border-box;
        padding: 2px 6px 3px;
        border-width: 2px;
        border-style: outset;
        border-color: buttonface;
        border-image: initial;
    }

    button {
        text-rendering: auto;
        color: initial;
        letter-spacing: normal;
        word-spacing: normal;
        text-transform: none;
        text-indent: 0px;
        text-shadow: none;
        display: inline-block;
        text-align: start;
        margin: 0em;
        font: 400 13.3333px Arial;
    }

    button {
        -webkit-writing-mode: horizontal-tb !important;
    }

    .product-item .product-info .product-actions button.btn-buyNow a {
        color: #fff;
    }

    .product-item .product-info .product-actions button.btn-buyNow {
        padding: 0px 15px;
        background: #d3b673;
        text-transform: uppercase;
        color: #fff;
        font-size: 14px;
    }

    .product-item .product-info .product-actions button {
        display: inline-block;
        height: 35px;
        margin: 0px 3px;
        color: #d3b673;
        border: 1px solid;
        line-height: 35px;
    }

    .product-item .product-info .product-actions button.btn-quickview, .product-item .product-info .product-actions button.btn-addToCart {
        padding: 0 5px;
        text-transform: uppercase;
        font-size: 14px;
        background: #fefcfc;
    }

    .product-item .product-info .product-actions button {
        display: inline-block;
        height: 35px;
        margin: 0px 3px;
        color: #d3b673;
        border: 1px solid;
        line-height: 35px;
    }

    .product-item .product-info .product-actions button.btn-quickview a, .product-item .product-info .product-actions button.btn-addToCart a {
        color: #d3b673;
    }

    .product-item .product-info .product-actions button:hover {
        color: #fff;
    }

    .clearfix:after {
        content: '';
        display: table;
        clear: both;
    }

    .clearfix::after {
        display: block;
        clear: both;
        content: "";
    }

    @keyframes fadeInUp {
        0% {
            opacity: 0;
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0)
        }
        to {
            opacity: 1;
            -webkit-transform: none;
            transform: none
        }
    }

    .fadeInUp {
        -webkit-animation-name: fadeInUp;
        animation-name: fadeInUp
    }

    .product-item .product-info .product-actions button.btn-quickview:hover a, .product-item .product-info .product-actions button.btn-addToCart:hover a {
        color: #282828;
    }


    .product-item .product-info .product-actions button.btn-buyNow:hover {
        background: #282828;
        color: #fff;
    }

    .product-item .product-info .product-actions button:hover {
        border: 1px solid #282828;
    }
</style>