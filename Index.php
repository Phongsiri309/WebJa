<?php 

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register API</title>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
      crossorigin="anonymous"
    ></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta
      name="google-signin-client_id"
      content="1042372769466-ctqeoo0isdkbt1pethp8no473sejgl7h.apps.googleusercontent.com"
    />
    <script>
      function onSignIn(googleUser) {
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Do not send to your backend! Use an ID token instead.
        console.log("Name: " + profile.getName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail()); // This is null if the 'email' scope is not present.
        var Name = profile.getName();
        var Email = profile.getEmail();
        var dataN = (document.getElementById("Name").innerHTML = Name);
        document.getElementById("Email").innerHTML = Email;
        return {
          dataN,
        };
      }
      function signOut() {
        var auth2 = gapi.auth2.getAuthInstance();
        auth2.signOut().then(function () {
          console.log("User signed out.");
        });
      }
    </script>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand">Home</a>
        <form class="d-flex">
          <div id="Name"></div>
          <div class="g-signin2" data-onsuccess="onSignIn"></div>
          <br />
          <a href="home.html" onclick="signOut();">Sign out</a>
        </form>
      </div>
    </nav>
    <div class="container">
      <table class="table-dark table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">ServiceName</th>
            <th scope="col">Entrypoint</th>
          </tr>
        </thead>
        <tbody></tbody>
      </table>
    </div>
  </body>
  <style></style>
</html>
