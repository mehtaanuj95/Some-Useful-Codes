## This code calculates the medianof multiple FITS images

```
# Write your function median_FITS here:
import numpy as np
import sys
import time
from astropy.io import fits

import time, numpy as np
from astropy.io import fits

def median_fits(filenames):

  start = time.time()   # Start timer
  # Read in all the FITS files and store in list
  FITS_list = []
  for filename in filenames: 
    hdulist = fits.open(filename)
    FITS_list.append(hdulist[0].data)
    hdulist.close()

  # Stack image arrays in 3D array for median calculation
  FITS_stack = np.dstack(FITS_list)

  median = np.median(FITS_stack, axis=2)

  #finding the size requirement
  memory = FITS_stack.nbytes
  # convert to kB:
  memory /= 1024
  
  stop = time.time() - start   # stop timer
  return (median, stop, memory)
    
if __name__ == '__main__':
  result = median_fits(['image0.fits', 'image1.fits'])
  print(result[0], result[1], result[2])
```
