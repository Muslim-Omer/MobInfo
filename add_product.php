<!DOCTYPE html>
<html>
  <head>
    <title>Add Produts</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      html, body {
      min-height: 100%;
      padding: 0;
      margin: 0;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
	     background: linear-gradient(45deg, #49a09d, #5f2c82);
      }
      h1 {
      margin: 0 0 20px;
      font-weight: 400;
      color: #1c87c9;
      }
      p {
      margin: 0 0 5px;
      }
      .main-block {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      min-height: 100vh;

      }
      form {
      padding: 25px;
      margin: 25px;
      box-shadow: 0 2px 5px #f5f5f5;
      background: #f5f5f5;
      }
      .fas {
      margin: 25px 10px 0;
      font-size: 72px;
      color: #fff;
      }
      .fa-envelope {
      transform: rotate(-20deg);
      }
      .fa-at , .fa-mail-bulk{
      transform: rotate(10deg);
      }
      input, textarea {
      width: calc(100% - 18px);
      padding: 8px;
      margin-bottom: 20px;
      border: 1px solid #1c87c9;
      outline: none;
      }
      input::placeholder {
      color: #666;
      }
      button {
      width: 100%;
      padding: 10px;
      border: none;
      background: #1c87c9;
      font-size: 16px;
      font-weight: 400;
      color: #fff;
      }
      button:hover {
      background: #2371a0;
      }
      @media (min-width: 568px) {
      .main-block {
      flex-direction: row;
      }
      .left-part, form {
      width: 50%;
      }
      .fa-envelope {
      margin-top: 0;
      margin-left: 20%;
      }
      .fa-at {
      margin-top: -10%;
      margin-left: 65%;
      }
      .fa-mail-bulk {
      margin-top: 2%;
      margin-left: 28%;
      }
      }
    </style>
  </head>
  <body>
    <div class="main-block">

    <center>
      <form action="/">
        <h1>Add Product</h1>
        <div class="info">

          <input class="fname" type="text" name="product_name" placeholder="Product Name">
          <input class="fname" type="text" name="lunch" placeholder="Lunch (years)">

          <input class="fname" type="text" name="size" placeholder=" Size">

          <input class="fname" type="text" name="cpu" placeholder=" CPU">
          <input class="fname" type="text" name="gpu" placeholder=" GPU">

          <input class="fname" type="text" name="internal_memory" placeholder=" internal Memory">

          <input class="fname" type="text" name="dual_camera" placeholder=" Dual Camera">
          <input class="fname" type="text" name="video_camera" placeholder=" Video Camera">

          <input class="fname" type="text" name="single_selfie" placeholder=" single selfie">
          <input class="fname" type="text" name="video_selfie" placeholder=" Video Selfie">

          <input class="fname" type="text" name="battry" placeholder=" Battry Type">

          <input class="fname" type="text" name="picture" placeholder="Link Picture">

        </div>

        <button type="submit" name="add_product" href="/">Add Product</button>
      </form>
    </center>
    </div>
  </body>
</html>
