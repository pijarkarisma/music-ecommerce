<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>

<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">
      
        <div class="row">
          <div class="col-50">
            <br>
            <br>
            <table style="width:100%">
                <tr>
                    
                  </tr>
                <tr>
                  <th><img src="/img/A1.jpg" alt="" class=""></th>
                  <th>Product Name</th>
                  <td>Qty:1</td>
                  <td>Rp1.0000.000</td>

                </tr>

              </table>
              <br>
              <br>
              <table style="width:100%">
                <tr>
                    
                  </tr>
                <tr>
                  <th><img src="/img/A1.jpg" alt="" class=""></th>
                  <th>Product Name</th>
                  <td>Qty:1</td>
                  <td>Rp1.0000.000</td>

                </tr>

              </table>
              <br>
              <br>
              <hr style="width:470px;height:5px;border-width:0;color:rgb(8, 6, 6);background-color:rgb(5, 4, 4)">
              <br>
              <br>

              <table style="width:100%">
                <tr>
                    
                  </tr>
                <tr>
                  <th><img src="/img/A1.jpg" alt="" class=""></th>
                  <th>Product Name</th>
                  <td>Qty:1</td>
                  <td>Rp1.0000.000</td>

                </tr>

              </table>
              <br>
              <br>
              <table style="width:100%">
                <tr>
                    
                  </tr>
                <tr>
                  <th><img src="/img/A1.jpg" alt="" class=""></th>
                  <th>Product Name</th>
                  <td>Qty:1</td>
                  <td>Rp1.0000.000</td>

                </tr>

              </table>
          </div>
          
          <div class="col-50">
            
          
          </div>
          
        </div>
        <div style="text-align:center;">
            <input type="submit" value="Place My Order" class="btn" style="width: 250px;
        height: 50px;text-align:center;">
        </div>
      </form>
    </div>
  </div>
  <div class="col-25">
   
  </div>
</div>

</body>
</html>
