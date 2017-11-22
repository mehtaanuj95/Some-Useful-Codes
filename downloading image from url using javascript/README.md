
Assume that the url is stored in a variable called ```url```.
Now, html ```a``` tags have an attribute named ```download``` which when added to an ```a``` tag would download the image pointed by its ```a```'s ```href``` attribute.

We could do this by creating a temporary ```a``` element and then adding download attrbute to it and finally after image has been downloaded, removing the created element.

Here is an example.

```
<!DOCTYPE html>
<html>
<body>

<script type="text/javascript">

	//This can be a url of a web page also.
	var url = "images/img1.jpg"        
	var a = document.createElement('a');
	a.href = url;
	a.download = "image.jpg";
	document.body.appendChild(a);
</script>

</body>
</html>
```
When we open this webpage, we should see our file getting downloaded.