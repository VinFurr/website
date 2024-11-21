README.txt by Vincent
 __    __   ________   __          __           __________
/_/|  /_/| /_______/| /_/|        /_/|         /_________ \
| ||  | || |  _____|/ | ||        | ||        /  ______  \ |
| ||__| || | ||___    | ||        | ||        | //     \  ||
| |/__| || | |/__/|   | ||        | ||        | ||      | ||
|  ___  || |  ___|/   | ||        | ||        | ||      | ||
| ||  | || | ||_____  | ||______  | ||______  | | \_____/ ||
| ||  | || | |/____/| | |/_____/| | |/_____/|  \ \_____/ //
|_|/  |_|/ |_______|/ |________|/ |________|/   \_______//

Changes in the html code:
1. linked two external CSS files. One in the CSS folder and the other from https://fonts.googleapis.com
   (it was never specified how many external css files that could be linked to the html code)

2. Added meta tags for search engine optimalization:
   - Meta content type
   - Title
   - Meta description
   - Viewport (but this already existed so i didnt add it)
   well, that is "the good meta tags" according to https://moz.com/blog/the-ultimate-guide-to-seo-meta-tags
   (it was the last thing i did after i finished the css code. i only had the meta description before that)
   Since i saw viewport already existed, i removed That code.  The html validator did not like meta content type
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> so i removed that too... 
   so i actually only added title and meta description

3. No other changes were made in the html code

CSS code: 
1. Easter egg: Hello

2. i have the @import url("") in the code, but it is commented out (/**/) because it has the same function as the secont CSS link in the html code. 
   also if the website did not read the master.css file for some reason, it would not affect the external CSS file from 
   https://fonts.googleapis.com because the the styles from that source will still be applied even if master.css somehow did not work.

3. Added lots of comments for different codes which also partly explains my process. some were used at the beinning, but are commented out now
   because i did to need them anymore and/or that i found a better sulotion. you will see that a lot of the comments says that i had to 
   look up on different sources like w3schools, MDN and stackoverflow to find the sulotion.

4. @media screen is applied for different screen sizes. the main code is inteded for computer screens, the @media screen applies for smaller screens:
   lower than 600px width, between 600px and 960px width and the main code for more than 960px width

5. Noticed failure in the first delivery and i had to fix it: 
   -font face in the h2 who are not child of #newsletter-introduction
   -edited the lenght for the hr to marigin: auto 5%;
   -removed the padding from list
   -set margin-top: 1em; for figure when screen size is less then 600px


