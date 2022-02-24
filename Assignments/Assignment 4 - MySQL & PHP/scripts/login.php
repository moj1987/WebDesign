<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../styles/formStyle.css" />
    <title>School</title>
  </head>

  <body>
    <h1>Log in</h1>

    <form action="signIn.php" method="POST" name="from1" id="form1">
      <!-- for for label should be the id for input ---->
      <!--TabIndex: using tab to go next-->
      <label for="name">Username:</label>
      <input
        type="text"
        id="name"
        name="fname"
        pattern="\.?[a-zA-Z]{3}"
        autofocus
        autocomplete="given-name"
        placeholder="3 letters"
        maxlength="20"
        tabindex="1"
      />

      <label for="password">Pass-freaking-Word:</label>
      <input type="password" id="name" name="fname" required tabindex="2" />

      <div class="buttons">
        <input type="submit" name="submit" value="Sing in" tabindex="3" />
        <input type="reset" name="reset" value="Clear" tabindex="4" />
      </div>
    </form>
    <br /><br /><br />

    <h2>Sign up from</h2>
    <form action="signUp.php" method="POST" name="from1" id="form1">
      <label for="name">ID:</label>
      <input
        type="text"
        id="id"
        name="id"
        pattern="\.?[a-zA-Z]{3}"
        autofocus
        autocomplete="new-password"
        placeholder="School ID"
        maxlength="20"
        tabindex="5"
      />

      <label for="name">Username:</label>
      <input
        type="text"
        id="name"
        name="fname"
        pattern="\.?[a-zA-Z]{3}"
        autofocus
        autocomplete="given-name"
        placeholder="3 letters"
        maxlength="20"
        tabindex="6"
      />

      <label for="password">Password:</label>
      <input type="password" id="name" name="fname" required tabindex="7" />

      <div class="buttons">
        <input type="submit" name="submit" value="Sign up" tabindex="8" />
        <input type="reset" name="reset" value="Clear" tabindex="9" />
      </div>
    </form>

    <script src="scripts/script.js"></script>
  </body>
</html>
