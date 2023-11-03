<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="contact.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../header-footer/css/header.css">
  <link rel="stylesheet" href="../header-footer/css/footer.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Contact</title>
  </head>
  <body>
  <header>
        <?php include_once "../header-footer/header.php"; ?>
      </header>
    <div class="page">
     
      <div class="bloc1">
        <img id="imgn1" src="https://picsum.photos/600/200" alt="contact" />
        <div class="text">
          <h1>Contact</h1>
        </div>
      </div>

      <div class="bloc2">
        <div class="form">
          <div class="form1">
            <label for="|">
              Firstname : <br />
              <input type="text" name="" id="" />
            </label>
            <label for="">
              Lastname : <br />
              <input type="text" name="" id="" />
            </label>
            <label for="email">
              Email : <br />
              <input type="text" name="" id="" />
            </label>
            <label>
              Nearest agency : <br />
              <input type="text" name="" id="" />
            </label>
          </div>

          <div class="blockmsg">
            <label for="msg">
              Message : <br />
              <input id="msg" type="text" name="" id="" />
            </label>
          </div>
          <div class="btn2">
            <button id="button2" >Send</button>
          </div>
        </div>
        <div class="info">
          <div class="adresse">
            <h2>Adresse</h2>
            <p>
              15 rue de la blabla <br />
              75166 , Quelque-part <br />
              FRANCE <br />
              -33 7778888 <br />
            </p>
            <p id="other">other adresses</p>
          </div>
          <div class="information">
            <h2>Information</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum,
              culpa nulla eveniet voluptatem vero odit iste voluptatibus
              quibusdam deserunt iure?
            </p>
          </div>
        </div>
      </div>
      
    </div>
    <header>
      <?php include_once "../header-footer/footer.php"; ?>
    </header>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  </body>
</html>
