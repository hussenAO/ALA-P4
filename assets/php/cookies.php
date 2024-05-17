<!DOCTYPE html>
<html>
<body>

<div id="cookieConsentPopup" style="display: none; position: fixed; bottom: 0; background-color: #f1f1f1; padding: 10px; width: 100%; text-align: center;">
    This website uses cookies. Do you accept?
    <button onclick="acceptCookies()">Yes</button>
    <button onclick="declineCookies()">No</button>
</div>

<script>
    // Check if cookie consent has been set
    if (!getCookie("cookieConsent")) {
        document.getElementById("cookieConsentPopup").style.display = "block";
    }

    // Function to set a cookie
    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        var expires = "expires="+ d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    // Function to get a cookie
    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for(var i = 0; i <ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    // Function to handle accepting cookies
    function acceptCookies() {
        setCookie("cookieConsent", "true", 365);
        document.getElementById("cookieConsentPopup").style.display = "none";
    }

    // Function to handle declining cookies
    function declineCookies() {
        setCookie("cookieConsent", "false", 365);
        document.getElementById("cookieConsentPopup").style.display = "none";
    }
</script>

</body>
</html>