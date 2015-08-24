<?php

return array(

//set your paypal credential
	'client_id'=> 'AUnWWrvQabbRXdEWapBlILvlVqIERiqQavJWWw7jPNk5jYb3ijwsL_F5WpbTn_09LieJjQOsn6XuW5T4' ,
  'secret'=> 'EIvgRcHMgW_sX6tPgvWvYlaIqdZBdheP6Dd09s8wch6OQo10O2qaR0a67PhEGGw8mYhhc9aYyp9CLixI',

		/**
     * SDK configuration
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);


 ?>
