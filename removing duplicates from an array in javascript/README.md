To remove the duplicates from an array in javascript, we can use the ```filter``` function as follows - 

```
function onlyUnique(value, index, self) { 
    return self.indexOf(value) === index;
}

var a = ['a', 1, 'a', 2, '1'];
var unique = a.filter( onlyUnique );
console.log(unique);
```
The output should be ```['a', 1, 2, '1']```.

More info on filter function [here](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/filter).

Article with reference to [this post](https://stackoverflow.com/questions/1960473/get-all-unique-values-in-an-array-remove-duplicates).