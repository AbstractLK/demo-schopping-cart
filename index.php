
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
</head>
  <body>
    <div class="container">
    <div class="flex items-center" style="font-family: 'Muli', sans-serif">
      <div id="product-container" class="container ml-auto mr-auto flex flex-wrap items-start">
        <div
          class="w-full pl-5 lg:pl-2 mb-4 mt-4 bg-purple-600 p-4 text-center"
        >
          <h1
            class="text-3xl lg:text-4xl text-gray-700 font-extrabold text-white"
          >
            My Store
          </h1>
        </div>
<?php
include("dbconnection.php");

$conn  = getDbConnection();

$sql = "SELECT title, price, thumbnail FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {  
    echo
    "<div class='w-full md:w-1/2 lg:w-1/4 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2'>
  <div
    class='bg-white rounded-lg m-h-64 p-2 transform hover:translate-y-2 hover:shadow-xl transition duration-300'
  >
    <figure class='mb-2'>
      <img
        src='" . $row["thumbnail"]. "'
        alt=''
        class='h-64 ml-auto mr-auto'
      />
    </figure>
    <div class='rounded-lg p-4 bg-purple-700 flex flex-col'>
      <div>
        <h5 class='text-white text-2xl font-bold leading-none'>
        " . $row["title"]. "
        </h5>
        
      </div>
      <div class='flex items-center'>
        <div class='text-lg text-white font-light'>$" . $row["price"]. "</div>
        <button onclick='addToCart()'
          href='javascript:;'
          class='rounded-full bg-purple-900 text-white hover:bg-white hover:text-purple-900 hover:shadow-xl focus:outline-none w-10 h-10 flex ml-auto transition duration-300'
        >
          <svg
            xmlns='http://www.w3.org/2000/svg'
            width='24'
            height='24'
            viewBox='0 0 24 24'
            fill='none'
            stroke='currentColor'
            stroke-width='2'
            stroke-linecap='round'
            stroke-linejoin='round'
            class='stroke-current m-auto'
          >
            <line x1='12' y1='5' x2='12' y2='19'></line>
            <line x1='5' y1='12' x2='19' y2='12'></line>
          </svg>
        </button>
      </div>
    </div>
  </div>
</div>";
  }
} else {
  echo '0 results';
}
$conn->close();
?>
 </div>
</div>
            <div class="" style="font-family: 'Muli', sans-serif">

            <div class="row">
            <hr>
            </div>
            <div class="row bg-warning">
                <div class="w-full pl-5 lg:pl-2 mb-4 mt-4 bg-orange-500 p-4 text-center">
                  <h1 class="text-3xl lg:text-4xl text-gray-700 font-extrabold text-white">
                    My Cart <i class="fa-solid fa-cart-shopping"></i>
                  </h1> 
                </div>
            </div>
            <div class="row bg-warning">
                <div class="col-md-2">
                    <img src="Assets/cart.png" style="width: 80px; margin-left: 30px; margin-bottom: 30px;">
                </div>
                <div class="col-md-8">
                    <h5>--Items--</h5>
                    <ol id="list"></ol>
                </div>
                <div class="col-md-2"></div>
            </div>
            <br>

            </div>







            







            <!-- <?php require("footer.php") ?> -->
  </div>

  </body>
</html>