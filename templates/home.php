<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CountryCity API by shivammathur</title>
</head>
<body>
	<h1>CountryCity API by shivammathur</h1>
	<p>Country City API is a REST API to get a list of all the countries in the world. It can also be used to get a list of all the cities in a country.</p>

	<h2>Setup</h2>
	<p>
		<ol>
			<li>Download this API using composer by executing the command > <code>composer global require shivammathur/countrycity "master-dev"</code></li>
			<li>Then install this API using by executing the command > <code>composer create-project shivammathur/countrycity countrycity "master-dev" --prefer-dist</code></li>
			<li>You are all set.</li>
		</ol>

	</p>

	<h2>Get All Countries</h2>
	<p>
		<code>
			/countries
		</code>
	</p>

	<h2>Get All Cities in a Country</h2>
	<p>
		<code>
			/cities/{countryName}
		</code>
	</p>

	<h2>Error Format</h2>
	<p>
		<code>
			{"error":"true", "message": "error message here"}
		</code>
	</p>                  
</body>
</html>
