<h1> RestAPI in Lumen Micro-Framework </h1>

Facilitador: <b>Gabriel M. Carneiro</b><br>
E-mail: <b>carneiro.development@gmail.com </b>
<hr>

<h4> The Case </h4>
A book store hire your team to build a system that control the books. Each book belongs to just an author, although an author could have created more than a book. Your task is build a RestAPI that deliver this data. The communication pattern have to be JSON.

<h4> Requirements </h4>

* Apache, MySQL, Php 7.1+
* <a href="https://getcomposer.org/download/">Composer</a>

<h4> How to install </h4>

* Within the folder who will store the project, type <kbd> git clone https://github.com/GabrielCarneiroDeveloper/RestAPI_Lumen.git </kbd>
* In project's root, run <kbd> composer install </kbd>
* Rename <b>.env.example</b> to <b>.env</b> set the database info in this file.
* In project's root yet, run the commands <kbd>php artisan key:generate</kbd>
* In order to create author and book table, in project's root run <kbd>php artisan migrate</kbd>
* In order to populate author and book table with test datas, in project's root run <kbd>php artisan db:seed</kbd>
* to run RestAPI, in project's root use the command <kbd>php artisan serve</kbd>
* to test it access <b>http://localhost:8000/api/author</b>

![Getting all authors](https://raw.githubusercontent.com/GabrielCarneiroDeveloper/RestAPI_Lumen/master/resources/images/Screenshot%20from%202018-03-31%2020-26-44.png)

<h4>About the project</h4>

* Aiming show how to improve project's security, has been deployed an Auth0 Token Authentication, to use it just uncomment the <b>middleware</b> in <b>route/web.php</b>. The token is in <b>token.txt</b> stores in project's root.

* Just for convention, the routes makes use of <b>api</b> words in it. For example: <b>http://localhost:8000/api/author</b> instead just <b>http://localhost:8000/author</b>
* There's an incompatibility issue in use Lumen or Laravel with php 7.2+, so to this project make use of Php 7.1+

<h3>I hope you enjoy the project, and if you liked it please starred it. Any question or doubts, you can send me an e-email. Thanks in advance.</h3>
