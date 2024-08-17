The getDateDifference function calculates the time difference between the current date and a specified date, returning the difference in a human-readable format. The output is dynamically adjusted to display the difference in seconds, minutes, hours, days, weeks, months, or years, depending on the magnitude of the difference.



1. Install the Package


Step 1.1: Require your package in your Laravel project using Composer.



composer require saifulDev/get-date-difference



2. Use the Package in Your Laravel Application
Step 2.1: Import the class and use it in your Laravel code. Here’s an example of how you might call the calculateDifference method in a controller:


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SaifulDev\GetDateDifference\GetDateDifference;

class DateController extends Controller
{
    public function showDifference(Request $request)
    {
        // Validate the request
        $request->validate([
            'date' => 'required|date',
        ]);

        // Call the getDateDifference method
        $difference = GetDateDifference::calculateDifference($request);

        // Return or use the result
        return response()->json(['difference' => $difference]);
    }
}



3. Register the Service Provider (if applicable)
If your package includes a service provider and you want to use it, register it in the config/app.php file under the providers array.


'providers' => [
    // Other service providers

    SaifulDev\GetDateDifference\GetDateDifferenceServiceProvider::class,
],


4. Test the Integration
Step 4.1: Make sure to test the functionality in your application to ensure everything works as expected.

Example Usage in a Route
To quickly test the package, you might set up a route in routes/web.php:


use App\Http\Controllers\DateController;

Route::get('/date-difference', [DateController::class, 'showDifference']);
Then, you can access this route with a query parameter like ?date=2023-08-01 to see the difference between the current date and the specified date.

This setup will allow you to integrate and use the saifulDev/get-date-difference package in your Laravel application.