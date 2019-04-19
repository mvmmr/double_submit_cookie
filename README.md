# Double Submit Cookies

## Tasks
Implement a web application that matches following criteria.

- [x] User login. You may use hard coded user credentials for demonstration purpose.

- [x] Upon login, generate session identifier and set a cookie in the browser. At the same time, generate the CSRF token for the session and set a cookie in the browser. The CSRF token value is not stored in the server side.

- [x] Implement a webpage that has a HTML form. The method should be POST and action should be another URL in the website.

- [x] When the HTML form is loaded, run a javascript which reads the CSRF token cookie value in the browser and add a hidden field to the HTML form modifying the DOM.

- [x] When the form is submitted to the action, the CSRF token cookie will be submitted and also in the form body, the CSRF token value will be submitted.

- [x] In the web page that accepts the form submission (the URL of the action), obtain the CSRF token received in the cookie and also in the message body. Compare the two values received and if they match, show success message. If not show error message.
