**Apache Server**

Apache is a free and open source server software.
To install it 

Step1 : Ensure that you do not have an outdated copy of software running in your system.
```
sudo apt purge apache2 \apt-cacher-ng
```
Step2 : Install apache2 using apt command.
```
sudo apt install apache2
```
Step 3 : To verify whether apache2 has been installed or not, run the following command.
```
sudo service apache2 status
```
The output of this should be - 
```
 * apache2 is running
```


Note: the 'service' after sudo in step 3 will work only in Ubuntu 14.04 or lower. For higher versions, use 'systemctl'.