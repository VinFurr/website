image sources: 
https://pixabay.com
https://ntnu.edu

-----------------------------

General about the site:

images are taken from https://pixabay.com which gives free images that are not copyright protected

the logo is taken from the UN sustainable goals website

only what i consider as small minor changes for screens that are 600px wide or less compared to screens over 600px wide

original plan was to make the logo and the map to be placed in same column, but changed to be placing in same row due to 
it would not look nice if the screen was for example 601px wide.

the 40em height was made intentionally as an design attempt based on the rule or 3rd. 
Applies only in a 1080x1920p screen while the browser window is set at full screen

-----------------------------

Comment on html:

shouldnt use <br> at contact.html, but fount an another way to overcome that. 

submitted.html is just emulating a feedback for receiving the message from contact.html. 
it does not work in real life.

-----------------------------

Comment for CSS:

navbar will slightly increase height when width is less than 600px

realized that i was repeating myself in the css so i made own class for box style and another 
class for box positioning (.content_box .header_box_position .middle_box_position .bottom_box_position)

.bottom_box_position did not work properly as the box overflowed made a part of it being rendered outside 
of the browser if the width is small enough. gave up and replaced it with.middle_box_position 

had some issues with the shorthand property for background, but think it should work for now. Still prefer to use
background-image, background-attachment, bakground-repeat etc... instead of background

might still be a little mess...