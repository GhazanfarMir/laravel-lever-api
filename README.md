# Laravel Lever Api Package

[![StyleCI](https://styleci.io/repos/114803807/shield?branch=master)](https://styleci.io/repos/114803807)


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

## Questions
Feel free to submit an issue if you have any issues.

## License

MIT License 2017 - Ghazanfar Mir