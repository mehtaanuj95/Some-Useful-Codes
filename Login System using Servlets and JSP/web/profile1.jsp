<%-- 
    Document   : profile1
    Created on : Apr 13, 2017, 12:09:53 AM
    Author     : anuj
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>
        <% String name =(String)session.getAttribute("username");
        
        %>
        <h1>Welcome <%= name%>. This is your Dashboard.</h1>
    </body>
</html>
