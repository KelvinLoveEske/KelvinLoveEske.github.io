<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // // Retrieve form data
    // $name = $_POST["name"];
    // $email = $_POST["email"];
    // $message = $_POST["message"];

    // // Display the submitted data
    // echo "Name: " . $name . "<br>";
    // echo "Email: " . $email . "<br>";
    // echo "Message: " . $message . "<br>";
    $postArray = array(
        "name" => $_POST['name'],
        "email" => $_POST['email'],
        "messsage" => $_POST['message']
        // "asset" => array(
        //    "media" => $_POST["media"],
        //    "caption" => $_POST['caption']
        //   )
      ); //you might need to process any other post fields you have..
  
  $json = json_encode($postArray);
  // make sure there were no problems
  //if( json_last_error() != JSON_ERROR_NONE ){
      //exit;  // do your error handling here instead of exiting
  // }
  $file = 'entries.json';
  // write to file
  //   note: _server_ path, NOT "web address (url)"!
  file_put_contents( $file, $json, FILE_APPEND);
  header("Location: index.html");
}

// check if a form was submitted
// if( !empty( $_POST ) ){

//     // convert form data to json format
//         $postArray = array(
//           "startDate" => $_POST['startDate'],
//           "headline" => $_POST['headline'],
//           "text" => $_POST['text'],
//           "asset" => array(
//              "media" => $_POST["media"],
//              "caption" => $_POST['caption']
//             )
//         ); //you might need to process any other post fields you have..
    
//     $json = json_encode( $postArray );
//     // make sure there were no problems
//     //if( json_last_error() != JSON_ERROR_NONE ){
//         //exit;  // do your error handling here instead of exiting
//     // }
//     $file = 'entries.json';
//     // write to file
//     //   note: _server_ path, NOT "web address (url)"!
//     file_put_contents( $file, $json, FILE_APPEND);
?>