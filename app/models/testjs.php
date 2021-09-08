<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<script
			  src="https://code.jquery.com/jquery-3.6.0.min.js"
			  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
			  crossorigin="anonymous"></script>
  <script>
  /*$.ajax({
      method: "GET",
      url: "test.php",
      // data: { name: "John", location: "Boston" },
      dataType: "json"
    })
    .done(function( msg ) {
      console.log(msg)
    }).fail(function(error) {
      console.log(error)
    })
    .always(function() {
      
    });*/


  let xhr = new XMLHttpRequest();
  xhr.open('GET', './test.php');
  xhr.send();
  xhr.responseType = 'json';
  xhr.onload = function() {
      if(xhr.status != 200) {
          console.log('error not 200');
      } else {
          let data = xhr.response;
          console.log(data);
          data.forEach((res) => {
              console.log(Object.values(res));
          })
      }
  };

  xhr.onerror = function (e) {
      console.log('fail');
  }


  </script>
</body>
</html>