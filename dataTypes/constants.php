<?php 
    
    /**
     * We can define constants in two different ways:
     *      1. define(name, value)
     *      2. const name = value
     * 
     *  Differences:
     *      1. const defines constants at compile time, whereas define() defines them at run time.
     *      2. we can't use the const keyword to declare constant in conditional blocks, while with the define we can achive that
     *      3. const accepts a static scalar(number, string or other constants like true, false, null, __FILE__), whereas define() takes any expression.
     *      4. const can also be utilized within a class or interface to declare a class constant or interface constant, while define() can't be utilized for this reason.
     *      
     */
        
    //  Example1:
        // for($i=0; $i<3; $i++){
        //     // const item = $i;     // will return a php Parse Error;
        //     define("HAI","bye");    // valid
        // }
        // echo HAI; // Printed with a PHP warning

    //  Example2:
            // function db(){
            //     // const item = 6; // will return a php Parse Error;
            //     define("HAI","bye");    // valid
            //     echo HAI;
            // }
            // echo HAI;   // Produce a Fatal Error when a constant is called before it's initialization.
            // db();
            // echo HAI; // Valid. Because this constant is called after initialization with the method db();

    //  Example3: 
            // if(true){
            //     // const item = 4; // will return a php Syntax Error;
            //     define("HAI","bye");    // valid
            // }else{
            //     define("ELS","bye");
            // }
            // echo HAI;  // valid
            // echo ELS;  // Fatal Error not defined.


    //  Example4: 
        // class abc{
        //     // const ITEM = 2;  //valid
        //     // define("HAI", "bye"); // Parse Error    

        //     function dbc(){
        //         // const ITEM = 2;  // Invalid
        //         define("HAI", "bye"); // Valid  
        //     }
        // }

        // echo HAI; // invalid
        // $cls = new abc();
        // $cls->dbc();
        // echo HAI;   // Valid
?>