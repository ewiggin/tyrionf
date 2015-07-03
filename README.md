
# tyrionf
> Tyirion Framework. A Very tiny PHP Framework. 

> A PHP Framework into 3Kb

### Get Started
Put all files on your server directory. No needs more!

#### Routes
To define routes, only needs define `$Route` variable on `index.php` file.
The `$Route` struct is this:

```
$Route = array(
	'/awesome-users/' => array(controller => 'controller_name', action => 'action_name')
);
```

`controller` value is the *class_name* reference stored on `/controllers` path.
`action` value is the *method of class_name* reference to execute.

*Can I explain this little more?*
.htaccess file puts all http routes into `$_GET['u']` server variable. Always the route can be accessible. `$Route` index is the url.
> Example: 
> `HTTP GET 200 /awesome-users/` route transforms to `Array([u] => [/awesome-users])` on the code. if the $Route index is not defined, show 404.php file.

#### Controllers 
Controllers define all logical business interactions of the app. Are Class with a name defined on `$Route` var, and no extends from nothing. Only have methods and return values. The methods, are defined on `$Route` var yet.

Controller's return always be Array.
We recomends, pass view reference with `view_file` key value.

> Example:
> If we have defined `$Route = array('/' => array(controller=>'home_controller', action => 'hello'));`
> HTTP GET 200 /awesome-users/ execute home_controller class `hello()` method.

```
class home_controller {
	public function hello(){
		return array(
			view_file => 'home.php',
			name => 'Tyrion Lannister'
		);
	}
}
``` 
Very simple, and easy.

#### Views
Views are called by Layout file. All controller's return variables are accessible into views with the name of index.

```
<p><?=$name?></p>
``` 
> Result: `<p>Tyrion Lannister</p>`

#### What more?
You can write any question on issues section. This framework is writed in 15 minutes to explain MVC an student. 