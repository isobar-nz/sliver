# Sliver

**Tinker with a sliver of your code with an interactive debugger and REPL for SilverStripe, powered by psysh.**

Inspired by Laravel's [artisan tinker](https://github.com/laravel/framework/blob/5.0/src/Illuminate/Foundation/Console/TinkerCommand.php), and powered by [psysh](http://psysh.org/), *Sliver* allows you to play with your [SilverStripe](https://www.silverstripe.org) code during runtime with the added debugging functionality from psysh.

## Installation
Install the *Sliver* cli globally by running the following command:

```bash
$ composer global require littlegiant/sliver
```

## Usage
+ Simply run `sliver` in the root of your SilverStripe project. 
+ Write your line of PHP code and hit enter.
+ That line of code will then be run and the output value of that line will be displayed in console.

For more information, check out [psysh's documentation](http://psysh.org/).


## License

*Sliver* is released under the MIT license


## Contributing

### Code guidelines

This project follows the standards defined in:

* [PSR-0](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-0.md)
* [PSR-1](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-1-basic-coding-standard.md)
* [PSR-2](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md)
