var Airtable = require('airtable');
Airtable.configure({
    endpointUrl: 'https://api.airtable.com',
    apiKey: 'keycziJhTpO0CjYAU'
});
var base = Airtable.base('app1YZemoGVRk9Ipx');

base('RENTER_LOGIN').select({
        // Selecting the first 3 records in Grid view:
        maxRecords: 3,
        view: "Grid view"
    }).eachPage(function page(records, fetchNextPage) {
        // This function (`page`) will get called for each page of records.

        records.forEach(function(record) {
            console.log('Retrieved', record.get('renterID'));
        });

        // To fetch the next page of records, call `fetchNextPage`.
        // If there are more records, `page` will get called again.
        // If there are no more records, `done` will get called.
        fetchNextPage();

    }, function done(err) {
        if (err) { console.error(err); return; }
    });