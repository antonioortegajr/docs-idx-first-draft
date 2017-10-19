---
title: 'REST API'
---

## Getting Started Questions
- #### “Can I get MLS data from your API?”
Our API does not currently return MLS data or MLS property listing data. The only exception is listings belonging to the agents on an IDX Broker account. More on this…
- #### “What data can I get?”
Lead data, agent info, featured listings, info on the MLS, widget source URLs, saved links, search fields and values, and a lot more.
- #### “How much does it cost?”
The IDX Broker API is available to anyone with a valid API key at no extra charge. Your key can be found in your IDX Broker account.
- ##### “Do you have sample code?”
Yes! You can find official examples here.
We also offer lessons on API consumption here. Unofficial examples can be found on this repo.

### Authentication

Access to the IDX API is handled through keys. These keys can be easily created, changed, and revoked in your IDX Control Panel. This is a measure of security that ensures that your account credentials and sensitive information are never exposed by the API.

More on the different kinds of  API keys here.

API keys are passed via request headers. Find more on required, optional and return headers.

### Rate Limits

250 accesses per hour per accesskey for Platinum level
150 accesses per hour per accesskey for Lite level
Additionally, development partners using their API key as an ancillary key have triple this limit (750).

Also note that this is a per accesskey limit, meaning that partners who service multiple client accounts have use of 750 accesses per hour per client.

### Endpoints

All API calls must be made using https. Endpoints are structured as follows:

https://api.idxbroker.com/component/method/primary request ID/secondary request ID?query string

for example this endpoint calling for leads signed up on April Fools day 2016 would include a query string:

https://api.idxbroker.com/leads/lead?interval=24&startDatetime=2016-04-01+23:59:59&dateType=subscribeDate

All API inputs, whether in the query string or request body, must be in the form of an ampersand (&) delineated and URL encoded string.

### Output

Users can select between the default JSON encoded output and simple XML output.

This can be set in the API Key management page of your account control panel or by passing the optional outputtype headers.

Sample output from our Leads and Featured Listings methods.
