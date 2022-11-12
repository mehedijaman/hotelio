<?php

    return [
        
        /**
         * SANDBOX MODE
         * --------------------------------
         * By default it is binded with APP_DEBUG 
         * If app.debug is true, sandbox is also true
         * 
         */

        'sandbox' => env('APP_DEBUG', true),

        /**
         * CREDENTIALS
         * --------------------------------
         * The API credentials given from SSLCommerz
         * 
         */

        'store' => [
            'id'          =>  env('SSLC_STORE_ID'),
            'password'    =>  env('SSLC_STORE_PASSWORD'),
            'currency'    =>  env('SSLC_STORE_CURRENCY'),
        ],

        /**
         * REDIRECT URL's
         * --------------------------------
         * The URL Redirection after success/failure/cancel
         * USE route name()
         * DO NOT USE route url()
         */

        'route' => [
            'success'   =>  env('SSLC_ROUTE_SUCCESS','sslc.success'),
            'failure'   =>  env('SSLC_ROUTE_FAILURE','sslc.failure'),
            'cancel'    =>  env('SSLC_ROUTE_CANCEL','sslc.cancel'),
            'ipn'       =>  env('SSLC_ROUTE_IPN','sslc.ipn'),
        ],

        /**
         * STRICT PAYMENT GATEWAY
         * --------------------------------
         * Strict your payment gateway. Leave is NULL if
         * you want to enable all available gateways
         * 
         * List of gateways
         *  brac_visa= BRAC VISA
         *  dbbl_visa= Dutch Bangla VISA
         *  city_visa= City Bank Visa
         *  ebl_visa = EBL Visa
         *  sbl_visa = Southeast Bank Visa
         *  brac_master  = BRAC MASTER
         *  dbbl_master  = MASTER Dutch-Bangla
         *  city_master  = City Master Card
         *  ebl_maste= EBL Master Card
         *  sbl_maste= Southeast Bank Master Card
         *  city_amex= City Bank AMEX
         *  qcash= QCash
         *  dbbl_nexu= DBBL Nexus
         *  bankasia = Bank Asia IB
         *  abban= AB Bank IB
         *  ibbl = IBBL IB and Mobile Banking
         *  mtbl = Mutual Trust Bank IB
         *  bkash= Bkash Mobile Banking
         *  dbblmobilebanking= DBBL Mobile Banking
         *  city = City Touch IB
         *  upay = Upay
         *  tapnpay  = Tap N Pay Gateway
         * 
         * GROUP GATEWAY
         *  internetbank = For all internet banking
         *  mobileban= For all mobile banking
         *  othercard= For all cards except visa,master and amex
         *  visacard = For all visa
         *  mastercar= For All Master card
         *  amexcard = For Amex Card
         */

        'gateway'  => null,

        /**
         * DEFAULT SYSTEM PRODUCT PROFILE
         * --------------------------------
         * Product profile required from SSLC
         * By default it is "general"
         * 
         * AVAILABLE PROFILES
         *  general
         *  physical-goods
         *  non-physical-goods
         *  airline-tickets
         *  travel-vertical
         *  telecom-vertical
         * 
         */

        'product_profile' => 'general',

        /**
         * ALLOW FROM LOCALHOST
         * --------------------------------
         * Set TRUE if you are in development mode,
         * or you have localhost based application,
         * otherwise FALSE in production
         */

        'localhost' => env('SSLC_ALLOW_LOCALHOST',true),

        /**
         * PATHS
         * --------------------------------
         * Default paths of the sslcommerz system
         * Do not change if necessary
         * 
         */

        'path' => [
            'domain'    => [
                'sandbox'   => 'https://sandbox.sslcommerz.com',
                'live'      => 'https://securepay.sslcommerz.com'
            ],
            'endpoint'  => [
                'make_payment'          =>  '/gwprocess/v4/api.php',
                'transaction_status'    =>  '/validator/api/merchantTransIDvalidationAPI.php',
                'order_validate'        =>  '/validator/api/validationserverAPI.php',
                'refund_payment'        =>  '/validator/api/merchantTransIDvalidationAPI.php',
                'refund_status'         =>  '/validator/api/merchantTransIDvalidationAPI.php',
            ]
        ]
    ];