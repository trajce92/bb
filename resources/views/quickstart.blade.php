<!-- <!DOCTYPE html>
<html>
  <head>
    <title>Gmail API Quickstart</title>
    <meta charset='utf-8' />
  </head>
  <body> -->

    <!--Add buttons to initiate auth sequence and sign out-->
    {{-- <button id="authorize-button" style="display: none;">Authorize</button> --}}
    {{-- <button id="signout-button" style="display: none;">Sign Out</button> --}}

    <pre id="gmail_content"></pre>

    <script type="text/javascript">
      // Client ID and API key from the Developer Console
      var CLIENT_ID = '134994219666-s53kp2ej7ert2pcaoun3g7rsqk06qi5v.apps.googleusercontent.com';
      var API_KEY = 'AIzaSyCp4blmwaMGt3JfN3bApECseSdh8JrSLwQ';

      // Array of API discovery doc URLs for APIs used by the quickstart
      var DISCOVERY_DOCS = ["https://www.googleapis.com/discovery/v1/apis/gmail/v1/rest"];

      // Authorization scopes required by the API; multiple scopes can be
      // included, separated by spaces.
      // var SCOPES = 'https://www.googleapis.com/auth/gmail.readonly';
      var SCOPES = 'https://mail.google.com/';

      // var authorizeButton = document.getElementById('authorize-button');
      // var signoutButton = document.getElementById('signout-button');

      /**
       *  On load, called to load the auth2 library and API client library.
       */
      function handleClientLoad() {
        gapi.load('client:auth2', initClient);
      }

      /**
       *  Initializes the API client library and sets up sign-in state
       *  listeners.
       */
      function initClient() {
        gapi.client.init({
          apiKey: API_KEY,
          clientId: CLIENT_ID,
          discoveryDocs: DISCOVERY_DOCS,
          scope: SCOPES
        }).then(function () {
          // Listen for sign-in state changes.
          gapi.auth2.getAuthInstance().isSignedIn.listen(updateSigninStatus);

          // Handle the initial sign-in state.
          updateSigninStatus(gapi.auth2.getAuthInstance().isSignedIn.get());
          // authorizeButton.onclick = handleAuthClick;
          // signoutButton.onclick = handleSignoutClick;
        });
      }

      /**
       *  Called when the signed in status changes, to update the UI
       *  appropriately. After a sign-in, the API is called.
       */
      function updateSigninStatus(isSignedIn) {
        if (isSignedIn) {
          // authorizeButton.style.display = 'none';
          // signoutButton.style.display = 'block';
          // listLabels();
          listMessages('me', '', listMessagesCallback);
        } else {
          // authorizeButton.style.display = 'block';
          // signoutButton.style.display = 'none';
        }
      }

      /**
       *  Sign in the user upon button click.
       */
      function handleAuthClick(event) {
        gapi.auth2.getAuthInstance().signIn();
      }

      /**
       *  Sign out the user upon button click.
       */
      function handleSignoutClick(event) {
        gapi.auth2.getAuthInstance().signOut();
      }

      /**
       * Append a pre element to the body containing the given message
       * as its text node. Used to display the results of the API call.
       *
       * @param {string} message Text to be placed in pre element.
       */
      function appendPre(message) {
        var pre = document.getElementById('gmail_content');
        var textContent = document.createTextNode(message + '\n');
        var messageLink = document.createElement('a');
        messageLink.title = "my title text";
        messageLink.href = "http://example.com";
        messageLink.appendChild(textContent);
        pre.appendChild(messageLink);
      }

      /**
       * Print all Labels in the authorized user's inbox. If no labels
       * are found an appropriate message is printed.
       */
      function listLabels() {
        gapi.client.gmail.users.labels.list({
          'userId': 'me'
        }).then(function(response) {
          var labels = response.result.labels;
          appendPre('Labels:');

          if (labels && labels.length > 0) {
            for (i = 0; i < labels.length; i++) {
              var label = labels[i];
              appendPre(label.name)
            }
          } else {
            appendPre('No Labels found.');
          }
        });
      }

      /**
       * Retrieve Messages in user's mailbox matching query.
       *
       * @param  {String} userId User's email address. The special value 'me'
       * can be used to indicate the authenticated user.
       * @param  {String} query String used to filter the Messages listed.
       * @param  {Function} callback Function to call when the request is complete.
       */
      function listMessages(userId, query, callback) {
        var getPageOfMessages = function(request, result) {
          request.execute(function(resp) {
            result = result.concat(resp.messages);
            // get next messages page
            if (resp.nextPageToken && result.length <= 20) {
              request = gapi.client.gmail.users.messages.list({
                'userId': userId,
                'pageToken': resp.nextPageToken,
                'q': query
              });
              getPageOfMessages(request, result);
            } else {
              callback(result);
            }
          });
        };
        var initialRequest = gapi.client.gmail.users.messages.list({
          'userId': userId,
          'q': query,
          'maxResult': 10,
        });
        getPageOfMessages(initialRequest, []);
      }
      function listMessagesCallback(result){
        // console.log(result);
        result.length = 10;
        result.forEach(function(item, index){
          // console.log(index + ": " + item.snippet);
          getMessage('me', item.id);
        });
      }

      /**
       * Get Message with given ID.
       *
       * @param  {String} userId User's email address. The special value 'me'
       * can be used to indicate the authenticated user.
       * @param  {String} messageId ID of Message to get.
       * @param  {Function} callback Function to call when the request is complete.
       */
      function getMessage(userId, messageId, callback) {
        var request = gapi.client.gmail.users.messages.get({
          'userId': userId,
          'id': messageId,
        });
        request.execute(function(resp) {
            // make element for each email
            if(resp.payload.parts){
              // if message is multipart, traverse through all parts
              resp.payload.parts.forEach(function(item, index){
                // item.
              });
            }
            else{
              // else print message
              if(resp.payload.body.attachmentId){
                // data in attachment, get with messages.attachments.get request
              }
              else{
                var decodedPart = decodeURIComponent(escape(atob(resp.payload.body.data.replace(/\-/g, '+').replace(/\_/g, '/'))));
                // console.log(decodedPart);
                // appendPre(decodedPart);
                appendPre(resp.snippet);
              }
            }
          });
      }




    </script>

    <script async defer src="https://apis.google.com/js/api.js"
      onload="this.onload=function(){};handleClientLoad()"
      onreadystatechange="if (this.readyState === 'complete') this.onload()">
    </script>
<!--   </body>
</html> -->