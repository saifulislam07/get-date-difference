The getDateDifference function calculates the time difference between the current date and a specified date, returning the difference in a human-readable format. The output is dynamically adjusted to display the difference in seconds, minutes, hours, days, weeks, months, or years, depending on the magnitude of the difference.


1. Install the Package : composer require saifuldev/get-date-difference

2. Use the Package in Your Laravel Application
   Step 2.1: Import the class and use it in your Laravel code. Here’s an example of how you might call the calculateDifference method in a controller:

![image](https://github.com/user-attachments/assets/8dd43f40-b86f-423a-8960-0e634caa42cd)


3. Register the Service Provider (if applicable)
If your package includes a service provider and you want to use it, register it in the config/app.php file under the providers array.
 -  Saifuldev\GetDateDifference\GetDateDifferenceServiceProvider::class,


use App\Http\Controllers\DateController;

Route::get('/date-difference', [DateController::class, 'showDifference']);



