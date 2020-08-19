<p  align="center"><img  src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

# Laravel X AdminLTE3

This project is about how to using AdminLTE3 template with laravel.

## What i use

 - Php version 7.1.3 
 - Laravel framework version 5.6 
 - Template by : [https://adminlte.io/themes/dev/AdminLTE/index3.html](https://adminlte.io/themes/dev/AdminLTE/index3.html)
 - Database postgresql


## Installation

Clone from repo into your local. Just copy this command

    - git clone https://github.com/cowik/laravelxadminlte3.git

Create db on postgresql with name laravelxadminlte3

Create username and password with tinker command below

    - php artisan tinker
    - $user = new App\User; 
    - $user->name = "your name"; 
    - $user->email = "your email"; 
    - $user->username = "your username";
    - $user->role = "your role";
    - $user->password = bcrypt('your password'); 
    - $user->remember_token = str_random(10);
    - $user->save();

 
Go to project folder and run this command from terminal
 
    - php artisan migrate
    - php artisan serve

## Overview

***Login View*** 

> ![https://i.imgur.com/iwhkxss.png](https://i.imgur.com/iwhkxss.png)

***Login Failed View*** 

> ![enter image description here](https://i.imgur.com/amuxRMv.png)

***Dashboard View***

> ![enter image description here](https://i.imgur.com/ZvAKyLH.png)

***Logout Button***

> ![enter image description here](https://i.imgur.com/kVzXMXT.png)
