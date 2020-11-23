# Madrasa new registration form
## Project description

New registration form for the [Madrasa website](https://madrasafree.com/)
The form will include: 
1. Registration form for OPENEDX learning system as it is now.
2. Optional donation to our social movement.
The file will be embedded in our website using the [OpenEdx system](https://github.com/edx/edx-platform). The relevant files for the registration file must be added to [our OpenEdx Theme](https://github.com/amitbend/madrasa_theme
), an action that will replace the default registration form found in OPENEDX's templete in our new form.

Files to add to Theme:
* [login_and_register.html](https://github.com/edx/edx-platform/blob/master/lms/templates/student_account/login_and_register.html)
* [register.underscore](https://github.com/edx/edx-platform/blob/master/lms/templates/student_account/register.underscore)

The new form will include an optional checkbox and a new section that includes multiple amounts to click, the Iframe will open inside the page and include a payment page where the payment will be made, the data will be sent by the iCredit API. Some of the amounts will have fixed monthly amounts - 25, 50, 100, 200 and the option of a customized monthly amount and a customized one-time amount.

There are two possible scenarios for integrating the donation process into the form:
1. (More desirable) - The fields of the registration form will appear on the screen along with the iFrame of the donation, and one button will complete both processes.
2. After checking the donation's checkbox, and registering on the site, the user will be transferred after the successful registration to a new screen that includes the iFrame of the donation. 

The server code will be written in Python / django. There is a demo code of iCredit IPA (sent by their support team). 
There are files of the current project status (based on the examples written in php and HTML / CSS / JS / jQuery).


## Tests

The following is a link to the test environment management environment of the iCredit test page:
https://testicredit.rivhit.co.il/Management/Login.aspx?redirect=Templates.aspx

login details:

Username: user2
Password: password2

Optional test payment page ID - test page:
6ff3d7c6-001c-48ea-a6c8-9482791c1d60

You can charge with a card:
45800000000000000000

For iCredit API support:
api@rivhit.co.il

Current registration page (without the support section)
https://madrasafree.com/register
