# Bookmarklets
Bookmarklets are unobtrusive JavaScripts stored as the URL of a bookmark in a web browser or as a hyperlink on a web page [see wikipedia page](https://en.wikipedia.org/wiki/Bookmarklet).


On a simpler tone, we can run javascript code directly in the address bar of our browser.
## First Way - directly typing into address bar
```
javascript:(function(){alert('hello anuj !!');})()
```
The result would be a dialogue box saying hello anuj !!.

But this method is very cumbersome as typing complex javascript codes in the address bar and also in a single line can be very tediuos and can lead to errors.

## Second Way - Executing javascript(code in same file)
We could write the same javascript code as an attribute's value (eg - href in a tag).

Create a file named index1.html and write the following code in it.
```
<!DOCTYPE html>
<html>
<body>
<a href="javascript:(function(){alert('hello anuj !!');})()">Click me !!</a>
</body>
</html>
```
Upon clicking on click me, the output would be a dialogue box saying hello anuj !!.

But it is quite combersome to write javascript like this without spaces and indentation. That is why this approach is not widely used.

## Third Way - Executing javascript(code in seperate js file)
A better way would be if we could write the javascript code in a seperate page and then just give a link to that page in href.

Create a file named fun.js and write following code to it.

```
(function() {
	alert("Hello anuj !");
})();



```

Then create a file named index2.html and write the following contents in it.
```
<!DOCTYPE html>
<html>
<body>
<a href="javascript:(function() {let script = document.createElement('script');	script.src ='fun.js';document.body.appendChild(script);})();">Click me !!</a>
</body>
</html>
```
The output would be same as in previous cases.
This method is much easy in comparison to previous methods.

**note:** This artilce was made with reference to the video by [Danial Shiffman](https://www.youtube.com/watch?v=DloHqUfPbJc)