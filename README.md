# Flarum in Heroku

This is just a simple demonstration of Flarum working with Heroku. Data is not quite 100% persistent yet (if you redeploy your app, all pre-existing sessions will be destroyed, blah blah blah).

What I've done:

* Added a `Procfile`
* `ext-gd` in `composer.json` (Flarum requires this extension but Heroku does not install it by default)
* updated `.gitignore` (if you're using Heroku, then yeah, you'll probably need to commit fonts and config.php and such)
* example `config.php`

You'll need to run `php flarum install` to set up your forum and manually supply database values there, then you can update `config.php` with the proper environment variables.

Not the best implementation, but I am working on it!