/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

import java.io.IOException;
import java.io.PrintWriter;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

/**
 *
 * @author anuj
 */
public class login extends HttpServlet {

    /**
     * Processes requests for both HTTP <code>GET</code> and <code>POST</code>
     * methods.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        try (PrintWriter out = response.getWriter()) 
        {
            //Get Values entered in form fields in login page
            String username = request.getParameter("username");
            String password = request.getParameter("password");
            
            //The code for database connection must be inside try catch
            try
            {
                Class.forName("com.mysql.jdbc.Driver");
                Connection con = null;
                con = DriverManager.getConnection("jdbc:mysql://localhost:3306/demologin","root","");
                Statement st = con.createStatement();
                String q = "select * from users where name='"+username+"' and password='"+password+"'";
                
                ResultSet rs = st.executeQuery(q);
                
                //Intitlaise extra variables (if any)
                String username_d = null;
                String password_d = null;
                String semester_d = null;
                
                while(rs.next())
                {
                    //wrote 2 because in original database username was at no. 2 column
                    username_d = rs.getString(2);
                    password_d = rs.getString(3);
                    semester_d = rs.getString(4);
                    
                    out.println(username_d+"");
                    out.println(password_d+"");
                    out.println(semester_d+"");
                    
                    //Requesting session
                    HttpSession res = request.getSession();
                    res.setAttribute("username", username_d);
                    
                    //Redirecting to index Page
                    response.sendRedirect("profile1.jsp");
                }
            }
            catch(Exception E)
            {
                System.out.println("Some exception is coming");
                System.out.println(E.toString());
            }
            
            out.println("<!DOCTYPE html>");
            out.println("<html>");
            out.println("<head>");
            out.println("<title>Servlet login</title>");            
            out.println("</head>");
            out.println("<body>");
            out.println("<h1>Servlet login at " + request.getContextPath() + "</h1>");
            out.println("</body>");
            out.println("</html>");
        }
    }

    // <editor-fold defaultstate="collapsed" desc="HttpServlet methods. Click on the + sign on the left to edit the code.">
    /**
     * Handles the HTTP <code>GET</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Handles the HTTP <code>POST</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Returns a short description of the servlet.
     *
     * @return a String containing servlet description
     */
    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>

}
