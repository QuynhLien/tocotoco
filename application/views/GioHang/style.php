<style>
    #continous {
        color: #4bc3d6;
        font-size: small;
        font-style: italic;
        text-decoration: underline;
    }
    .form-control {
        border: none;
        border-bottom: 1px solid #c7b180;
        border-radius: 0;
        padding: 0px 12px;
        padding-top: 6px;
        box-shadow: none;
        font-weight: 16px;
    }
    input:focus {
        border: none;
    }
    .title-cart h3 {
        font-size: 38px;
        letter-spacing: 1.4px;
        color: #d3b673;
        text-transform: uppercase;
        margin-bottom: 20px;
        font-weight: 500;
        font-family: "Baloo", Helvetica, Arial, sans-serif;
    }

    .table td {
        vertical-align: middle;
    }

    .total {
        color: #8a733f;
        font-weight: 600;
        text-align: right;
    }

    .quantity {
        position: relative;
        width: 20%;
    }

    .quantity input {
        width: 50%;
        height: 100%;
        text-align: center;
        border: 1px solid #d3b673;
        position: relative;
    }

    input[type=number]::-webkit-inner-spin-button {
        -webkit-appearance: none;
    }

    #btn-quantity {
        width: 20%;
        height: 99%;
        padding: 0;

        background-color: #d3b673;
        border: 1px solid #d3b673;
        color: white;
        font-size: 13px;
        text-align: center;        
        cursor: pointer;
        transition-duration: 0.4s;
    }

    #btn-quantity:hover {
        background-color: #bea467;
    }

    #btn-quantity:active {
        background: none;
    }

    .btn-del {
        color: #bea467;
        cursor: pointer;
        transition-duration: 0.4s;
    }

    .btn-del:hover {
        color: black;
    }

    .btn-del:active {
        color: white;
    }

    .btn-pay {
        border: none;
        box-shadow: none;
        background: #bea467;
        border-radius: 30px;
        padding: 10px 70px;
        font-size: 20px;
        cursor: pointer;
        transition-duration: 0.4s;
    }

    a.btn-pay {
        color: white !important;
    }

    .btn-pay:hover {
        background-color: #d3b673;
    }

    .btn-pay:active {
        background: none;
    }

    /*.btn-minus-cart {
        position: absolute;
        top: 40%;
        bottom: 40%;
        width: 20px;
    }

    .btn-plus-cart {
        padding: 2.5px;
        top: -1px;
        position: inherit;*/
    }
</style>