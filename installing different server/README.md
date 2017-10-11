## Apache Server

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
**Note**: the 'service' after sudo in step 3 will work only in Ubuntu 14.04 or lower. For higher versions, use 'systemctl'.


**Public Folder :**
```
/var/www/html/
```
**Configuration File**
```
/etc/apache2/apache2.conf
```
**Restart**
```
sudo service apache2 restart
```

## FTP Server

To install the FTP server on 14.04, follow following steps.

Step1 : Ensure that you do not have an outdated copy of software running in your system.
```
sudo apt purge vsftpd \apt-cacher-ng
```
Step2 : Install vsftpd using apt command.
```
sudo apt-get install vsftpd
```
Step 3 : To verify whether vsftpd has been installed or not, run the following command.
```
sudo service vsftpd status

```
The output of this should look something like this - 
```
 vsftpd start/running, process 9217

```

**Note 1**: To check whether ftp is working correctly, type the following command and upon being asked for username and password, type your respective credentials.
```
ftp localhost
```
The output should be something like this
```
Connected to localhost.
220 (vsFTPd 3.0.2)
Name (localhost:anuj): anuj
331 Please specify the password.
Password:
230 Login successful.
Remote system type is UNIX.
Using binary mode to transfer files.
```

If this is not the case, and the output is something like this
```
Connected to localhost.
220 (vsFTPd 3.0.2)
Name (localhost:anuj): anuj
331 Please specify the password.
Password:
500 OOPS: vsftpd: refusing to run with writable root inside chroot()
Login failed.
421 Service not available, remote server has closed connection
```
Then to solve this issue, open  /etc/vsftpd.conf  and add the following line to it.
```
allow_writeable_chroot=YES
```
This should sole this issue.

**To host an already existing directory on ftp**

Step1 : go to the directory that you want to host in ftp. Then type in the following command.
```
sudo mount --bind . /srv/ftp/
```
Then to check whether the files have been hosten on ftp or not, open ftp://localhost.


**Public Folder:**
```
/srv/ftp
```
**Configuration File**
```
/etc/vsftpd.conf
```
**Restart ftp:**
```
sudo service vsftpd restart
```

## SSH