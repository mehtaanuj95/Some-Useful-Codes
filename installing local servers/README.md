Majority of the functionalities work normally in browsers. But some of the functionalities (loading external files, for example) works as expected only when the files are placed online via ftp or ssh. It we try to view them locally, we see a cross origin error in console.
The solution is to view them using a local web server.

# Python SimpleHTTPServer (1st option)

If you need a quick web server running then Python can help. It comes with a simple builtin HTTP server. With the help of this little HTTP server you can turn any directory in your system into your web server directory. The only thing you need to have installed is Python.

Go to the directory from where you want to start your server and then type in the terminal:
```
python -m SimpleHTTPServer
```
If using python3, then type:
```
python -m http.server
```
Then visit ```http://localhost:8000``` on your browser.

**note**: Unfortunately the python simple server is very slow. Loading a local page will often stall and it can't stream video and has trouble with even medium size files like an 8MB mp3 for example. However, it should suffice for loading in most text files, fonts and most images.



# Node http-server (2nd option)

An alternative is node.js http-server. It is much faster than python simple server.
**note:** You must have node.js installed in your system.

Type in the terminal:
```
sudo npm install -g http-server
```
Then go to the directory from where you want to start your server and then type in the terminal:
```
http-server
```
Then visit ```http://localhost:8080/``` on your browser.

**note:** If you are having problems where the browser does not reload your files after changes are made, you may need to instantiate the server with a specific cache value. To do this, include the cache timeout flag, with a value of '-1'. This tells the browser not to cache files.
```
http-server -c-1
```

# Using PHP built-in web server (5th option)

PHP has (since version 5.4.0) a built-in web server for testing purposes that can be used.

Go to the directory from where you want to start your server and then type in the terminal:
```
php -S localhost:8000
```
Then visit ```http://localhost:8000/``` on your browser.


**note** This tutorial was made by taking reference from this [GitHub Page](https://github.com/processing/p5.js/wiki/Local-server).

