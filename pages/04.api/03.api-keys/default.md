# API Keys

Access to the IDX API is handled through keys.
These keys can be easily created, changed, and revoked in your IDX dashboard.
This is a measure of security that ensures that your account credentials and sensitive information are never exposed by the API.
You can find API keys in every client account in Home > API Key Control.

![](kb_APIkey02.png)

## Client Access Keys

Access keys grant access to API data. Different components are available to different account levels (Partner or Client). These are detailed in the technical documentation for each component.

The key for passing your API key via request header is accesskey.

Example request headers in PHP:
```javascript
$headers = array(
    'Content-Type: application/x-www-form-urlencoded', // required
    'accesskey: abcdefghijklmnopqrstuvwx', // required - replace with your own
    'outputtype: json', // optional - overrides the preferences in our API control page
    'ancillary: xwvutsrqponmlkjihgfedcba'// optional - increased hourly access limits to three times the normal limit
);
````
