## Mean of multiple FITS images

This example shows how to load the fits data into memory and calculate the mean of that data.
Used **astropy** library for this purpose.


```
import matplotlib.pyplot as plt
import numpy as np
from astropy.io import fits

def mean_fits(filenames):
  n = len(filenames)
  if n > 0:
    hdulist = fits.open(filenames[0])
    data = hdulist[0].data
    for i in range(1,n):
      hdulist = fits.open(filenames[i])
      data += hdulist[0].data 
  
  data_mean = data/n
  return data_mean


if __name__ == '__main__':
  data  = mean_fits(['image0.fits', 'image1.fits', 'image2.fits'])
  print(data)

  # PLot the data
  import matplotlib.pyplot as plt
  plt.imshow(data.T, cmap=plt.cm.viridis)
  plt.colorbar()
  plt.show()
  
```
