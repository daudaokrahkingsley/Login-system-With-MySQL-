<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <title>Login Area</title>
  </head>
  <style>
    body {
      background-color: skyblue;
      font-family: Arial, Helvetica, sans-serif;
    }

    .box {
      background-color: white;
      width: 25%;
      height: 50%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      border-radius: 4px;
    }

    .box h4 {
      text-align: center;
      color: blue;
    }
  </style>

  <body>
    <form action="validate.php" method="post">
      <div class="box">
        <h4>LOGIN AREA</h4>

        <input
          type="text"
          placeholder="Enter UserName" name="username"
          style="
            margin-left: 20%;
            padding-top: 3%;
            text-align: center;
            margin-top: 10%;
          "
        /><br /><br />
        <input
          type="password" name="password"
          placeholder="Enter Password"
          style="
            margin-left: 20%;
            padding-top: 3%;
            text-align: center;
            margin-top: 10%;
          "
        />
        <br />

        <button
          type="submit"
          class="btn btn-primary"
          style="
            margin-left: 20%;
            padding-top: 3%;
            text-align: center;
            margin-top: 10%;
          "
          name=" login"
        >
          Submit
        </button>
      </div>
    </form>
  </body>
</html>
