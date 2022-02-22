<!DOCTYPE html>
<html>
    <head>
    <meta charset='UTF-8'>
    <meta name="google-signin-client_id" content="718317717615-mr54b4299rq92c4c3oldcvth9e58amau.apps.googleusercontent.com">
    </head>
    <body>
        <div class="g-signin2" data-onsuccess="onSignIn"></div>
        <a href="#" onclick="signOut();">Sign out</a>
    </body>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script>
    function onSignIn(googleUser) {
        var profile = googleUser.getBasicProfile();
        console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
        console.log('Name: ' + profile.getName());
        console.log('Image URL: ' + profile.getImageUrl());
        console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
      console.log(profile);
      
    }

  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }
    </script>
</html>