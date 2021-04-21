# API-Project-IPinfo.io.

An application in PHP that would be run from the command line (CLI). When it is run it should make an HTTP call to IPInfo API (this API works without auth
token) and depending on input argument would either:

1)store the obtained data in a JSON file (file path should come from CLI argument);
2)display that information in CLI in nicely formatted table.

HOW TO RUN.

1)Download this file and open its directory in Terminal/Cli/Cmd.
2)Write php index.php and press entre the Application will start working in Cli.

IT Does Not Need Apache as we are just making Http Call and requesting data in json form decoding it to show and encoding it again to store it in json datatype.
