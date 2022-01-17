<?php
require 'flight/Flight.php';



Flight::set('flight.views.path', 'tests/views');
Flight::set('layout', 'layout/default');

Flight::route('/', function(){
Flight::render('hello');
});

// Flight::route('/user/[0-9]+', function(){
//      echo "This will match /user/1234";
//  });

Flight::route('/products/@id', function($id){
  Flight::render('products',array('id'=>$id));
});
 
Flight::route('/submit/@id', function($id){
     Flight::render('submit',array('id'=>$id));
   });

   Flight::route('/thankyou/@id', function($id){
    Flight::render('thankyou',array('id'=>$id));
  });


Flight::start();
