# Random travel

<img src = "https://media.giphy.com/media/IvDNMYRwQQiIM/giphy.gif" width: 100 />

## Random-travel

Random-travel is a school project in Laravel. The app should use:

1. Controllers
2. Migrations
3. HTTP Tests (on all routes)
4. Laravel Mix
5. Middleware
6. Models with relationships
7. Routes
8. Eloquent
9. Relationships
10. Validation
11. Views (Blade)

## About Random-travel

On this website you can log in and add countries you want to travel to on your wishlist. You can either search for a specific country or press any continent you would like and get suggestions.

## Run project

1. Clone the project and set up your Database.
2. Run: php artisan serve (in your terminal to open a localhost:8000)
3. Run: php artisan migrate:fresh --seed (to get access to our Database).

You can now log in using: jenn@jenn.se 123

## Licence

The Laravel framework is open-sourced software licensed under the MIT license.

## Code review

Code review by [Emma Hansson](https://github.com/h-emma) and [Marcus Hägerstrand](https://github.com/marcusxyz).

1. `app/Models/User.php` - This file seem to have generated comments, maybe you could remove them to make the file compact incase it grows larger?

2. `app/Http/Controllers/DashboardController.php 21` - Make sure to remove comments before publishing your app.

3. Add .DS_Store to .gitignore

4. `Tests/Feature/` - Remove ExempelTest.php if it's not in use.

5. `routes/web.php` - For better readability you could organize the routes, perhaps catergorise them?

6. `Resources/view/dashboard.blade.php: 10-13` - @CSRF seems to be missing, make sure to add for improved security. Also a `label` tag is missing, add this to improve accessability.

7. ` Resources/view/dashboard.blade.php : 36` - `{{ method_field('PUT')}}` is the old way of writing @method('PUT') and there seems to be no 'PUT' in `web.php`. Maybe delete this comment if it's not in use.

8. `Resources/view/dashboard.blade.php : 55` - `<br>` tags is not semantic, perhaps use other methods? Style with CSS?

9. `Resources/view/header.blade.php: 8` - Add a title for your project in the head tag, to make it more personal.

10. `resources/views/dashboard.blade.php: 14` - $key seems misleading, maybe write something like foreach $continents as $counties => $country

11. `Database/migration/2022_03_08_100212_create_countries.php: 20-21` - Make sure to remove comments if it's not in use.

12. `Database/seeders/DatabaseSeeder.php` - Very good use of Database seeder. It was very smooth to setup.

13. `app/Http/Controllers/RegisterController.php: 24` - Register confirmation doesn't show up. One way to solve this is to add a sucess.blade just like errors.blade and include it in index.blade.

14. Background image on body makes it hard to read the content sometimes.

15. `resources/views/dashboard.blade.php: 51` Why is this commented? This works fine and it's nice to have

16. `resources/views/dashboard.blade.php: 54` - Add more info after user checks off a trip, so the user atleast gets a feedback on what he/she has done.

17. `resources/views/dashboard.blade.php: 46` - It's hard to understand what the checkbox and send button does, you could clarify this with a helper text.

18. `resources/views/dashboard.blade.php` - Form is missing labels, make sure to have this for better accessability and to ensure that the component's purpose is clear.

19. `Login- and RegisterControllers.php` Make sure to add backend validations, remember that you should never trust the user as Vincent always say. For example users can send in invalid emails like johnsmith@yrgo instead of johnsmith@yrgo.se also there is no password validations.

20. Very impressed with the URL-structure, great work!! ⭐️
