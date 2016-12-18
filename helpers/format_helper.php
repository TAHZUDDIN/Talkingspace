<?php 

/*
  Format Date
*/

 function formatDate($date)
 {
 	$date = date("F j, Y, g:i a",strtotime($date));
 	return $date;
 } 


/*
   URL Format

*/

   function urlFormat($str)
   {

     //Strip out all whitespaces
   	$str = preg_replace('/\s+/', '', $str);


   	//Convert the string to all lowercase
   	$str = strtolower($str);


   	//Url Encode
   	$str = urlencode($str);

   	return $str;
   }




/*
   Add classname active if category is active

*/

   function is_active($category)
   {

    if(isset($_GET['category']))
      {

        if($_GET['category'] == $category)
        {
          return 'active';
        }
        else
        {
          return '';
        }

      }
      else
      {
        if($category == null)
        {
          return 'active';
        }
      }
       

   }

   

?>