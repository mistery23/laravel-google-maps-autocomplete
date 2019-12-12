# Laravel Google-maps autocomplete

## Install
```
composer require mistery23/laravel-google-maps-autocomplete
```

###publish provider
```
php artisan vendor:publish --provider="Mistery23\GoogleMapsAutocomplete\AutocompleteServiceProvider"
```

Create an app and enable Places API and create credentials to get your API key
[https://console.developers.google.com](https://console.developers.google.com)

Add the below to your `.env` file

```shell
GOOGLE_AUTOCOMPLETE_API_KEY=############################
```

##using

```
use Mistery23\GoogleMapsAutocomplete\AutocompletePlace;

...
$place = 'new';
$params = [
    'sessiontoken' => 'xxxxxxxxx',
    'language'     => 'en',
];
$autocomplete = new AutocompletePlace();
$autocomplete->autocomplete($place, $params);

```
$place - is needle place,

$params - is optional parameters, see https://developers.google.com/places/web-service/autocomplete for more optional parameters
