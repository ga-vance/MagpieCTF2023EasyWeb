# Chocolate Chips with Zero-G

### Category: Web Exploitation
### Author: Greg Vance (Expergefied)

## Description


## Hints
1. Find the hidden Admin page
2. Cookies are stored locally

## Solution
1. The admin.html page needs to be found. There is an invisible link in the nav-bar. Robots.txt mentions /admin.html, or it can be seen when inspecting the code.
2. Once the admin login page is found, then you need to attempt to login. At this point a cookie is generated.
3. By checking the cookie, we can see that we have an admin cookie set to false. If the value is changed to 'true' the page will redirect to the flag.

## Flag
magpie{Ar3_7h3r3-c00k135_1n-5pAc3?}
