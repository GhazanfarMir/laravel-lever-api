# Laravel Lever Api Package

This is the Laravel Package which can be used to retrieve jobs from Lever for a specified site/employer.

## Usage

Once the Facade and Service Provider are setup, you can first setup the site using: 

```
LeverApi::setSite('ebury'); // passing site
```

Then use the following methods to get list of all jobs:

```
$jobs = json_decode(LeverApi::get()) // retrieve as an array
```

OR

```
$jobs = json_decode(LeverApi::getJson()) // returns JSON
```