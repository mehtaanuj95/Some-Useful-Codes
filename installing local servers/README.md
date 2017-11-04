Majority of the functionalities work normally in browsers. But some of the functionalities (loading external files, for example) works as expected only when the files are placed online via ftp or ssh. It we try to view them locally, we see a cross origin error in console.
The solution is to view them using a local web server.

#Python SimpleHTTPServer (1st option)

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
