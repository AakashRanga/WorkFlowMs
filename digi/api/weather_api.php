<?php
// Set your API key from OpenWeatherMap
$apiKey = '25753608b51977dd2e3bf796db2408da';

// Location can be a city name or latitude/longitude
$location = isset($_GET['location']) ? $_GET['location'] : 'Chennai';

// You can also use latitude and longitude if needed
$lat = isset($_GET['lat']) ? $_GET['lat'] : '';
$lon = isset($_GET['lon']) ? $_GET['lon'] : '';

// API URL to fetch weather data
if (!empty($lat) && !empty($lon)) {
    // Fetch weather data based on latitude and longitude
    $url = "https://api.openweathermap.org/data/2.5/weather?lat={$lat}&lon={$lon}&appid={$apiKey}&units=metric";

} else {
    // Fetch weather data based on city name
    $url = "https://api.openweathermap.org/data/2.5/weather?q={$location}&appid={$apiKey}&units=metric";
}

// Initialize cURL session
$ch = curl_init();

// Set the URL and other options
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the cURL request
$response = curl_exec($ch);

// Close the cURL session
curl_close($ch);

// Convert JSON response to an array
$weatherData = json_decode($response, true);

// Check if the data is valid
if ($weatherData && $weatherData['cod'] == 200) {
    // Extract the relevant weather information
    $temperature = $weatherData['main']['temp'];
    $weatherDescription = $weatherData['weather'][0]['description'];
    $city = $weatherData['name'];
    $country = $weatherData['sys']['country'];

    // Return the weather information as a JSON response
    $result = [
        'city' => $city,
        'country' => $country,
        'temperature' => $temperature,
        'weather' => $weatherDescription
    ];

    echo json_encode($result, JSON_PRETTY_PRINT);
} else {
    // Handle errors (e.g., city not found)
    echo json_encode(['error' => 'Unable to fetch weather data.']);
}

?>
