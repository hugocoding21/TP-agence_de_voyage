<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="../header-footer/css/header.css">
  <link rel="stylesheet" href="../header-footer/css/footer.css">
  <title>home</title>
  <link rel="stylesheet" href="home.css" />
</head>

<body>
  <!-- navbar here -->
  <header>
    <?php include_once "../header-footer/header.php"; ?>
  </header>

  <div class="page">
    <!-- first component -->
    <div class="first-component">
      <div class="find">
        <h2>Find your holidays</h2>
        <br />
        <div class="dest">
          <label for="from">
            From :
            <br /><input type="text" name="from" id="from" class="find-input" placeholder="Paris" />
          </label>
          <label for="to">
            To : <br />
            <input type="text" name="to" id="to" class="find-input" placeholder="Malte" />
          </label>
        </div>
        <div class="time">
          <label for="from">
            Date : <br />
            <input type="date" name="from" id="from" class="find-input" placeholder="" />
          </label>
          <label for="duration">Duration :<br />

            <select name="duration" id="duration" class="select">
              <option value="choose a date">
                -- pick your stay duration --
              </option>
              <option value="3 days">3 days</option>
              <option value="4 days">4 days</option>
              <option value="5 days">5 days</option>
              <option value="6 days">6 days</option>
              <option value="7 days">7 days</option>
            </select>
          </label>
        </div>
        <div class="btn">
          <button>Find !</button>
        </div>
      </div>
      <div class="deal">
        <img id="img-deal" src="https://picsum.photos/300/200" alt="" />

        <div class="text-titre">
          <h1>Deal of the day</h1>
        </div>
        <div class="text-img1">
          <h2>Amsterdam</h2>
          <p>Hotel Calypso</p>
          <p>1 week</p>
        </div>
        <div class="prix">
          <p>150€</p>
        </div>
      </div>
    </div>
    <div class="top">
      <h1>Top destinations</h1>
    </div>
    <div class="destination">
      <div class="dest-img">
        <img class="img" src="https://picsum.photos/300/200" alt="" />
        <div class="text-titre">
          <p class="titledest">Sydney</p>
        </div>
        <div class="text-img">
          <p>Hotel Calypso</p>
          <p>1 week</p>
        </div>
        <div class="prix">
          <p>150€</p>
        </div>
      </div>
      <div class="dest-img">
        <img class="img" src="https://picsum.photos/300/200" alt="" />
        <div class="text-titre">
          <p class="titledest">Sydney</p>
        </div>
        <div class="text-img">
          <p>Hotel Calypso</p>
          <p>1 week</p>
        </div>
        <div class="prix">
          <p>150€</p>
        </div>
      </div>
      <div class="dest-img">
        <img class="img" src="https://picsum.photos/300/200" alt="" />
        <div class="text-titre">
          <p class="titledest">Sydney</p>
        </div>
        <div class="text-img">
          <p>Hotel Calypso</p>
          <p>1 week</p>
        </div>
        <div class="prix">
          <p>150€</p>
        </div>
      </div>
      <div class="dest-img">
        <img class="img" src="https://picsum.photos/300/200" alt="" />
        <div class="text-titre">
          <p class="titledest">Sydney</p>
        </div>
        <div class="text-img">
          <p>Hotel Calypso</p>
          <p>1 week</p>
        </div>
        <div class="prix">
          <p>150€</p>
        </div>
      </div>
      <div class="dest-img">
        <img class="img" src="https://picsum.photos/300/200" alt="" />
        <div class="text-titre">
          <p class="titledest">Sydney</p>
        </div>
        <div class="text-img">
          <p>Hotel Calypso</p>
          <p>1 week</p>
        </div>
        <div class="prix">
          <p>150€</p>
        </div>
      </div>
      <div class="dest-img">
        <img class="img" src="https://picsum.photos/300/200" alt="" />
        <div class="text-titre">
          <p class="titledest">Sydney</p>
        </div>
        <div class="text-img">
          <p>Hotel Calypso</p>
          <p>1 week</p>
        </div>
        <div class="prix">
          <p>150€</p>
        </div>
      </div>
      <div class="dest-img">
        <img class="img" src="https://picsum.photos/300/200" alt="" />
        <div class="text-titre">
          <p class="titledest">Sydney</p>
        </div>
        <div class="text-img">
          <p>Hotel Calypso</p>
          <p>1 week</p>
        </div>
        <div class="prix">
          <p>150€</p>
        </div>
      </div>
      <div class="dest-img">
        <img class="img" src="https://picsum.photos/300/200" alt="" />
        <div class="text-titre">
          <p class="titledest">Sydney</p>
        </div>
        <div class="text-img">
          <p>Hotel Calypso</p>
          <p>1 week</p>
        </div>
        <div class="prix">
          <p>150€</p>
        </div>
      </div>
    </div>
    <div class="button-fin">
      <h3>See more</h3>
    </div>
  </div>

  <!-- navbar here -->
  <header>
    <?php include_once "../header-footer/footer.php"; ?>
  </header>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>