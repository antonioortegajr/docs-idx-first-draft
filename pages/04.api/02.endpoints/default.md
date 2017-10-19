# URL Structure

There is a standard URL structure for all API accesses. The structure is as follows.

Protocol must always be https:

Followed by the component and then the method.

Other request parameters and or filter can be used depending on the method.

https://api.idxbroker.com/component/method/primary request ID/secondary request ID?query string

component REQUIRED
This is the main section of the API that is being accessed.
Current components include: partners, clients, mls, and leads
method REQUIRED
This is a function of the component that is being accessed. For example you might access the cities method of the mls component in order to get a list of cities that currently have properties in them for a given MLS.
All components have the following two methods: listcomponents and listmethods
primary request ID CONDITIONAL
This is required in certain circumstances to view or set specific information.
For example if you want to get information about a lead you would send the ID of the lead to view.
secondary request ID CONDITIONAL
Similar to the primary request ID, there are methods that require two IDs to be passed in order to function.
For example to view a single search for a lead you would need to pass the lead ID as the primary request ID and the search ID as the secondary request ID.
query string CONDITIONAL
Many GET requests offer filtering or specific views based on information passed in a standard, browser type, ampersand delineated query string following the URL.
Common Examples

Last hour leads: https://api.idxbroker.com/leads/lead?interval=1&startDatetime=2016-01-5+016:017:59&dateType=subscribeDate

By ID Lead data: https://api.idxbroker.com/leads/lead/4
