Create a file scatter.m and write the following contents into it.
```
data = load('data.txt');
x = data(:,1);
y = data(:,2);
plot_data(x, y);
```
In the above lines of code, I have assumed that the data is in data.txt. also plot is a function to plot data.

Now create a file plot_data.m and write the following code in it.
```
function plot_data(x, y)
figure;
plot(x, y, 'bx', 'MarkerSize', 10);
ylabel('label in x axis');
xlabel('label in y axis');
```
Here bx denotes blue colored x of size 10.
