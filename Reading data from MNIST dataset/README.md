MNIST is the dataset of handwritten images.
This dataset can be downloaded from following URL - http://yann.lecun.com/exdb/mnist/

Four files are available on this link. You can download any one of the above.
(I downloaded this one - t10k-images-idx3-ubyte.gz ).

Step 1 : 
Extract it to get the binary file. After extracing, it should look like 't10k-images.idx3-ubyte'.

Step 2 :
Copy loadMNISTImages.m to the same directory.
Copy displayData.m to the same directory.

Step 3 :
Open Octave and write the following codes.


i = loadMNISTImages('t10k-images.idx3-ubyte' );
i = i';
displayData(i(1:10,:));


The result will be something like this. 

